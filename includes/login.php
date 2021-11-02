
<?php
  
  if(isset($_POST['formeLogin'])){

  	extract($_POST);


  	$q=$db->prepare("select * from user where email = :email");
  	$q->execute(['email'=>$lemail]);
  	$result=$q->fetch();

  	if($result==true){
         
         if(password_verify($lpassword, $result['password'])){

         		
			$_SESSION['email']=$result['email'];
			$_SESSION['date']=$result['date'];

         }else{
         	echo "le mot pass n'est pas correcte";
         }


  	}else{
  		echo "le compte portant ".$lemail." n'existe pas";
  	}


  }
?>
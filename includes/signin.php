
	 <?php 

         if(isset($_POST['formeSingn'])){

         	extract($_POST);
         	// echo "votre name :".$_POST['name']."<br>";
         	// echo "votre password :".$_POST['password']."<br>";
         	// echo "votre email :".$_POST['email']."<br>";
         if($password == $cpassword){

         		$options=['cost' =>12];// le cout de l'algorithme pour la puisance
         		$hashpass=password_hash($password,PASSWORD_BCRYPT,$options); // BCRYPT permet de passe a un pass claire a une chaine complix
         	 	 
         	 	

	   			 $c=$db->prepare("select email from user where email=:email");
	   			 $c->execute(['email'=>$email]);
	   			 $result=$c->rowCount();

	   			 if($result==0){
	   			 	$q=$db->prepare("insert into user(pseudo,email,password) values(:pseudo,:email,:password)");
	    // verifier le pass crypte est compatible avec le mot pass tape if(password_verify($password,$hashpass)
			    	$q->execute([
		           'pseudo'=> $name,
		           'email'=> $email,
		           'password'=> $hashpass
			    	]);
			    	echo "compte bien cree";
			    }else{
	   			 	echo "compte déja existe";
	   			 }

         }
     }

	 ?>
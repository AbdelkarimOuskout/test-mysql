
<?php session_start(); ?>

<!--  < ? php setcookie('pseudo','abdo',time()+(30*24*3600));

  if(isset($_COOKIE['pseudo'])){ 
  	echo "cookie ".$_COOKIE['pseudo']."  existe";
  }  -->


<html>
<head>
	<title></title>
</head>
<body>

	<?php
	if(isset($_SESSION['email']) && (isset($_SESSION['date']))){
		?>


		<h1>bienvenu dans votre site</h1>
	   <p>Email :<?php echo $_SESSION['email'];?></p>
	   <p>Date :<?php echo $_SESSION['date'];?></p>
   <?php
	}else{
		echo "veuillez vous connectez a voitre compte";
	}

	   
	   ?>
	
	<?php #include 'menunavigation.php';
		 include 'includes/database.php';
	   	 global $db;
 		
	 ?>
														

	<!-- POST permet d'envoiye la formuler dans page a l'autre
	     GET envoiye les info de formulaire dans l'URL -->
	     <h1>Login:</h1>
	 <form method="post">
     <input type="text" name="lname" id="lname" placeholder="votre nom" required><br/>
     <input type="password" name="lpassword" id="lpassword" placeholder="votre password" required><br/>
     <input type="email" name="lemail" id="lemail" placeholder="votre email" required><br/>
     <input type="submit" name="formeLogin" id="submit" value="login">
	</form>

 	<?php include 'includes/login.php';?>

	<h1>Signin:</h1>
	<form method="post">
     <input type="text" name="name" id="name" placeholder="votre nom" required><br/>
     <input type="password" name="password" id="password" placeholder="votre password" required><br/>
     <input type="password" name="cpassword" id="cpassword" placeholder="confirmer votre password" required><br/>
     <input type="email" name="email" id="email" placeholder="votre email" required><br/>
     <input type="submit" name="formeSingn" id="submit" value="sign">
	</form>

	<?php include 'includes/Signin.php';?>


</body>
</html>



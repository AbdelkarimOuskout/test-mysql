<?php
 	define('HOST','localhost');
 	define('DB_NAME','siteweb');
 	define('USER','root');
 	define('PASS','12345678');
 		echo "string";
 	try{
 		echo "1";
      $db=new PDO("mysql:host=".HOST. ";dbname=". DB_NAME,USER,PASS);
      echo $db;
      $db-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       echo $db;
 	}catch(PDOExeption $e){ echo $e;}


    
  require 'index.php';
?>
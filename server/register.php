<?php
//linking database
require('config.php');

if(($_SERVER['REQUEST_METHOD'] === 'POST')){
  //accepting input from the form
  $name = $_POST["fullName"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  //encrypting the password
  $password = md5($password);

  //checking if user's email already exist in the database
  $query = $dbCon->prepare("SELECT email FROM user WHERE email = :email");
  $query->bindParam(':email', $email, PDO::PARAM_STR, 100);
  $query->execute();

  if($query->rowCount() > 0){
    echo "<script language=\"JavaScript\">\n";
    echo "alert('Sorry, User already exist');\n";
    echo "window.location='../register.php'";
    echo "</script>";
  }else{
  	//inserting into database if email doesn't exist
  	$stmt = $dbCon->prepare("INSERT INTO user (name, email, password) VALUES (:name, :email, :password)");
  	$stmt->bindParam(':name', $name, PDO::PARAM_STR, 100);
  	$stmt->bindParam(':email', $email, PDO::PARAM_STR, 100);
  	$stmt->bindParam(':password', $password, PDO::PARAM_STR, 100);

  	if($stmt->execute()){
  		echo "<script language=\"JavaScript\">\n";
	    echo "alert('User registered successfully');\n";
	    echo "window.location='../index.php'";
	    echo "</script>";
  	}else{
  		echo "<script language=\"JavaScript\">\n";
  		echo "alert('Contact Web Administrator');\n";
  		echo "window.location='../register.php'";
  		echo "</script>";
  	}
  }
}

?>
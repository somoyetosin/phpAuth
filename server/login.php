<?php
//starting session
session_start();

//linking database connection
require('config.php');

if(($_SERVER['REQUEST_METHOD'] === 'POST')){
	$email = $_POST["email"];
	$password = $_POST["password"];
	$password = md5($password);
	//checking if email exist in database
	$query = $dbCon->prepare("SELECT email FROM user WHERE email = :email");
	$query->bindParam(':email', $email, PDO::PARAM_STR, 100);
	$query->execute();
	if($query->rowCount() < 1){
		echo "<script language=\"JavaScript\">\n";
		echo "alert('Sorry, Email does not exist');\n";
		echo "window.location='../index.php'";
		echo "</script>";
	}else{
		//checking if password match with email
		$stmt = $dbCon->prepare("SELECT * FROM user WHERE email = :email AND password = :password");
		$stmt->bindParam(':email', $email, PDO::PARAM_STR, 100);
		$stmt->bindParam(':password', $password, PDO::PARAM_STR, 100);
		$stmt->execute();
		if($stmt->rowCount() < 1){
			echo "<script language=\"JavaScript\">\n";
			echo "alert('Password is incorrect');\n";
			echo "window.location='../index.php'";
			echo "</script>";
		}else{
			//setting session variables to be used on all pages
			while($result = $stmt->fetch()){
				$_SESSION['name'] = $result['name'];
				$_SESSION['email'] = $result['email'];
				header('Location: ../dashboard.php');
			}
		}
	}

}
?>
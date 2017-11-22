<?php
//Database Credentials
$hostname = "localhost"; //or 127.0.0.1
$username = "root"; //username to database
$password = ""; //password to database
$dbName = "phplogin"; //name of database

//making database connection with PDO
$dbCon = new PDO("mysql:dbname=$dbName;host=$hostname", $username, $password);

if($dbCon){
	//checking if connection is successful
}else{
	echo "Connection to database failed";
}
?>
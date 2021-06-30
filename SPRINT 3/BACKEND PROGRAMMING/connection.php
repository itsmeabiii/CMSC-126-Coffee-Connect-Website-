<?php

$servername = "localhost";
$username = "root"; //default username
$password = "";		//default password 
$dbname = "coffeeconnect";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check Connection
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully <br/>";
?>
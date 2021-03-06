<?php

$dbhost = "localhost";
$username   = "root";
$password   = "";
$dbname     = "OnlineMgmt";
 
$conn = mysqli_connect($dbhost, $username, $password, $dbname);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Creating Users table
$sql1 = "create table Users (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	patientid VARCHAR(255) NOT NULL, 
	firstname VARCHAR(255) NOT NULL,
	middlename VARCHAR(255),
	lastname VARCHAR(255),
	DatOfBirth VARCHAR(50) NOT NULL,
	mob_number VARCHAR(30) NOT NULL,
	email VARCHAR(255) NOT NULL,
	pass1 VARCHAR(255) NOT NULL,
	pass2 VARCHAR(255)  NOT NULL,
	user_role VARCHAR(255)  NOT NULL,
	blood_group VARCHAR(30),
	height VARCHAR(30),
	weight VARCHAR(30), 
	createdtime int(11) NOT NULL, 
	changetime int(11),
	secuirtyq VARCHAR(255) NOT NULL,
	secuirtya VARCHAR(255) NOT NULL)";

if (mysqli_query($conn, $sql1)) {
    //echo "Users Table created successfully";
} else {
    //echo '<br>';
    //echo ("Users Table not created " . mysqli_error($conn));
}

// Creating Session table
$sql2 = "create table Session (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(255) NOT NULL,
	pass1 VARCHAR(255) NOT NULL,
	browser_detail VARCHAR(255) NOT NULL,
	client_ip VARCHAR(255) NOT NULL,
	logintime int(11) NOT NULL
	)";

if (mysqli_query($conn, $sql2)) {
    //echo "Session Table created";
} else {
    //echo '<br>';
    //echo ("Session Table not created" . mysqli_error($conn));
}

mysqli_close($conn);
?>
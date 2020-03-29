<?php 
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'php';

	$conn = mysqli_connect($servername,$username,$password,$dbname);
	// $conn = new mysqli ($servername,$username,$password,$dbname);

	// if ($conn->connect_errno) {
	//  	echo 'sdsdsd'.$conn->connect_errno;
	//  	exit();
	//  }else {
	//  	echo 'succes';
	//  } 

 ?>
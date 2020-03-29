<?php 
	require_once('connect.php');

	$data = $_POST;

	$query = "INSERT INTO users (id,name,email,password,avatar,created_at) VALUES ('".$data['id']."','".$data['name']."','".$data['email']."','".$data['pw']."','".$data['avatar']."','".$data['created_at']."')";

	
	$status = $conn->query($query);
	// print_r($status);


	header('location:list_users.php');
 ?>
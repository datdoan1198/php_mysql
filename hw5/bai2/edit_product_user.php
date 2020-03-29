<?php 
	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
	};

	require_once('connect.php');

	$data= $_POST;

	$query = "UPDATE users SET id = '".$data['id']."',name = '".$data['name']."',email = '".$data['email']."', password= '".$data['pw']."', avatar = '".$data['avatar']."', created_at = '".$data['created_at']."' WHERE id = ".$id;
	$status  = $conn->query($query);

	// print_r($status);

	header('location:list_users.php'); 

 ?>
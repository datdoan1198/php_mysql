<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}

	require_once('connect.php');

	$query = "DELETE FROM users WHERE id = ".$id;

	$status = $conn->query($query);

	header('location:list_users.php');


 ?>
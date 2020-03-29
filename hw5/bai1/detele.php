<?php 	
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}

	require_once('connect.php');

	$query = "DELETE FROM categories WHERE id=".$id;

	$status = $conn->query($query);

	header('location:list_categories.php');

 ?>
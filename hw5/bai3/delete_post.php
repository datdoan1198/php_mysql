<?php 
	
	require('connect.php');
	$id = $_GET['id'];
	$query = "DELETE FROM posts WHERE id = ".$id;

	$result_post = $conn->query($query);

	header('location:list_post.php');

 ?>
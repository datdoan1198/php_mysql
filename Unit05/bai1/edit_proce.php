<?php 
	$id = $_POST['id'];
	print_r($_POST);

	require_once('connect.php')	;

	$query = "UPDATE categories SET name='".$_POST['name']."' ,description='".$_POST['description']."' WHERE  id =".$id;

	$status = $conn->query($query);
	header('location:demo.php');
 ?>
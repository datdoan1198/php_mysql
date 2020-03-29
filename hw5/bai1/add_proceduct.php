<?php 
	require_once('connect.php');

	$data = $_POST;
	// echo '<pre>';
	// print_r($data);

	$query = "INSERT INTO categories (id,name,parent_id,thumbnail,slug,description,created_at) VALUES ('".$data['id']."','".$data['name']."','".$data['parent_id']."','".$data['thumbnail']."','".$data['slug']."','".$data['description']."','".$data['created_at']."')";

	// echo $query;

	$status = $conn->query($query);

	header('location:list_categories.php');

 ?>
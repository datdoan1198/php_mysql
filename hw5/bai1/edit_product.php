<?php 
	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		echo $id;
	}
	require_once('connect.php');

	$data = $_POST;

	$query = "UPDATE categories SET id = '".$data['id']."',name = '".$data['name']."',parent_id = '".$data['parent_id']."',thumbnail = '".$data['thumbnail']."',slug = '".$data['slug']."',description = '".$data['description']."',created_at = '".$data['created_at']."' WHERE id =  ".$id;

	$status = $conn->query($query);
	header('location:list_categories.php');

 ?>
<?php  
	require('connect.php');


	$data =$_POST;
	// $aa = end($data);
	// echo '<pre>';
	// print_r($aa);
	// $bb = key($data);
	// echo $bb;

	$query = "INSERT INTO posts (title,description,content,category_id,user_id) VALUES ('".$data['title']."','".$data['decription']."','".$data['content']."','".$data['category_id']."','".$data['user_id']."' )";
	print_r($query);

	$status = $conn->query($query);
	echo '<pre>';
	print_r($status);

	header('location:list_post.php');


?>
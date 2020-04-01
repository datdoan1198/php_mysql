<?php 
	require('connect.php');
	require('function.php');
	$file = $_FILES['thumbnail'];
	// echo '<pre>';
	// print_r($file);
	echo $file['name'].'<br>';

	if (isset($_POST['submit'])) {
		$upload = uploadfile("img","thumbnail","500000",array('jpg','png','txt'));
		if (gettype($upload) == "array") {
			print_r($upload);
		}else {
			echo 'thanh cong file'.$upload;
		}
	}

	$data = $_POST;
	// echo '<pre>';
	// print_r($data);

	$insert_post = "INSERT INTO posts (id,title,description,thumbnail,content,slug,view_count,user_id,category_id,created_at)  VALUES ('".$data['id']."','".$data['title']."','".$data['decription']."','".$file['name']."','".$data['content']."','".$data['slug']."','".$data['view_count']."','".$data['user_id']."','".$data['category_id']."','".$data['created_at']."') ";

	// echo $insert_post;

	$result_post = $conn->query($insert_post);
	
	header('location:list_post.php');



 ?>
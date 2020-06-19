<?php 
	require ('connect.php');
	require('function.php');
	$file = $_FILES['thumbnail'];
	echo '<pre>';
	print_r($file);

	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$upload = uploadfile("img","thumbnail","500000",array('jpg','png'));
		if (gettype($upload) == "array") {
			print_r($upload);
		}else {
			echo 'thanh cong'.$upload;
		}
	}

	$data = $_POST;
	$content = htmlspecialchars($data['content']);
	// echo '<pre>';
	// print_r($data);
	// echo $content;
	$update_post = "UPDATE posts SET  id = '".$data['id']."' , title = '".$data['title']."' , description =  '".$data['decription']."' , thumbnail = '".$file['name']."' , content = '".$content."' , slug = '".$data['slug']."' , view_count = '".$data['view_count']."' , category_id  ='".$data['category_id']."' , user_id =  '".$data['user_id']."' , created_at =  '".$data['created_at']."' WHERE id =".$id;

	// echo $update_post;

	$result_post = $conn->query($update_post);

	header('location:list_post.php');

 ?>
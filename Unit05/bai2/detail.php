<?php 
	require('connect.php');
	require('header.php');
	$id = $_GET['id'];
	$post = getpost($conn,$id);

	

	// $post_query = "SELECT * FROM posts WHERE id= ".$id;

	// $post_result = $conn->query($post_query);

	// $post = $post_result->fetch_assoc();
	

	// if ($post['user_id']) {
	// 	$user_query = "SELECT * FROM users WHERE id= ".$post['user_id'];
	// 	$user_result = $conn->query($user_query);

	// 	$user = $user_result->fetch_assoc();
	// 	$post['user'] = $user;
	// }else {
	// 	echo 'no';
	// }

	// if ($post['category_id']) {
	// 	$category_query = "SELECT * FROM categories WHERE id= ".$post['category_id'];
	// 	$category_result = $conn->query($category_query);

	// 	$categories = $category_result->fetch_assoc();
	// 	$post['categories'] = $categories;
	// 	echo '<pre>';
	// 	print_r($post);
	// }

 ?>

 <div>title : <?php echo $post['title'] ?></div>
 <div>user : <?php echo $post['user']['name'] ?></div>
 <div>danh muc : <?php echo $post['categories']['name'] ?></div>
 <div>conten : <?php echo $post['content'] ?></div>

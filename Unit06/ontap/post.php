<?php 
	require 'model.php';
	class post extends model{

	}

	$post = new  post('posts');

	$get = $post->getALL();
	$getid = $post->getById(4);
	$delete = $post->delete(3);

	echo '<pre>';
	print_r($delete);





 ?>

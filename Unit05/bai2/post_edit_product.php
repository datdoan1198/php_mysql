<?php 
	$data = $_POST;
	echo '<pre>';
	print_r($data);
	$query = "UPDATE posts SET title = '".$data['tile']."'

 ?>
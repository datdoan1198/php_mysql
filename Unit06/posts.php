<?php 
	require('moder.php');
	class posts extends  moder{
		function getID($id){
			return $id;
		}

	}

	$posts = new posts('posts');
	echo '<pre>';
	print_r($posts->getALL());
	// echo 'bang la :' . $posts->table."<br>";

	// // echo 'id ' .$posts->getID(1);
	// echo 'get all :' ;
	// $posts->getALL();
	// echo '<br>';
	// echo 'xoa :' ;
	// $posts->delete();
	// echo '<br>';
	// echo 'cap nhat :' ;
	// $posts->update();
	
 ?>
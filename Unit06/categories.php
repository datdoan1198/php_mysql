<?php 
	require('moder.php');
	class categories extends  moder{
		function getID($id){
			return $id;
		}

	}

	$categories = new categories('categories');
	echo '<pre>';
	print_r($categories->getALL());
	// echo 'bang la :' . $categories->table."<br>";

	// echo 'id ' .$categories->getID(1);
	// echo 'get all :' ;
	
	// echo '<br>';
	// echo 'xoa :' ;
	// $categories->delete();
	// echo '<br>';
	// echo 'cap nhat :' ;
	// $categories->update();
	
 ?>
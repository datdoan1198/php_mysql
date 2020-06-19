<?php 
	require('moder.php');
	class user extends  moder{
		

	}

	$user = new user('users');
	echo '<pre>';
	print_r($user->getALL());

	// echo 'bang la :' . $user->table."<br>";

	// // echo 'id ' .$user->getID(1);
	// echo 'get all :' ;
	// $user->getALL();
	// echo '<br>';
	// echo 'xoa :' ;
	// $user->delete();
	// echo '<br>';
	// echo 'cap nhat :' ;
	// $user->update();
	
 ?>
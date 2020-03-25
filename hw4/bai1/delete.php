<?php 
	session_start();

	if (isset($_GET['id'])) {
		$id =$_GET['id'];
		unset($_SESSION['upload'][$id]);
	}
	header('location:produc.php');

 ?>
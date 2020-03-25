<?php 	
	session_start();
	if (isset($_GET["masp"])) {
		$masp = $_GET['masp'];
		echo $masp;

		unset($_SESSION["giohang"][$masp]);

	}

	setcookie("msgd","Xóa Thành Công",time()+2);
	header("location:list.php");

 ?>
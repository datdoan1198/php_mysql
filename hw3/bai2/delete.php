<?php 
	session_start();

	if (isset($_GET["masinhvien"])) {
		$masinhvien = $_GET['masinhvien'];

		unset($_SESSION["student"][$masinhvien]);

	}

	setcookie("msgd","Xóa Thành Công",time()+2);
	header("location:list.php");
 ?>
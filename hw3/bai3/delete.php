<?php 
	session_start();

	if (isset($_GET["masp"])) {
		$masp = $_GET['masp'];
		unset($_SESSION['sanpham'][$masp]);
	}
	setcookie("msgd","Xóa Thành Công",time()+2);
	header("location:listsanpham.php");
 ?>
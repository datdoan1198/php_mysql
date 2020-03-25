<?php 
	session_start();

	if (isset($_POST['submit'])) {
		$masinhvien = $_POST['masinhvien'];
		$hovaten = $_POST['hovaten'];
		$email = $_POST['email'];
		$gioitinh = $_POST['gioitinh'];
		$sodienthoai = $_POST['sdt'];
	};

	$_SESSION["student"][$masinhvien] = [
		'masinhvien' => $masinhvien,
		'hovaten' => $hovaten,
		'email' => $email,
		'gioitinh' => $gioitinh,
		'sodienthoai' => $sodienthoai,
	];
	
	echo '<pre>';
		print_r($_SESSION);
	echo '</pre>';
	// setcookie('msg', 'Thêm Mới Thành Công',time()+3);
	// header('location:list.php');
	
 ?>
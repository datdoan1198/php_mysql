<?php 
	session_start();

	if (isset($_POST['submit'])) {
		$masp = $_POST['masp'];
		$tensp = $_POST['tensp'];
		$gia = $_POST['gia'];
	};

	$_SESSION["sanpham"][$masp] = [
		'masp' => $masp,
		'tensp' => $tensp,
		'gia' => $gia,
	];

	// echo '<pre>';
	// 	print_r($_SESSION);
	// echo '</pre>';
	setcookie('msg', 'Thêm Mới Thành Công',time()+3);
	header('location:listsanpham.php');
	
 ?>
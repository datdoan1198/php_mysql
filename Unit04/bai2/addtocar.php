<?php 
session_start();
	require"product.php";
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	if (isset($_GET["msp"])) {
		$msp = $_GET['msp'];
		if (isset($_SESSION["products"][$msp])) {
		$_SESSION["products"][$msp]["soluong"] += 1 ;
	}else {
		$car_product["soluong"] = $products[$msp];
		$car_product["soluong"] =1;
		$car_product["time"]  =date('d/m/y h:s:i');
		$_SESSION['products'][$msp] = $car_product;
	}
	echo '<pre>';
		print_r($_SESSION['products']);
	echo '</pre>';
	}
	header("location:cart_detail.php");
 ?>
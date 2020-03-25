<?php 
	$tk = $_POST["username"];
	$mk = $_POST["pass"];
	// $s = ($tk == "admin" && $mk == "12345") ? "thnah cong" : "khong thang cong";
	// echo $s;
	if ($tk == "admin" && $mk == "1234") {
		echo 'thanh cong';
	} else {
		echo 'khong thanh cong';
	}
 ?>
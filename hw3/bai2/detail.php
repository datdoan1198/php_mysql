<?php 
	session_start();
	
	if (isset($_GET["msv"])) {
		$msv = $_GET['msv'];
		
	};
	
	foreach ($_SESSION["student"] as $value) {
		if ($value['masinhvien'] == $_GET["msv"]) {
		echo "Mã Sinh Viên : ".$value['masinhvien']."<br>";
		 echo "Họ Và Tên : ".$value['hovaten']."<br>";
		 echo "Email : ".$value['email']."<br>";
		 echo "Giới Tính : ".$value['gioitinh']."<br>";
		 echo "Số Điện Thoại : ".$value['sodienthoai']."<br><br>";
		}
		 
		
	};


 ?>
<?php 
	if (isset($_POST["masinhvien"]) && isset($_POST["hovaten"]) && isset($_POST["eamil"]) && isset($_POST["gioitinh"]) && isset($_POST["sdt"]) && isset($_POST["diachi"])) {
		echo "Mã Sinh Viên : " . $_POST['masinhvien']."<br>";
		echo "Họ Và Tên : " . $_POST['hovaten']."<br>";
		echo "Email : " . $_POST['eamil']."<br>";
		echo "Giới Tính : " . $_POST['gioitinh']."<br>";
		echo "Số Điện Thoại : " . $_POST['sdt']."<br>";
		echo "Địa Chỉ : " . $_POST['diachi']."<br>";	
	};

	
	

 ?>
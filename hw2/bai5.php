<?php 
	$name = "Đoàn  Tiến  Đạt";
	$name1 = "Trần  Minh Văn  Tiến";
	
	echo "$name <br>";
	echo "$name1<br><br>";

	$data = explode("  ", $name);
	echo "Họ : ".$data[0]."<br>";
	echo "Tên Đệm : ".$data[1]."<br>";
	echo "Tên : ".$data[2]."<br><br>";

	$data1 = explode("  ", $name1);
	echo "Họ : ".$data1[0]."<br>";
	echo "Tên Đệm : ".$data1[1]."<br>";
	echo "Tên : ".$data1[2]."<br><br>";

	

 ?>
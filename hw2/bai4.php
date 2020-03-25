<?php 
	$chuoi = " Vũ văN tHươNG ";
	echo "chuỗi đầu vào : ".$chuoi."<br><br>";
	echo "Chuỗi đầu ra : ". substr_replace((ucwords(strtolower(trim($chuoi)))),".",(strlen($chuoi)));
 ?>
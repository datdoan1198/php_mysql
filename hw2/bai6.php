<?php
	$arr = "ZenttneZ";
	echo "Chuỗi đầu vào : ".$arr."<br>";
    function kiem_tra_chuoi_palindrome($string) {  
		if ($string == strrev($string))  
			echo "Đây là chuỗi Palindrome";
		else  
			echo "Đây ko phải là chuỗi Palindrome";
	}  
	echo kiem_tra_chuoi_palindrome($arr)."<br>";
?>
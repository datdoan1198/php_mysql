<?php 
	setcookie("name" , "dang nhap thanh cong" ,time()+60);
	if (isset($_COOKIE["name"])) {
		echo $_COOKIE["name"];
	}


 ?>
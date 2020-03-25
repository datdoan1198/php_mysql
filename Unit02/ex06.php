<?php
	include_once"ex01.php";
	include"ex01.php";
	$name = array('dat','hoang','an');
	var_dump(in_array('dat', $name)); 
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	echo date('d/m/Y - H:i:s');
 ?>
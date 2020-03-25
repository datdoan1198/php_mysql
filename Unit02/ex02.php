<?php
	$arr_name = array();
	$arr_name [0][0] = 'heelo';
	$arr_name [0][1] = 1;
	$arr_name [1][0] = 4;
	$arr_name [1][1] ="ent";

	echo "<pre>";
	var_dump($arr_name);
	echo "</pre>";
	echo "phan tu vi tri 0 ,0 : ".$arr_name[0][0]."<br>";
	echo "phan tu vi tri 0 ,1 : ".$arr_name[0][1]."<br>";
	echo "phan tu vi tri 1 ,0 : ".$arr_name[1][0]."<br>";
	echo "phan tu vi tri 1 ,1 : ".$arr_name[1][1]."<br>";
	foreach ($arr_name as $key1 => $value1) {
		echo "---------- <br>";
		foreach ($value1 as $key2 => $value2) {
			echo $value2."<br>";
		}
	}
?>
<?php 
	echo "Tính tổng S = 1/1! +2/2! + ... + n/n! <br><br>";
	$giaithua = 1;
	$n = 10;
	$s = 0;
	for ($i=1; $i <=10 ; $i++) { 
		$giaithua *= $i;
		$s += (float)(1/$giaithua);
	}
	echo "n =".$n."<br>";
	echo "Tổng S = :".$s;
 ?>
<?php 
(int)$sum =0;
	for ($i=0; $i <=50 ; $i++) { 
		if ($i%2==0 && $i<=20) {
		$sum += $i;	
		}
	}
	echo "Tổng 10 số chẵn đầu là : " .$sum;
 ?>
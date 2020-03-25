<?php 
	echo "Bảng Cửu Chương <br><br>"; 
	for ($i=1; $i <10 ; $i++) { 
		echo "------------ <br>";
		for ($j=1; $j <=10 ; $j++) { 
			$x = $i*$j;
			echo  $i."x ".$j."=".$x ."<br>";
		}	
	}
 ?>
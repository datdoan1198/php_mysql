<?php
	// $x = 3;
	// if ($x %2 == 0) {
	// 	echo $x .' la so chan';
	// }else {
	// 	echo $x .' la so le';
	// };
	$x =-5;
	if ($x >0 ) {
		echo $x . ' la so nguyen duong <br>';
		if ($x % 2 == 0) {
			echo $x . ' a so nguyen duong chan';
		}else{
			echo $x . ' la so nguyen duong le';
		}
	}else if ($x <0){
		echo $x . 'la so nguyen duong am <br>';
		if ($x % 2 == 0) {
			echo $x . ' la so am duong chan';
		}else{
			echo $x . ' la so am duong le';
		}
	}
?>
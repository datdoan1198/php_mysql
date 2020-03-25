<?php
	$a = 9;
	$b = 10;
	function kiemtraso ($a){
		// if ($a %2 ==0) {
		// 	return true;
		// }else {
		// 	return false;
		// }
		if ($a %2 ==0) {
			echo "so chan";
		}else{
			echo "so le";
		}
	}
	kiemtraso($b);
	function tinhtong($a , $b , $c = 0){
		$sum = $a +$b +$c;
		return "<br>tong ".$sum;
	}
	echo tinhtong(3,4);
		
?>
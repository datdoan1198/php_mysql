<?php
	$bienToancuc = 12;
	function kiemtra (){
		$bienCucbo =13;
		global $bienToancuc;
		if ($bienCucbo%$bienToancuc==0) {
			echo "chia du 0";
		}else{
			echo "chia ko du ";

		} 
	}
	kiemtra();

	function check(){
		// bien tinh
		static $a =0;
		$a++;
		echo "<br>".$a;
	}
	check();
	check();
?>
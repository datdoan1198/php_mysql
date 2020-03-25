<?php 
	echo "mảng lúc đầu : ";
	$arr = array(1,4,2,6,9,100,4);
	for ($i=0; $i <count($arr) ; $i++) { 
		echo $arr[$i].",";
	};
	sort($arr);
	echo "<br><br> mảng sau khi được sắp xếp :";
	foreach ($arr as  $value) {
		echo $value.",";
	};
	// for ($i=0; $i <count($arr) ; $i++) { 
	// 	$min = $i;
	// 	for ($j=$i+1; $j <count($arr) ; $j++) { 
	// 		if ($arr[$j]<$arr[$min]) {
	// 			$min = $j;
	// 		}
	// 	}
	// 	if ($min != $i) {
	// 		$tg = $arr[$i];
	// 		$arr[$i] = $arr[$min];
	// 		$arr[$min] = $tg;

	// 	}
	// }
	// echo "<br><br> mảng sau khi được sắp xếp :";
	// for ($i=0; $i <count($arr) ; $i++) { 
	// 	echo $arr[$i].",";
	// }
 ?>
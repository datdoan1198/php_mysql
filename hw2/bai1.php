<?php
	
	$arr_name = array(1,4,2,6,9,100,45,8,20);
	$max=$arr_name[0];
		// for ($i=0; $i <count($arr_name) ; $i++){ 
		// 	if ($max < $arr_name[$i]) {
		// 		$max = $arr_name[$i];	
		// 	}else{
		// 	};	
		// }echo "Giá trị lớn nhất trong mảng là : ".$max;
	foreach ($arr_name as $key => $value) {
		if ($max < $value) {
				$max = $value;		
			}else{

			};	
	}echo "Giá trị lớn nhất trong mảng là : ".$max;
 ?>
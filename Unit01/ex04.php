<?php
	$x =8;
	// if ($x == 2) {
	// 	echo "hom nay la thua 2";
	// }else if ($x == 3) {
	// 	echo "hom nay la thu 3";
	// }else if ($x == 4) {
	// 	echo "hom nay la thu 4";
	// }else if ($x == 5) {
	// 	echo "hom nay la thu 5";
	// }else if ($x == 6) {
	// 	echo "hom nay la thu 6";
	// }else if ($x == 7) {
	// 	echo "hom nay la thu 7";
	// }else if ($x == 8) {
	// 	echo "hom nay la chu nhat";
	// }else{
	// 	echo "dsdsd";
	// }
	switch ($x) {
		case '2':
			echo "hom nay la thu 2";
			break;
		case '3':
			echo "hom nay la thu 3";
			break;
		case '4':
			echo "hom nay la thu 4 ";
			break;
		case '5':
			echo "hom nay la thu 5";
			break;
		case '6':
			echo "hom nay la thu 6";
			break;
		case '7':
			echo "hom nay la thu 7";
			break;
		case '8':
			echo "hom nay la chu nhat";
			break;
		default:
			echo "sai";
			break;
	}
?>
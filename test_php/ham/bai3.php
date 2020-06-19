<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tham tri, tham chieu</title>
</head>
<body>
	<div>
		<?php 
			function tinhtongbinhphuong (&$a, $b){
				$a = $a * $a;
				$b = $b * $b;

				$sum = $a + $b;
				return $sum;
			}
			$a =3;
			$b =4;
			$tongbinhphuong = tinhtongbinhphuong($a,$b);
			echo $tongbinhphuong . "<br>";
			echo $a."<br>";
			echo $b;
		 ?>

	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div align="center">
		<h1>FUNCTION</h1>
		<?php 
			function check($number){
				if ($number % 2 == 0) {
					return true ;
				}else {
					return false;
				}
			}

			$text_return = check(11);
			if ($text_return ==true) {
				echo 'la so chan';
			}else {
				echo 'la so le';
			}
		 ?>

	</div>
</body>
</html>
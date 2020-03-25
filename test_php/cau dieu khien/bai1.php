<?php 
	if (isset($_POST['submit'])) {
				 $number1 = $_POST['number1'];
				 $caculate = $_POST['pheptinh'];
				 $number2 = $_POST ['number2'];
				 switch ($caculate) {
				 	case "+":
				 		$sum = $number1 + $number2;
				 		break;
				 	case "-":
				 		$sum = $number1 - $number2;
				 		break;
				 	case "*":
				 		$sum = $number1 * $number2;
				 		break;
				 	case "/":
				 		$sum = $number1 / $number2;
				 		break;
				 	case "%":
				 		$sum = $number1 % $number2;
				 		break;
				 	
				 	default:
				 		$sum = $number1 + $number2;
				 		$caculate = "+";

				 		break;
				 }
 			}		
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="bai1.php" method="post" name="caculate_from">
		<input type="text" name="number1" placeholder="so thu 1" value="<?php 	echo $number1 ?>"><br><br>	
		<input type="text" name="pheptinh" placeholder="phep tinh" value="<?php echo $caculate	 ?>"><br>	<br>	
		<input type="text" name="number2" placeholder="so thu 2" value="<?php 	echo $number2 ?>"  >
		<input type="submit" value="xem ket qua" name="submit">
		<div>
			<p>ket qua  <?php echo  $number1 ." " . $caculate. " " . $number2 ." = " .$sum  ?> </p>
		</div>
	</form>
</body>
</html>
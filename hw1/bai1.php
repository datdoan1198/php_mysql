<?php 
	echo "giai phuong trinh a*x^2 + b*x +c = 0 <br>"; 
	$a = 5;
	$b = 1;
	$c = 5;
	echo "a = ".$a ." ,b = ".$b." ,c = ".$c."<br><br>";
	if ($a==0) {
		echo "a = 0 phuong trinh la b*x +c = 0 <br>";
		$x = -$c/$b;
		echo "Nghiệm của phương trình là : " .$x;	
	}else if ($a != 0) {
		if ($b == 0 ) {
			echo "a !=0 , b = 0 phuong trinh la a*x^2 + c = 0 <br>"; 
			$x2 = -$c/$a;
			
			if ($x2 >= 0) {
				echo "X^2 = " . $x2."> 0 <br>";
				echo "X^2 >= 0 Phương trình có nghiệm là  : ". $x = sqrt($x2) ;
			}else {
				echo "X^2 = " . $x2."< 0 <br>";
				echo "X^2 < 0 Phương trình vô nghiệm";
			}
		}else if ($c == 0 ) {
			echo "a != 0 , c = 0 phương trình là a*x^2 + b*x = 0 <br>";
			echo "<=> x(a*x + b) = 0 <br>";
			echo "phương trình có 2 nghiệm  x1 = 0 và x2 = ".$x = -$b/$a;
		}else{
			$deta = $b*$b - 4*$a*$c;
			echo "Detal = " .$deta ."<br>";
			if ($deta > 0 ) {
				echo "Phương trình có 2 nghiêm phân biệt <br>";
				echo "X1 = " . $sx1 = ((-$b + sqrt(($deta)))/(2*$a)) . "<br>";
				echo "X2 = " . $sx2 = ((-$b - sqrt(($deta)))/(2*$a)). "<br>";
			}else if ($deta == 0) {
				echo "Phương trình có nghiệm kép <br>";
				echo "X1 = X2 = ".$x = -$b/(2*$a);
			}else if ($deta <0) {
				echo "Phương trình vô nghiệm";
			}
		}
	}

?>
<?php 
	class car{
		var $name_car ;
		var $color_car;
		var $hang_xe;
		var $so_cho;

		function chay(){
			echo "đây là phương thức của  $this->name_car"."<br>";
		}
		function di($km){
			echo "xe $this->name_car di dc $km km "."<br>";
		}

	}

	$van = 	new car();
	$audi = new car();

	$van->name_car = "toyota";
	$van->color_car = "black";
	$audi->name_car = "audi1";
	$audi->color_car = "white";

	echo 'van :'."<br>";
	echo "ten xe : ".	$van->name_car . "<br>";
	echo 'mau xe :' . $van->color_car."<br>";
	echo 'audi :'."<br>";
	echo "ten xe : ".	$audi->name_car . "<br>";
	echo 'mau xe :' . $audi->color_car."<br>";

	$van->chay();
	$audi->chay();
	echo "<br>";
	$van->di(12);
	$audi->di(10);
	

 ?>
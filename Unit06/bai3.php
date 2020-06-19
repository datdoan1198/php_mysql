<?php 
	class Person{
		private $name ; 


		private function run (){
			echo 'day la ham run';
		}

		function setName ($name){

			$this->name = $name;
		}
		function getName(){
		 return $this->name;
		}
		function getRun(){
			$this->run();
		}
	}

	$Person = new Person();

	$Person->setName('dat');
	echo $Person->getName();
	echo '<br>';
	$Person->getRun();

 ?>
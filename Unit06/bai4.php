<?php 
	class Person{
		protected $name="sdsd";
	}

	class Male extends Person{

		public function setName($name){
			$this->name = $name;

		}
		public function getName(){
			return $this->name;
		}
	}

	$Person = new Person();
	// echo  $Person->name;

	$Male = new Male();

	$Male->setName('Đoàn Tiến Đạt');
	echo $Male->getName();
 ?>
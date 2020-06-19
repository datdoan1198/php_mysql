<?php 
	require('model.php');

	class user extends model{
		private $name ;
		private $email ;
		private $password ;
		private $image ;

		public function set_user($name,$email,$password,$image){
			$this->name = $name;
			$this->email = $email;
			$this->password = $password;
			$this->image = $image;

		}

		public function get_user(){
			$arr_user = array();

			$arr_user ['name'] = $this->name;
			$arr_user ['email'] = $this->email;
			$arr_user ['password'] = $this->password;
			$arr_user ['image'] = $this->image;

			return $arr_user;
		}
	}

	$user = new 

 ?>
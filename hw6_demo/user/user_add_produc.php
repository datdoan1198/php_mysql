<?php 
	require ('../model.php');
	
	class user extends model{
		private $id;
		private $name ;
		private $email ;
		private $passWorld ;
		private $image ;


		function set_user_information($id,$name,$email,$passWorld,$image){
			$this->id = $id;
			$this->name = $name;
			$this->email = $email;
			$this->passWorld = $passWorld;
			$this->image = $image;
		}

		function get_user_information(){
			$arr = array();
			$arr ['id'] = $this->id;
			$arr ['name'] = $this->name;
			$arr ['email'] = $this->email;
			$arr ['password'] = $this->passWorld;
			$arr ['avatar'] = $this->image;
			return $arr;
		}
	}
	$user = new user('users');

	$file = $_FILES['avatar'];

	$user->upLoadFile("../image","avatar","500000",array('jpg','png','txt'));

	$data = $_POST;
	$passWorld = md5($data['password']);
	
	$user->set_user_information($data['id'],$data['name'],$data['email'],$passWorld,$file['name']);
	$user->get_user_information();

	$data_user = $user->get_user_information();

	$user->add($data_user);
	header('location:user.php');


 ?>
<?php 
	require('Model/Model.php');
	require('Model/users.php');
	require ('Model/category.php');
	class PostController{

		function __construct(){
			$this->post = new post();
			$this->user = new user();
			$this->category = new category();
		}

		public function list_post(){

			$post_list = $this->post->all();
			$user_list = $this->user->all();
			echo '<pre>';
			var_dump($user_list);
			
			require('view/list.php');
		
		}
		public function add(){
			$user_list = $this->user->all();
			$category_list = $this->category->all();
			require('View/add.php');
		}
		public function addPostProcess(){
			
			$this->post = new post();
			$data = $_POST;

			$result = $this->post->add($data);

			// echo $result;

			if ($result) {
				setcookie("success","tao moi thanh cong",time()+3);
				header('location:/ontap/?mod=posts&act=list_post');
			}else {
				setcookie("fail","tao moi khong thanh cong",time()+3);
				header('location:/ontap/?mod=posts&act=add');
			}



		}
	}


 ?>
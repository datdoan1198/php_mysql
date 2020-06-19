<?php 
	require('model/model.php');
	class categoryController{
		public $model ;

		function __construct(){
			$this->model = new Model();

		} 

		public function list($mod){
			$data = $this->model->all($mod);
			require('view/'.$mod.'/list.php');

		}

		public function detail($mod){
			$id = $_GET['id'];
			
			if ($mod == "posts") {
				$data_post = $this->model->getpostsid($mod,$id);
			}elseif ($mod == "categories") {
				$data = $this->model->getById($mod,$id);
			}elseif ($mod == "users") {
				$data_user = $this->model->getById($mod,$id);
				// print_r($data);
			}
			require('view/'.$mod.'/detail.php');
		}
		
		public function delete($mod){
			$id = $_GET['id'];

			$data = $this->model->delete($mod,$id);

			header('location:/hw7/index.php?form='.$mod.'&act=list');
		}

		public function add($mod){
			$categories = $this->model->getCategory();
			$users = $this->model->getUsers();


			require('view/'.$mod.'/add.php');
			

		}
		public function addProcess($mod){
			$data = $_POST;
			$file = $_FILES['image'];

			$this->model->upLoadFile("image","image","500000",array('jpg','png','txt'));
		

			if ($mod == "categories") {
				$arr_data = array();
				$arr_data['name'] = $data['name'];
				$arr_data['slug'] = $data['slug'];
				$arr_data['parent_id'] = $data['parent_id'];
				$arr_data['image'] = $file['name'];
				$arr_data['description'] = htmlspecialchars($data['description']);;
				$arr_data['created_at'] = $data['created_at'];
				// print_r($arr_data);
				$this->model->add($mod,$arr_data);

			}elseif ($mod == "posts") {
				$arr_data = array();
				$arr_data['title'] = $data['title'];
				$arr_data['description'] = htmlspecialchars($data['description']);
				$arr_data['image'] = $file['name'];
				$arr_data['content'] = htmlspecialchars($data['content']);
				$arr_data['slug'] = $data['slug'];
				$arr_data['view_count'] = $data['view_count'];
				$arr_data['category_id'] = $data['category_id'];
				$arr_data['user_id'] = $data['user_id'];
				$arr_data['created_at'] = $data['created_at'];

				$this->model->add($mod,$arr_data);
			}elseif ($mod == "users") {
				$arr_data = array();
				$arr_data['name'] = $data['name'];
				$arr_data['email'] = $data['email'];
				$arr_data['password'] = md5($data['password']);
				$arr_data['image'] = $file['name'];
				$arr_data['created_at'] = $data['created_at'];

				$this->model->add($mod,$arr_data);
			}
			
			header('location:/hw7/index.php?form='.$mod.'&act=list');

		}
		
		public function edit($mod){
			$id = $_GET['id'];
			$categories = $this->model->getCategory();
			$users = $this->model->getUsers();
			$data_edit = $this->model->getById($mod,$id);
			// echo '<pre>';
			// print_r($data_edit);

			require('view/'.$mod.'/edit.php');

		}

		public function editProcess($mod){

			$data = $_POST;
			print_r($data);
			$file = $_FILES['image_edit'];
			$id = $data['id'];
			if (isset($data['description'])) {
				$description = htmlspecialchars($data['description']);
			}

			if ($mod == "categories") {
				if (!$file['name'] == "" ) {
					$this->model->upLoadFile("image","image_edit","500000",array('jpg','png','txt'));
					$arr_data_edit = array();
					$arr_data_edit['name'] = $data['name'];
					$arr_data_edit['slug'] = $data['slug'];
					$arr_data_edit['parent_id'] = $data['parent_id'];
					$arr_data_edit['image'] = $file['name'];
					$arr_data_edit['description'] = $description;
					// echo '<pre>';
					// print_r($arr_data_edit);
					$this->model->update($mod,$arr_data_edit,$id);	
				}else {
					$arr_data = array();
					$arr_data['name'] = $data['name'];
					$arr_data['slug'] = $data['slug'];
					$arr_data['parent_id'] = $data['parent_id'];
					$arr_data['image'] = $data['image'];
					$arr_data['description'] = $description;
					
					$this->model->update($mod,$arr_data,$id);
				}
			}elseif ($mod == "posts") {
				if (!$file['name'] == "" ) {
					$this->model->upLoadFile("image","image_edit","500000",array('jpg','png','txt'));
					$arr_data_edit = array();
					$arr_data_edit['title'] = $data['title'];
					$arr_data_edit['description'] = htmlspecialchars($data['description']);
					$arr_data_edit['image'] = $file['name'];
					$arr_data_edit['content'] = htmlspecialchars($data['content']);
					$arr_data_edit['slug'] = $data['slug'];
					$arr_data_edit['view_count'] = $data['view_count'];
					$arr_data_edit['category_id'] = $data['category_id'];
					$arr_data_edit['user_id'] = $data['user_id'];
					$arr_data_edit['created_at'] = $data['created_at'];
					
					$this->model->update($mod,$arr_data_edit,$id);	
				}else {
					$arr_data_edit = array();
					$arr_data_edit['title'] = $data['title'];
					$arr_data_edit['description'] = htmlspecialchars($data['description']);
					$arr_data_edit['image'] = $data['image'];
					$arr_data_edit['content'] = htmlspecialchars($data['content']);
					$arr_data_edit['slug'] = $data['slug'];
					$arr_data_edit['view_count'] = $data['view_count'];
					$arr_data_edit['category_id'] = $data['category_id'];
					$arr_data_edit['user_id'] = $data['user_id'];
					$arr_data_edit['created_at'] = $data['created_at'];
					echo '<pre>';
					print_r($arr_data_edit);
					$this->model->update($mod,$arr_data_edit,$id);
				}
			}elseif ($mod == "users") {
				if (!$file['name'] == "" ) {
					$this->model->upLoadFile("image","image_edit","500000",array('jpg','png','txt'));
					$arr_data_edit = array();
					$arr_data_edit['name'] = $data['name'];
					$arr_data_edit['email'] = $data['email'];
					$arr_data_edit['image'] = $file['name'];
					$arr_data_edit['created_at'] = $data['created_at'];
					echo '<pre>';
					print_r($arr_data_edit);
					$this->model->update($mod,$arr_data_edit,$id);	
				}else {
					$arr_data_edit = array();
					$arr_data_edit['name'] = $data['name'];
					$arr_data_edit['email'] = $data['email'];
					$arr_data_edit['image'] = $data['image'];
					$arr_data_edit['created_at'] = $data['created_at'];
					
					$this->model->update($mod,$arr_data_edit,$id);
				}
			}
			header('location:/hw7/index.php?form='.$mod.'&act=list');

		}

	}		
		
 ?>
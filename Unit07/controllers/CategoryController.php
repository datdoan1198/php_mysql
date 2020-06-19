<?php 
	require('model/Category.php');
	require('controllers/BaseController.php');
	class CategoryController extends BaseController {
		public $model ; 

		function __construct(){
			$this->model = new Category();
			// echo 'casadasd';
		}

		public function list(){

			$categories = $this->model->all();
			// echo '<pre>';
			// var_dump($data);
			
			$this->view('Category/list.php',[
				'categories' => $categories
			]);
		
		}
		public function detail(){
			$id = $_GET['id'];

			$categories = $this->model->getId($id);
			echo '<pre>';
			print_r($categories);
			$this->view('Category/list.php',[
				'categories' => $categories
			]);
		}
		public function add(){
			
			$this->view('Category/add.php');
		}


	}

 ?>
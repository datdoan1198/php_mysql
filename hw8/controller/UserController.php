<?php 
require('model/User.php');
require('controller/BaseController.php');

class UserController extends BaseController
{
	public $model;

	function __construct()
	{
		$this->model = new User();
	}

	public function list(){
		$users = $this->model->all();

		$this->view('User/list.php',[
			'users' => $users
		]);
	}
	public function add(){

		$this->view('User/add.php',);
	}
	public function addProcess(){
		$data = $_POST;
		$file = $_FILES['image'];
		$this->model->upLoadFile("image","image","500000",array('jpg','png','txt'));

		$arr_data = array();
		$arr_data['name'] = $data['name'];
		$arr_data['email'] = $data['email'];
		$arr_data['password'] = md5($data['password']);
		$arr_data['image'] = $file['name'];
		$arr_data['created_at'] = $data['created_at'];
		$result = $this->model->add($arr_data);
		if ($result) {
			setcookie("success","tao moi thanh cong",time()+3);
			$this->redirect("/hw8/index.php?mod=user&act=list");
		}else {
			setcookie("fail","tao moi khong thanh cong",time()+3);
			$this->redirect("/hw8/index.php?mod=user&act=add");
		}
	}

	public function edit(){
		$id = $_GET['id'];

		$data_edit =  $this->model->getId($id);

		$this->view('User/edit.php',[
			'data_edit' => $data_edit
		]);
	}
	public function editProcess(){

		$data = $_POST;
		$id = $data['id'];
		$file = $_FILES['image_edit'];
		$arr_data = array();
		$arr_data['name'] = $data['name'];
		$arr_data['email'] = $data['email'];
		if (!$file['name'] == "") {
			$this->model->upLoadFile("image","image_edit","500000",array('jpg','png','txt'));
			$arr_data['image'] = $file['name'];
		}else {
			$arr_data['image'] = $data['image'];

		}
		$arr_data['created_at'] = $data['created_at'];
		$result = $this->model->update($arr_data,$id);
		if ($result) {
			setcookie("success","Update thanh cong",time()+3);
			$this->redirect("/hw8/index.php?mod=user&act=list");
		}else {
			setcookie("fail","update khong thanh cong",time()+3);
			$this->redirect("/hw8/index.php?mod=user&act=edit");
		}
	}
	public function delete(){
		$id = $_GET['id'];

		$result = $this->model->delete($id);

		if ($result) {
			setcookie("success","Xóa thanh cong",time()+3);
		}else {
			setcookie("fail","Xóa khong thanh cong",time()+3);
		}

		$this->redirect("/hw8/index.php?mod=user&act=list");
	}
	public function detail(){
		$id = $_GET['id'];
		$data = $this->model->getId($id);
		$this->view('User/detail.php',[
			'data' => $data
		]);
	}

}

?>
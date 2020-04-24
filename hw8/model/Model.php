<?php 
	require('model/Connection.php');
	class Model{
		protected $Connection;
		protected $table;
		function __construct(){
			$connect = new Connection();
			$this->connection = $connect->connection;
		}
		public function all(){
			$query = "SELECT * FROM  " . $this->table ;
		    $result = $this->connection->query($query);

		    $data =array();
		    while ($row = $result->fetch_assoc()) {
		        $data[] = $row;
		    }
			return $data;	
		}
		public function getId($id){
			$query = "SELECT * FROM " . $this->table . " WHERE id = " .$id;
		    $result = $this->connection->query($query);

		    $data =array();
		    while ($row = $result->fetch_assoc()) {
		        $data[] = $row;
		    }
			return $data;
		}
		public function getCategory(){
			$query = "SELECT * FROM  categories  "  ;

			$result = $this->connection->query($query);

			$data_category = array();

			while ($row = $result->fetch_assoc()) {
			    $data_category[] = $row;
			}
			return $data_category;
		}
		public function getUsers(){
			$query = "SELECT * FROM  users  "  ;

			$result = $this->connection->query($query);

			$data_user = array();

			while ($row = $result->fetch_assoc()) {
			    $data_user[] = $row;
			}
			return $data_user;
		}
		function getpost($id){
			$query_post = "SELECT * FROM $this->table WHERE id= ".$id;

			$post_resutl = $this->connection->query($query_post);

			$posts = $post_resutl->fetch_assoc();


			if ($posts['user_id']) {
				$query_user = "SELECT * FROM users WHERE id = ".$posts['user_id'];

				$user_resutl = $this->connection->query($query_user);

				$users =  $user_resutl->fetch_assoc();

				$posts['user'] =$users;
			}else {
				echo 'sai';
			}

			if ($posts['category_id']) {
				$query_categories = "SELECT * FROM categories WHERE id = ".$posts['category_id'] ;

				$categories_resutl = $this->connection->query($query_categories);

				$catogories = $categories_resutl->fetch_assoc();

				$posts['categorie'] = $catogories;
			}


			return $posts;
			}
		public function update($data,$id){
			$query = "UPDATE  " . $this->table . " SET ";
			foreach ($data as $key => $value) {
			 	$query .= $key . " = '" . $value. "'," ;  
			}
			$query = substr_replace($query, "", -1);

			$query .=" WHERE id= ".$id;

			$status = $this->connection->query($query);

			return $status;
		}
		public function add($data){
			$query = "INSERT INTO " . $this->table . "(";
			end($data);
			$lastKey = key($data);

			foreach ($data as $key => $value) {
				if ($key == $lastKey) {
					$query .= $key . ")";
				}else {
					$query .= $key . ",";
				}
			}
			$query .= " VALUES (";

			foreach ($data  as $key => $value) {
				if ($key == $lastKey) {
					$query .= "'" . $value . "'" . ")";
				}else {
					$query .= "'" . $value . "'" . ",";
				}
			}
			
			$result = $this->connection->query($query);
			// echo $query;
			return $result;		
		} 
		public function delete($id){
			$query = "DELETE  FROM  ". $this->table ." WHERE id = " . $id;
			
		    $result = $this->connection->query($query);
		}
		public function upLoadFile($target_dir,$input_name,$max_size,$formats_allowed_array){
			$target_file = $target_dir."/".basename($_FILES[$input_name]['name']);

			$uploadok = 1;
			$imagefileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$error_arr = array();

			if (file_exists($target_file)) {
				$error_arr[] = "file không tồn tại";
				$uploadok = 0;
			}


			if ($_FILES[$input_name]['size'] > $max_size) {
				$error_arr = "kích thức sai quá lớn";
				$uploadok = 0;
			}

			if (!in_array($imagefileType, $formats_allowed_array)) {
				$error_arr[] = "xin loi, chỉ" . implode(array_values($formats_allowed_array), ",")."được cho phép";
				$uploadok = 0 ;
			}

			if ($uploadok == 0 ) {
				$error_arr[] = "<br>"."upload không thanh công";
			}else {
				if (move_uploaded_file($_FILES[$input_name]['tmp_name'], $target_file)) {
					return $_FILES[$input_name]['name'];
					
				}else {
					$error_arr[] = "khong thanh công";
				}
			}


			return $error_arr;
		}

	}
 ?>
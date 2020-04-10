<?php 
	class model{
		protected $servername = 'localhost';
		protected $username = 'root';
		protected $password = '';
		protected $dbname ='hw06';

		public  $table ;
		protected $conn;

		function __construct($table = ""){

			$this->conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
	 
			if ($this->conn->connect_errno) {
				echo 'aaaa',$this->conn->connect_errno;
				exit();
			}else {
				
			}

			$this->table = $table;
		}
		public function getALL(){
			$query = "SELECT * FROM ".$this->table;
		    $result = $this->conn->query($query);

		    $data =array();
		    while ($row = $result->fetch_assoc()) {
		        $data[] = $row;
		    }
			return $data;
		
		}
		public function getId($id){
			$query = "SELECT * FROM " . $this->table . " WHERE id = " .$id;
		    $result = $this->conn->query($query);

		    $data =array();
		    while ($row = $result->fetch_assoc()) {
		        $data[] = $row;
		    }
			return $data;

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
			$result = $this->conn->query($query);
			return $result;		
		} 
		public function delete($id){
			$query = "DELETE  FROM  $this->table  WHERE id = " . $id;
		    $result = $this->conn->query($query);
		}
		public function update($id){
		$query = "UPDATE  $this->table  SET ";
		foreach ($data as $key => $value) {
		 	$query .= $key . " = '" . $value. "'," ;  
		}
		$query = substr_replace($query, "", -1);

		$query .=" WHERE id= $id";

		return $query;

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
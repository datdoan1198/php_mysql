<?php 
	class model{
		protected $servername = 'localhost';
		protected $username = 'root';
		protected $password = '';
		protected $dbname ='php';

		public $table;
		public $conn;

		function __construct($table){
			$this->conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
			if ($this->conn->connect_errno) {
				echo 'aaaa',$this->conn->connect_errno;
				exit();
			}else {
				
			}
			$this->table = $table;
			// $this->conn = new connection();

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
		public function create($data){
			$query = "INSERT INTO  $this->table (";
			foreach ($data as $key => $value) {
				$query .= $key . ",";
			}

			$query = substr_replace($query,")",-1);
			$query .= " VALUES (";
			foreach ($data  as $key => $value) {
				$query .= "'" . $value . "'" . ",";
			}
			$query = substr_replace($query,")",-1);
			$result = $this->conn->query($query);
			return $result;		
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
		
		public function getById($id){
			$query = "SELECT * FROM  $this->table  WHERE id = " . $id;
		    $result = $this->conn->query($query);

		    $data =array();
		    while ($row = $result->fetch_assoc()) {
		        $data[] = $row;
		    }
			return $data;

		}
		public function delete($id){
			$query = "DELETE  FROM  $this->table  WHERE id = " . $id;
		    $result = $this->conn->query($query);
		}


	}

 ?>
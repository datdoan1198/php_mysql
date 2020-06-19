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
		public function getid($id){
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
	}
 ?>
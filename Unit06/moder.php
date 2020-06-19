<?php 

	class moder{
		protected $servername = 'localhost';
		protected $username = 'root';
		protected $password = '';
		protected $dbname ='php';


		public  $table ;
		protected $conn;

		function __construct($table = ""){

			$this->conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
	 
			if ($this->conn->connect_errno) {
				echo 'aaaa',$this->conn->connect_errno;
				exit();
			}else {
				echo 'thanh cong';
			}

			$this->table = $table;
		}

		function getALL(){
			$query = "SELECT * FROM ".$this->table;
		    $result = $this->conn->query($query);

		    $data =array();
		    while ($row = $result->fetch_assoc()) {
		        $data[] = $row;
		    }
			return $data;
		
		} 
		function delete(){
		echo 'xoa';
		}	
		function update(){
			echo 'cap nhat';
		}

	}
 ?>
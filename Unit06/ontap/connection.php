<?php 
	class Connection{
		const servername = 'localhost';
		const username = 'root';
		const password = '';
		const dbname ='php';

		public $table;
		public $conn;

		function __construct($table){
			// $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
			// if ($this->conn->connect_errno) {
			// 	echo 'aaaa',$this->conn->connect_errno;
			// 	exit();
			// }else {
				
			// }
			// $this->table = $table;
			// $this->conn = new connection();
			

		}
	}


 ?>
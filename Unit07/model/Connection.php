<?php 
	class Connection{
		public $connection;


		function __construct(){

 			$servername = 'localhost';
			$username = 'root';
			$password = '';
			$dbname ='php';

			$this->connection = new mysqli($servername,$username,$password,$dbname);
	 
			// if ($conn->connect_errno) {
			// 	echo 'aaaa',$conn->connect_errno;
			// 	exit();
			// }else {
			// 	// echo 'thanh cong';
			// }

			// $this->connection = $conn;
		}
	}

 ?>
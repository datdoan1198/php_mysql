<?php 
		$servername = 'localhost';
		$username = 'root';
		$password = '';
		$dbname ='hw06';

		$conn = new mysqli($servername,$username,$password,$dbname);
	
		if ($conn->connect_errno) {
				echo 'aaaa',$conn->connect_errno;
				exit();
		}else {
				// echo 'thanh cong';
		}

		$this->connection = $conn;
	}
 ?>
<?php 
 class category{
 	public $connection;

 	function __construct(){

 			$servername = 'localhost';
			$username = 'root';
			$password = '';
			$dbname ='php';

			$conn = new mysqli($servername,$username,$password,$dbname);
	 
			if ($conn->connect_errno) {
				echo 'aaaa',$conn->connect_errno;
				exit();
			}else {
				// echo 'thanh cong';
			}

			$this->connection = $conn;
		}
	public function all(){
			$query = "SELECT * FROM  categories";
		    $result = $this->connection->query($query);

		    $data =array();
		    while ($row = $result->fetch_assoc()) {
		        $data[] = $row;
		    }
			return $data;
		
		}
	public function getId($id){
			$query = "SELECT * FROM Categories WHERE id = " .$id;
		    $result = $this->connection->query($query);

		    $data =array();
		    while ($row = $result->fetch_assoc()) {
		        $data[] = $row;
		    }
			return $data;

		}
		public function update($data,$id){
		$query = "UPDATE  Categories  SET ";
		foreach ($data as $key => $value) {
		 	$query .= $key . " = '" . $value. "'," ;  
		}
		$query = substr_replace($query, "", -1);

		$query .=" WHERE id= ".$id;

		$status = $this->connection->query($query);

		return $status;

		}

 }

 ?>
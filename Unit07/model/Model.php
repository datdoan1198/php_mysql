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
		// public function update($data,$id){
		// $query = "UPDATE  Categories  SET ";
		// foreach ($data as $key => $value) {
		//  	$query .= $key . " = '" . $value. "'," ;  
		// }
		// $query = substr_replace($query, "", -1);

		// $query .=" WHERE id= ".$id;

		// $status = $this->connection->query($query);

		// return $status;

		// }
		public function add($mod,$data){
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

	}


 ?>
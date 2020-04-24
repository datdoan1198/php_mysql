<?php 
	
class Connection
{
	public $connection;

	public function __construct()
	{
		$SEVER_NAME = 'localhost';
		$USER_NAME ='root';
		$PASS_WORD = '';
		$DB_NAME = 'hw05';

		$this->connection = new mysqli ($SEVER_NAME,$USER_NAME,$PASS_WORD,$DB_NAME);
		if ($this->connection->connect_errno) {
			echo 'fair';
		}else {
			
		}

	}
}	

 ?>
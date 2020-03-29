<?php 
	// $servername = 'localhost';
	// $username = 'root';
	// $password = '';
	// $dbname = 'php';

	// $conn = mysqli_connect($servername,$username,$password,$dbname);
	// // $conn = new mysqli ($servername,$username,$password,$dbname);

	// if ($conn->connect_errno) {
	//  	echo 'sdsdsd'.$conn->connect_errno;
	//  	exit();
	//  }else {
	//  	echo 'succes';
	//  } 


	// Lấy dữ liệu từ form gửi lên, gán vào biến data
	require_once('connect.php');
    $data = $_POST;
   
    // print_r($data);	


    $query = "INSERT INTO categories (name, description) VALUES ('".$data['name']."','".$data['description']."')";
   	echo $query;

   	// Thực thi câu lệnh
    $status = $conn->query($query);

    header('location:demo.php');



 ?>
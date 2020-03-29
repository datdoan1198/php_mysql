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
	 // b2
	 // 2.1 Câu lệnh truy vấn
    require_once('connect.php');
	$query = "SELECT * FROM categories";

	// 2.2 Thực thi câu lệnh
	$result = $conn->query($query);
	// echo '<pre>';
	// print_r($result);
	// echo '--------------------------';

	// b3
	// Tạo 1 mảng để chứa dữ liệu
	$categories = array();
	while($row = $result->fetch_assoc()) { 
		$categories[] = $row;
	}
	// echo '<pre>';
	// print_r($categories);
	// foreach ($categories as $value) {
	// 	echo $value['name']."<br>";
	// }

 ?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="Categories_add.php" class="btn btn-primary">Add New Category</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Action</th>
            </thead>
            <?php foreach ($categories as $value) { ?>
            <tr>
                <td> <?php echo $value['id'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['description'] ?></td>
                <td>
                    <a href="detail.php?id=<?php echo $value['id']; ?>" class="btn btn-primary">Detail</a>
                    <a href="edit.php?id=<?php echo $value['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="delete.php?id=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
            
        </table>
    </div>
</body>
</html>
<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

	}
	require_once('connect.php');
	$data= $_POST;
	$query = "SELECT * FROM users WHERE id =" . $id;
	$result = $conn->query($query);
	$users = $result->fetch_assoc();

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
        <a href="list_users.php" class="btn btn-primary">Home</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Họ Và Tên</th>
                <th>Email</th>
                <th>Password</th>
                <th>Ảnh</th>
                <th>Thời Gian</th>
            </thead>
            <tr>
                <td><?php echo $users['id'] ?></td>
                <td><?php echo $users['name'] ?></td>
                <td><?php echo $users['email'] ?></td>
                <td><?php echo $users['password'] ?></td>
                <td><?php echo $users['avatar'] ?></td>
                <td><?php echo $users['created_at'] ?></td>
                
            </tr>
                   
        </table>
    </div>
</body>
</html>
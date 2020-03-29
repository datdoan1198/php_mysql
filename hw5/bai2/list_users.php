<?php 
	require_once('connect.php');
	$query = "SELECT * FROM users";

	$result = $conn->query($query);

	$users = array();

	while ($row = $result->fetch_assoc()) {
	    $users[] = $row;
	}

 ?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>USERS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- USERS ---</h3>
        <a href="add_users.php" class="btn btn-primary">Add New Users</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </thead>
            <?php foreach ($users as $value) { ?>
            <tr>
                <td> <?php echo $value['id'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['email'] ?></td>
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

<?php 
	require_once('connect.php');

	$query = "SELECT * FROM posts";

	$result = $conn->query($query);

	$categories = array();
	while ($row = $result->fetch_assoc()) {
	    $categories[] = $row;
	}

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
        <h3 class="text-center">--- POSTS ---</h3>
        <a href="add.php" class="btn btn-primary">Add New Posts</a>
        <table class="table">
            <thead>
                <th>Title</th>
                <th>Description</th>
                <th>Name</th>
            </thead>
            <?php foreach ($categories as $value) { ?>
            <tr>
                <td> <?php echo $value['title'] ?></td>
                <td><?php echo $value['description'] ?></td>
                <td><?php echo $value['content'] ?></td>
                <td>
                    <a href="detail.php?id=<?php echo $value['id']; ?>" class="btn btn-primary">Detail</a>
                    <a href="post_edit.php?id=<?php echo $value['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="detele.php?id=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
            
        </table>
    </div>
</body>
</html>

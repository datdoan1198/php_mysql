<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}

	require_once('connect.php');


	$query = "SELECT * FROM categories WHERE id =".$id;

	$result = $conn->query($query);

	$categories = $result->fetch_assoc();
	// echo '<pre>';
	// print_r($categories);

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
        <a href="list_categories.php" class="btn btn-primary">Home</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Parent_id</th>
                <th>Thumbnail</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Created_at</th>
            </thead>
            <tr>
                <td><?php echo $categories['id'] ?></td>
                <td><?php echo $categories['name'] ?></td>
                <td><?php echo $categories['parent_id'] ?></td>
                <td><?php echo $categories['thumbnail'] ?></td>
                <td><?php echo $categories['slug'] ?></td>
                <td><?php echo $categories['description'] ?></td>
                <td><?php echo $categories['created_at'] ?></td>
                
            </tr>
                   
        </table>
    </div>
</body>
</html>

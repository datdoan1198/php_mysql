<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}

	require_once('connect.php');

	$query = "SELECT * FROM users WHERE id= ".$id;

	$detail = $conn->query($query);

	$details = $detail->fetch_assoc();


 ?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New USERS</h3>
    <hr>
        <form action="edit_product_user.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" id="" placeholder="" name="id" value="<?php echo $details['id'] ?>">
            </div>
              <div class="form-group">
                <label for="">Họ Và Tên</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $details['name'] ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email" value="<?php echo $details['email'] ?>">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="" name="pw" value="<?php echo $details['password'] ?>">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <input type="text" class="form-control" id="" placeholder="" name="avatar" value="<?php echo $details['avatar'] ?>">
            </div>
            <div class="form-group">
                <label for="">created_at</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at" value="<?php echo $details['created_at'] ?>">
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Create</button>
        </form>
    </div>
</body>
</html>
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
        <form action="add_product_users.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" id="" placeholder="" name="id">
            </div>
              <div class="form-group">
                <label for="">Họ Và Tên</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="" name="pw">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <input type="text" class="form-control" id="" placeholder="" name="avatar">
            </div>
            <div class="form-group">
                <label for="">created_at</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at">
            </div>
            
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>
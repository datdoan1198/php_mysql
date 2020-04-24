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
    <div class="container-fluid">
        <h3 class="text-center">--- USERS ---</h3>
        <?php if (isset($_COKKIE['success'])) { ?>
            <br>
            <div class="alert- alert-info">
                <p>Thông Báo : <?php echo $_COKKIE['success']; ?></p>
            </div>
        <?php   } ?>
        <a href="/hw8/index.php?mod=user&act=add" class="btn btn-primary">Add New Users</a>
        <table class="table">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
            </thead>
            <?php foreach ($users as $value) {   ?>

            <tr>    
                <td> <?php echo $value['name'] ?></td>
                <td><?php echo $value['email']; ?></td>
                <td width="100px" height="100px">
                     <img style="width: 100%;height: 100%" src="<?php echo "image/".$value['image'] ?>" alt=""><br><br>
                </td>
                <td>
                    <a href="/hw8/index.php?mod=user&act=detail&id=<?php echo $value['id']; ?>" class="btn btn-primary">Detail</a>
                    <a href="/hw8/index.php?mod=user&act=edit&id=<?php echo $value['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="/hw8/index.php?mod=user&act=delete&id=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
            
        </table>
    </div>
</body>
</html>

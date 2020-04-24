<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <h3 class="text-center">--- POSTS ---</h3>
        <?php if (isset($_COOKIE['success'])) {  ?>
            <br>
            <div class="alert alert-info">
                <p>THÔNG BÁO : <?php echo $_COOKIE['success']; ?></p>
            </div>
        <?php } ?>
        <a href="/hw8/index.php?mod=post&act=add" class="btn btn-primary">Add New Posts</a>
        <table class="table">
            <thead>
                <th>Title</th>
                <th>Image</th>
                <th>View</th>
            </thead>
            <?php foreach ($posts as $value) {   ?>

            <tr>
                <td> <?php echo $value['title'] ?></td>
                <td width="100px" height="100px">
                     <img style="width: 100%;height: 100%" src="<?php echo "image/".$value['image'] ?>" alt=""><br><br>
                </td>
                <td><?php echo $value['view_count'] ?></td>
                <td>
                    <a href="/hw8/index.php?mod=post&act=detail&id=<?php echo $value['id']; ?>" class="btn btn-primary">Detail</a>
                    <a href="/hw8/index.php?mod=post&act=edit&id=<?php echo $value['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="/hw8/index.php?mod=post&act=delete&id=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
            
        </table>
    </div>
</body>
</html>
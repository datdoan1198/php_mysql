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
        <a href="/hw7/index.php?form=posts&act=add" class="btn btn-primary">Add New Posts</a>
        <table class="table">
            <thead>
                <th>Title</th>
                <th>Image</th>
                <th>View</th>
            </thead>
            <?php foreach ($data as $value) {   ?>

            <tr>
                <td> <?php echo $value['title'] ?></td>
                <td width="200px">
                     <img style="width: 50%;height: 20%" src="<?php echo "image/".$value['image'] ?>" alt=""><br><br>
                </td>
                <td><?php echo $value['view_count'] ?></td>
                <td>
                    <a href="/hw7/index.php?form=posts&act=detail&id=<?php echo $value['id']; ?>" class="btn btn-primary">Detail</a>
                    <a href="/hw7/index.php?form=posts&act=edit&id=<?php echo $value['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="/hw7/index.php?form=posts&act=delete&id=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
            
        </table>
    </div>
</body>
</html>

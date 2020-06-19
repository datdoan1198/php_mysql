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

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- CATEGORY ---</h3>
        <a href="/Unit07/index.php?mod=category&act=add" class="btn btn-primary">Add New Categories</a>
        <table class="table">
            <thead>
            	<th>ID</th>
                <th>Title</th>
                <th>Description</th>
            </thead>
            <?php foreach ($categories as $value) {   ?>

            <tr>
            	<td><?php echo $value['id']; ?></td>
                <td> <?php echo $value['name'] ?></td>
               
                 <td>
                    <a href="/Unit07/index.php?mod=category&act=detail&id=<?php echo $value['id']; ?>" class="btn btn-primary">Detail</a>
                    <a href="post_edit.php?id=<?php echo $value['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="delete_post.php?id=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <?php } ?>
            
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
   <!--  <script>
        $(document).ready(function(){
            $('#content').summernote('editor.pasteHTML',$('#content').data('content'));

        })
    </script> -->
</body>
</html>
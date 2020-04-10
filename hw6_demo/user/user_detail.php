<?php 

	require('../model.php');
    $id = $_GET['id'];
    class user_detail extends model{

    }
    $user = new user_detail('users');

    $user_detail = $user->getId($id);
  


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
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <h3 class="text-center">--- USERS ---</h3>
        <a href="user.php" class="btn btn-primary">HOME</a>
        <table class="table">
            <thead>
            	<th style="width: 10%;height: 100px;">ID</th>
                <th>name</th>
                 <th>Email</th>
                 <th>PassWord</th>
                <th>Image</th>
               
            </thead>
            <?php foreach ($user_detail as $value) { ?>
            <tr>
            	<td><?php echo $value['id'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['email'] ?></td>
                <td><?php echo $value['password'] ?></td>
				
               	<td style="width: 150px ;height: 100px"><img style="width: 100%;height: 100%" src="<?php echo "../image/".$value['avatar'] ?>" alt="">
                </td>
            </tr>
            <?php }  ?>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function(){   
            // $('#texta').summernote();
            $('#content').summernote('editor.pasteHTML',$('#content').data('content'));

        })
    </script>
</body>
</html>

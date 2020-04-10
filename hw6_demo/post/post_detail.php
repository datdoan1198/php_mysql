<?php 

	require('../model.php');
    $id = $_GET['id'];
    class post_detail extends model{

    }
    $posts = new post_detail('posts');

    $post_detail = $posts->getId($id);
  


 ?>
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
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <h3 class="text-center">--- POSTS ---</h3>
        <a href="post.php" class="btn btn-primary">HOME</a>
        <table class="table">
            <thead>
            	<th style="width: 10%;height: 100px;">ID</th>
                <th>Tiêu Đề Bài Viết</th>
                 <th>Mô Tả</th>
                 <th>Đường Dẫn</th>
                <th>Nội Dung Bài Viết</th>
               
            </thead>
            <?php foreach ($post_detail as $value) { ?>
            <tr>
            	<td><?php echo $value['id'] ?></td>
                <td><?php echo $value['title'] ?></td>
                <td><?php echo $value['description'] ?></td>
                <td><?php echo $value['slug'] ?></td>
				
               	<td style="width: 500px ;">
                    <div style="overflow:scroll;width: 100%;height: 200px;" id="content" data-content="<?php echo $value['content'] ?>"  ></div>
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

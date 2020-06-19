<?php 
	require ('connect.php');
	require('function.php');
	$id = $_GET['id'];

	$posts = getpostsid($conn,$id);
	// echo '<pre>';
	// print_r($posts);



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
        <a href="list_post.php" class="btn btn-primary">HOME</a>
        <table class="table">
            <thead>
            	<th>ID</th>
                <th>Tiêu Đề Bài Viết</th>
                <th>Ảnh</th>
                <th>Nội Dung Bài Viết</th>
                <th>Chuyên Mục</th>
                <th>Tác Giả</th>
                <th>Lượt xem</th>
                <th>Thời Gian </th>
                
            </thead>

            <tr>
            	<td><?php echo $posts['id'] ?></td>
                <td style="width: 200px;"> <?php echo $posts['title'] ?></td>
                <td style="width: 100px ;height: 80px"><img style="width: 100%;height: 100%" src="<?php echo "img/".$posts['thumbnail'] ?>" alt=""></td>
               	<td style="width: 500px ;">
                    <div style="overflow:scroll;width: 100%;height: 200px;" id="content" data-content="<?php echo $posts['content'] ?>"></div>
                </td>
               	<td><?php echo $posts['categorie']['name']; ?></td>
               	<td><?php echo $posts['user']['name'] ?></td>
                <td><?php 	echo $posts['view_count']; ?></td>
  				<td><?php echo $posts['created_at'] ?></td>
      			   
            </tr>
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

<?php 
	require ('connect.php');
	require('function.php');

	$id = $_GET['id'];

	$categories = getcategories($conn);
	$users = getusers($conn);
	$posts = getpostsid($conn,$id);
    echo '<pre>';
    print_r($posts);
	



 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
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
    <h3 align="center">Update Posts</h3>
    <hr>
        <form action="post_edit_product.php" method="POST" role="form" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" id="" placeholder="" name="id" value="<?php echo $posts['id'] ?>">
            </div>
            <div class="form-group">
                <label for="">title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?php echo $posts['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">decription</label>
                <input type="text" class="form-control" id="" placeholder="" name="decription" value="<?php echo $posts['description'] ?>">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder=""  name="thumbnail" >
            </div>
            <div class="form-group">
                <label for="">Content</label>
               <textarea name="content" id="content" data-content="<?php echo $posts['content'] ?>" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?php echo $posts['slug'] ?>">
            </div>
            <div class="form-group">
                <label for="">View_count</label>
                <input type="text" class="form-control" id="" placeholder="" name="view_count" value="<?php echo $posts['view_count'] ?>">
            </div>
            
            <div class="form-group">
              	<label for="">Catogory_id</label>
              	<select  class="form-control" name="category_id">
                   <?php foreach ($categories as $value) { ?>
                   <option value="<?php echo $value['id'] ?>" <?php if($value['id'] == $posts['category_id']) echo "selected"  ?>  ><?php echo $value['name']; ?></option>
                <?php } ?>
               </select>
            </div>
            <div class="form-group">
               <label for="">User_id</label>
               <select  class="form-control" name="user_id">
                   <?php foreach ($users as $value) { ?>
                    <option value="<?php echo $value['id'] ?>" <?php if($value['id']==$posts['user_id']) echo "selected"  ?> ><?php echo $value['name']; ?></option>
                <?php } ?>
               </select>
            </div>
            <div class="form-group">
                <label for="">Created_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at" value="<?php echo $posts['created_at'] ?>">
            </div>
            
            
            <button type="submit" class="btn btn-primary" name="submit" >UPDATE</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#content').summernote();
            $('#content').summernote('editor.pasteHTML',$('#content').data('content'));

        })
    </script>
</body>
</html>
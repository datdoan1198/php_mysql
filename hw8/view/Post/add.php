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
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">

</head>
<body>
    <div class="container-fluid">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New Posts</h3>
    <hr>
        <form action="/hw8/index.php?mod=post&act=addProcess" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="">description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="image">
            </div>
            <div class="form-group">
                <label for="">Content</label>
               <textarea name="content" id="conten" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug">
            </div>
            <div class="form-group">
                <label for="">View_count</label>
                <input type="text" class="form-control" id="" placeholder="" name="view_count">
            </div>
            
            <div class="form-group">
                <label for="">Catogory_id</label>
               <select  class="form-control" name="category_id">
                   <?php foreach ($categories as $value) { ?>
                    <option value="<?php echo $value['id'] ?>"><?php echo $value['name']; ?></option>
                <?php } ?>
               </select>
            </div>
            <div class="form-group">
                <label for="">User_id</label>
               <select  class="form-control" name="user_id">
                   <?php foreach ($users as $value) { ?>
                    <option value="<?php echo $value['id'] ?>"><?php echo $value['name']; ?></option>
                <?php } ?>
               </select>
            </div>
            <div class="form-group">
                <label for="">Created_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at">
            </div>
            
            
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

    </form>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#conten').summernote();
               $('#description').summernote();
            // $('#texta').summernote('editor.pasteHTML',$('#texta').data('content'));

        })
    </script>
</body>
</html>
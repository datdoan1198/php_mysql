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
        <?php foreach ($data_edit as $data) { ?>
        <form action="/hw7/index.php?form=posts&act=editProcess" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
               <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            </div>
            <div class="form-group">
                <label for="">title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?php echo $data ['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">description</label>
                <textarea name="description" id="description" class="form-control" data-description="<?php echo $data['description'] ?>"></textarea>
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label><br>
                <img style="width: 10%;height: 10%" src="<?php echo "image/".$data['image'] ?>" alt=""><br><br>
                <input type="hidden" name="image" value="<?php echo $data['image'] ?>" >
                <input type="file" class="form-control" id="" placeholder="" name="image_edit" >
            </div>
            <div class="form-group">
                <label for="">Content</label>
               <textarea name="content" id="content" class="form-control" data-content="<?php echo $data['content'] ?>"></textarea>
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?php echo  $data['slug'] ?>">
            </div>
            <div class="form-group">
                <label for="">View_count</label>
                <input type="text" class="form-control" id="" placeholder="" name="view_count" value="<?php echo  $data['view_count'] ?>">
            </div>
            
            <div class="form-group">
                <label for="">Catogory_id</label>
               <select  class="form-control" name="category_id">
                   <?php foreach ($categories as $value) { ?>
                    <option value="<?php echo $value['id'] ?>"<?php if($value['id'] == $data['category_id']) echo "selected"  ?> > <?php echo $value['name']; ?> </option>
                <?php } ?>
               </select>
            </div>
            <div class="form-group">
                <label for="">User_id</label>
               <select  class="form-control" name="user_id">
                   <?php foreach ($users as $value) { ?>
                    <option value="<?php echo $value['id'] ?>" <?php if ($value['id'] == $data['user_id']) echo "selected" ?> > <?php echo $value['name']; ?> </option>
                <?php } ?>
               </select>
            </div>
            <div class="form-group">
                <label for="">Created_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at" value="<?php echo  $data['created_at'] ?>">
            </div>
            
            <?php  } ?>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

    </form>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#description').summernote('editor.pasteHTML',$('#description').data('description'));
             $('#content').summernote('editor.pasteHTML',$('#content').data('content'));
        })
    </script>
</body>
</html>
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
    <h3 align="center">Add New Users</h3>
    <hr>
        <?php foreach ($data_edit as $value) { ?>
        <form action="/hw8/index.php?mod=user&act=editProcess" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" class="form-control" name="id" value="<?php echo  $value['id'] ?>">
            </div>
            <div class="form-group">
                <label for="">name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $value['name'] ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $value['email'] ?>">
            </div>
            <!-- <div class="form-group">
                <label for="">PassWord</label>
                <input type="password" class="form-control" id="" placeholder="" name="password">
            </div> -->
            <div class="form-group">
                <label for="">Thumbnail</label><br>
                <img style="width: 10%;height: 10%" src="<?php echo "image/".$value['image'] ?>" alt=""><br><br>
                <input type="hidden" name="image" value="<?php echo $value['image'] ?>" >
                <input type="file" class="form-control" id="" placeholder="" name="image_edit" >
            </div>
            <div class="form-group">
                <label for="">Time</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at" value="<?php echo $value['created_at'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
        <?php  } ?>
    </div>

    </form>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
    <script>
        // $(document).ready(function(){
        //     $('#conten').summernote();
        //        $('#description').summernote();
            // $('#texta').summernote('editor.pasteHTML',$('#texta').data('content'));

        // })
    </script>
</body>
</html>
<?php 
    require('connect.php');
    require('header.php');
    $id = $_GET['id'];
    $categories = getcategories($conn);
    $users = getusers($conn);
    $post = getpost($conn,$id);



    // $query = "SELECT * FROM categories";
    // $result = $conn->query($query);

    // $categories =array();
    // while ($row = $result->fetch_assoc()) {
    //     $categories[] = $row;
    // }

    // $query = "SELECT * FROM users";
    // $result = $conn->query($query);

    // $users =array();
    // while ($row = $result->fetch_assoc()) {
    //     $users[] = $row;
    // }


 ?>

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
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New Posts</h3>
    <hr>
        <form action="post_edit_product.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?php echo $post['title'] ?>">
            </div>
              <div class="form-group">
                <label for="">decription</label>
                <input type="text" class="form-control" id="" placeholder="" name="decription" value="<?php echo $post['description'] ?>">
            </div>
            <div class="form-group">
                <label for="">Content</label>
               <textarea name="content" class="form-control"  ><?php echo $post['content'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
               <select  class="form-control" name="category_id">
                   <?php foreach ($categories as $value) { ?>
                    <option value="<?php echo $value['id'] ?>" <?php if($value['id']==$post['category_id']) echo "selected"  ?>  ><?php echo $value['name']; ?></option>
                <?php } ?>
               </select>
            </div>
            <div class="form-group">
                <label for="">user</label>
               <select  class="form-control" name="user_id">
                   <?php foreach ($users as $value) { ?>
                    <option value="<?php echo $value['id'] ?>" <?php if($value['id']==$post['user_id']) echo "selected"  ?> ><?php echo $value['name']; ?></option>
                <?php } ?>
               </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>
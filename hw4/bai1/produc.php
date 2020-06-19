<?php 
    session_start();
    print_r($_SESSION['upload']);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form thong tin</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="container" align="center">
        <h1>DANH SÁCH GIỎ HÀNG</h1>
    </div>
    <div>
    <a href="upload.html" class="btn btn-info">home</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>name</th>
                <th>anh</th>
                <th>dowload</th>
                <th>delete</th>
            </tr>
        </thead>>
        <tbody>
            <?php $sum = 0; ?>
            <?php foreach ($_SESSION['upload'] as $list) { 
              // $st = "upload/" . $list['file'];
                ?>
            <tr>
                <td><?php echo $list['id']; ?></td>
                <td><?php echo $list['name']; ?></td>
                <td><img style="width: 20% ;height: 20%" src="<?php  echo "upload/".$list['file']    ?>" alt=""></td>
               <!--  <td><a href='<?php echo $st ?>' class="btn btn-info">dowload</a></td> -->
                <td><a href="dowload.php?id=<?php echo $list['id'] ?>" class="btn btn-info">dowload</a></td>

               <td><a href="delete.php?id=<?php echo $list['id'] ?>" class="btn btn-danger">delete</a></td>
                
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</body>
</html>
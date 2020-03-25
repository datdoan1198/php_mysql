<?php
    session_start();
 ?>
<!DOCTYPE html>
<html>
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
</head>
<body>

    <div class="container">
       <h2 align="center">DANH SÁCH NGƯỜI DÙNG</h2>
       <a href="add.php" class="btn btn-primary">Thêm Mới</a><br>
        <?php if (isset($_COOKIE['msg'])) { ?>
            <br>
            <div class="alert alert-info">
                <p>THÔNG BÁO : <?php echo $_COOKIE["msg"]; ?></p> 
            </div>
        <?php } ?>

        <?php if (isset($_COOKIE['msgd'])) { ?>
            <br>
            <div class="alert alert-info">
                <p>THÔNG BÁO : <?php echo $_COOKIE["msgd"]; ?></p> 
            </div>
        <?php } ?>
        <br>

       <table class="table table-hover">
          <thead>
            <tr>
                <th>Mã Sinh Viên</th>
                <th>Họ Và Tên</th>
                <th>Delete</th>
                <th>Show</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($_SESSION["student"] as $masinhvien) {  ?>
            <tr>
                <td> <?php echo $masinhvien['masinhvien']; ?> </td>
                <td> <?php echo $masinhvien['hovaten']; ?> </td>
                <td><a class="btn btn-danger" href="delete.php?masinhvien=<?php echo $masinhvien['masinhvien']; ?>">delete</a></td>
                <td><a class="btn btn-info" href="detail.php?msv=<?php echo $masinhvien['masinhvien']; ?>">show</a></td>
            </tr>
          <?php } ?>
          </tbody>
       </table>
    </div>
   
</body>
</html>

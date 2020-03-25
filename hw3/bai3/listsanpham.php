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
       <h2 align="center">DANH SÁCH Sản Phẩm</h2>
    
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
                <th>Mã Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá</th>
                <th></th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($_SESSION["sanpham"] as $masp) {  ?>
            <tr>
                <td> <?php echo $masp['masp']; ?> </td>
                <td> <?php echo $masp['tensp']; ?> </td>
                <td> <?php echo number_format($masp['gia']) ; ?> </td>
                
                <td><a class="btn btn-success" href="giohang.php?masp=<?php echo $masp['masp']; ?>">Thêm Vào Giỏ Hàng</a></td>
            </tr>
          <?php } ?>
          </tbody>
       </table>
    </div>
   
</body>
</html>

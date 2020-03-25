<?php 
    require_once'sanphan.php';
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
    <style type="text/css">
        img{
            width: 70px;
            height: 100px;
        }
    </style>
</head>
<body>
    <div align="center">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Mã Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá Sản Phẩm</th>
                <th>ảnh</th>
            </tr>
        </thead>>
        <tbody>
            <?php foreach ($listsanpham as $list) { ?>
            <tr>
                <td><?php echo $list['id']; ?></td>
                <td><?php echo $list['tensp']; ?></td>
                <td><?php echo number_format($list['gia']); ?></td>
                <td ><img src="<?php echo $list['img']; ?>"  alt=""  ></td>
                <td><a class="btn btn-success" href="list.php?id=<?php echo $list['id']; ?>">Thêm Vào Giỏ Hàng</a></td>

            </tr>
            <?php } ?>
        </tbody>


    </table>
    </div>
</body>
</html>
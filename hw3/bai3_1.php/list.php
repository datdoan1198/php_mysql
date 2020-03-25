<?php 
    session_start();
    require_once'sanphan.php';
    if (isset($_GET['id'])) {
        $idlistsanpham = $_GET['id'];
   
    $newlistsanpham = array();
    foreach ($listsanpham as $val) {
        $newlistsanpham[$val['id']]= $val;
    }
    
    if (!isset($_SESSION['giohang'])  || $_SESSION['giohang'] == null ) {
      $newlistsanpham[$idlistsanpham]['soluong'] = 1 ;
      $_SESSION['giohang'][$idlistsanpham] = $newlistsanpham[$idlistsanpham];
    }else {
        if (array_key_exists($idlistsanpham, $_SESSION['giohang'])) {
            $_SESSION['giohang'][$idlistsanpham]['soluong'] +=1;
            
        }else {
             $newlistsanpham[$idlistsanpham]['soluong'] = 1 ;
             $_SESSION['giohang'][$idlistsanpham] = $newlistsanpham[$idlistsanpham];
        }
    }
    }
    unset($_SESSION['giohang']['']);

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
    <a href="add.php" class="btn btn-info">home</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Mã Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá Sản Phẩm</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                <th></th>
            </tr>
        </thead>>
        <tbody>
            <?php $sum = 0; ?>
            <?php foreach ($_SESSION['giohang'] as $list) { 
                 $sum += $list['gia'] * $list['soluong'] ;
                ?>
            <tr>
                <td><?php echo $list['id']; ?></td>
                <td><?php echo $list['tensp']; ?></td>
                <td><?php echo number_format($list['gia'])." VNĐ"; ?></td>
                <td ><a href="view.php?idview=<?php echo $list['id'] ?>" class="btn btn-info" >-</a> <?php echo $list['soluong']; ?> <a href="view2.php?idview=<?php echo $list['id'] ?>" class="btn btn-info" >+</a></td>
                <td><?php echo number_format($list['gia']*$list['soluong'])." VNĐ"; ?></td>
               <td><a href="delete.php?masp=<?php echo $list['id'] ?>" class="btn btn-danger">delete</a></td>
                
            </tr>
            <?php } ?>
            <tr>
                 
            </tr>
             <tr>
                <td colspan="2" style="color:red"> Tong tien</td>
                <td colspan="5" ><?php echo number_format($sum); ?></td>
                <td></td>
                <td></td>
            </tr>
            
        </tbody>
    </table>
    </div>
</body>
</html>
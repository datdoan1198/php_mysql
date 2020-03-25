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
        <form action="addd.php" method="post" role="form">
            <legend>Thông Tin Sinh Viên</legend>
            
            <div class="form-group">
                <label for="">Mã Sản Phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập Mã Sinh Viên" name="masp">

            </div>
            
            <div class="form-group">
                <label for="">Tên Sản Phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập Họ Và Tên" name="tensp">
            </div>  

             <div class="form-group">
                <label for="">Giá</label>
                <input type="text" class="form-control" id="" placeholder="Nhập Email" name="gia">
            </div> 

            <button  type="submit" class="btn btn-primary"  name="submit">lưu thông tin</button>
        </form>
    </div>
</body>
</html>

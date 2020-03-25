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
        <form action="add_process.php" method="post" role="form">
            <legend>Thông Tin Sinh Viên</legend>
            
            <div class="form-group">
                <label for="">Mã Sinh Viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập Mã Sinh Viên" name="masinhvien">

            </div>
            
            <div class="form-group">
                <label for="">Họ Và Tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập Họ Và Tên" name="hovaten">
            </div>  

             <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập Email" name="email">
            </div> 

             <div class="form-group ">
                <label for="">Giới Tính</label><br>
                <input type="radio"  id=""  name="gioitinh" value="nam" checked="true"> nam
                 <input type="radio"  id=""  name="gioitinh" value="nữ"> nữ
            </div> 
            
             <div class="form-group">
                <label for="">Số Điện Thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="sdt">
            </div> 

             <div class="form-group">
                <label for="">Địa Chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="diachi">
            </div> 
            <button  type="submit" class="btn btn-primary"  name="submit">lưu thông tin</button>
        </form>
    </div>
</body>
</html>

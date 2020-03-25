<?php 
	session_start();

	if (isset($_GET['masp'])) {
		$masp = $_GET['masp'];
		
	}
	
	// foreach ($_SESSION["sanpham"] as $value) {
	// 	if ($value['masp']==$masp) {
	// 		echo $value['masp']."<br>";
	// 		echo $value['tensp']."<br>";
	// 		echo $value['gia']."<br>";
	// 	}
	// }	
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
	<div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Mã Sản Phẩm</th>
				<th>Tên Sản Phẩm</th>
				<th>Giá Sản Phẩm</th>
				<th>Số Lượng</th>
			</tr>
		</thead>>
		<tbody>
			<?php foreach ($_SESSION["sanpham"] as $value) {
				if ($value['masp']==$masp) { ?>
			<tr>
				<td><?php echo $value['masp']; ?></td>
				<td><?php echo $value['tensp']; ?></td>
				<td><?php echo $value['gia']; ?></td>

			</tr>
			<?php 
				}
			}
			 ?>
			 <tr>
			 	<td><a class="btn btn-danger" href="listsanpham.php">ve trang chu</a></td>
			 </tr>
		</tbody>


	</table>
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="content">
		<div class="link">
			<a href="bai2.php?page=1">1</a>
			<a href="bai2.php?page=2">2</a>
			<a href="bai2.php?page=3">3</a>
			<a href="bai2.php?page=4">4</a>
			<a href="bai2.php?page=5">5</a>
		</div>
		<br>
		
		
		<?php 
			if(isset($_GET["page"]) == true){
				echo "day la trang so ". $_GET["page"];
			}else{
				echo "trang chu";
			}
		 ?>
	</div>
</body>
</html>

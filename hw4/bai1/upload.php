<?php 
	session_start();

	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$target_dir = "upload/";
		$target_file = $target_dir .basename($_FILES['file']['name']);

		if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
			echo basename($_FILES['file']['name']);
		}else {
			echo 'ko upload dc file';
		}
		
	};

	$_SESSION["upload"][$id] = [
		'id' => $id,
		'name' => $name,
		'file' => $_FILES['file']['name'],
	];
	// echo '<pre>';
	// 	print_r($_SESSION['upload']);
	// echo '</pre>';
	setcookie('msg', 'Thêm Mới Thành Công',time()+3);
	header('location:produc.php');
	
 ?>
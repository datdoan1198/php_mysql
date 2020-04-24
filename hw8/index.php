<?php 
	require_once('view/banken/header.php');
 ?>
<?php 
	$mod = $_GET['mod'];
	$act = $_GET['act'];

	$class_name = ucfirst($mod) . "Controller";

	$path = __DIR__ . "/controller/" . $class_name . ".php";

	if (!file_exists($path)) {
		echo 'file' . $path . "khong ton tai";
		exit();
	}else {
		
	}


	require($path);

	$controller_obj = new $class_name();

	if (!method_exists($controller_obj, $act)) {
		echo 'sai';
		exit();
	}

	$controller_obj->$act();

?>
<?php 
	require_once('view/banken/footer.php');
 ?>
<?php 
	$mod = $_GET['mod'];
	$act = $_GET['act'];


	$class_name = ucfirst($mod)."Controller";
	$path = __DIR__ . "/controllers/" . $class_name . ".php";
	// echo $path."<br>";

	if (!file_exists($path)) {
		echo 'file ' . $path . "khong ton tai" ;
		exit();
	}

	require($path);

	$controller_obj = new $class_name();

	if (!method_exists($controller_obj, $act)) {
		echo 'sai';
		exit();
	}
	$controller_obj->$act();


	// echo $mod;
	// echo $act;


	// switch ($mod) {
	// 	case 'category':
	// 		require('controllers/categorycontrollers.php');
	// 		$controllers_obj = new categorycontroller();

	// 		switch ($act) {
	// 			case 'list':
	// 				$controllers_obj->list();
					
	// 				break;
					
	// 			case 'detail':
	// 				$controllers_obj->detail();
					
	// 				break;
				
	// 			default:
	// 				echo 'ko ton tai ';
	// 				break;
	// 		}
	// 		break;
			
	// 	default:
	// 		echo 'khong ton tai';
	// 		break;
	// }


 ?>

 
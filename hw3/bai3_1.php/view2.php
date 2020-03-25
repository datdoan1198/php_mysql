<?php 
	session_start();

	if (isset($_GET["idview"])) {
		$idview = $_GET["idview"];
		if ($_SESSION['giohang'][$idview]['soluong'] >0 ) {
			$_SESSION['giohang'][$idview]['soluong'] += 1 ;
		}else {
			unset($_SESSION["giohang"][$idview]);
		}
	}
	
	header("location:list.php");
 ?>
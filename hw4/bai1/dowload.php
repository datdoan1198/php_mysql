<?php 
	session_start();
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		foreach ($_SESSION['upload'] as $value) {
			if ($value['id'] == $id) {
				// echo $value['file'];
			$nameFile = $value['file'];
			// echo $nameFile; // thay đổi tên file từ csdl tại đây
			$fileUrl = "upload/" .$nameFile ; 
			// header('Content-Description: File Transfer');
	  //       header('Content-Type: application/octet-stream');
	        header('Content-Disposition: attachment; filename="'.basename($fileUrl).'"');
	      	// header('Expires: 0');
	       //  header('Cache-Control: must-revalidate');
	       //  header('Pragma: public');
	        // header('Content-Length: ' . filesize($fileUrl));
	        // flush(); // Flush system output buffer
			readfile($fileUrl);
		}
	}
}
 ?>

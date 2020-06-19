
<?php 
	$mod = $_GET['mod'];
	$act = $_GET['act'];

	switch ($mod) {
		case 'posts':
			require ('Controller/PostController.php');
			$postController = new PostController();
			 switch ($act) {
				case 'list_post':
					$postController->list_post();
					break;
				case 'add':
					$postController->add();
					break;
				case 'addProce':
					$postController->addPostProcess();
					break;
				default:
					// code...
					break;
			}
			break;

			
		default:
			// code...
			break;
	}


 ?>
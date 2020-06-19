<?php 
	require('header.php');
	if (isset($_POST['name'])) {
		// echo '<pre>';
		// print_r($_POST);
		// $data = $_POST;
		// print_r($data);
		// $query = add('user',$data);
		// echo $query ."<br>";


		// $conten = htmlspecialchars($_POST['content']);
		// echo  $conten.'<br>';
		// $query = update('user',$_POST,1);
		// die($query);
		$conten = "<h1>hello</h1>";
		
	}



 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<!-- include libraries(jQuery, bootstrap) -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- include summernote css/js -->
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
	
 </head>
 <body>
 	<form action="" method="POST" >
 		<input type="text" name="name"><br>
 		<input type="email"  name="email"><br>
 		<textarea name="content" id="texta" data-content = "<?php echo $conten ?>" cols="30" rows="10"></textarea>
 		<input type="submit" >

 	</form>
 	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
 	<script>
 		$(document).ready(function(){
 			$('#texta').summernote();
 			$('#texta').summernote('editor.pasteHTML',$('#texta').data('content'));

 		})
 	</script>
 </body>
 </html>
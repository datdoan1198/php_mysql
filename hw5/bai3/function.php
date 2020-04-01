<?php 	
	function uploadfile($target_dir,$input_name,$max_size,$formats_allowed_array){
		$target_file = $target_dir."/".basename($_FILES[$input_name]['name']);

		$uploadok = 1;
		$imagefileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$error_arr = array();

		if (file_exists($target_file)) {
			$error_arr[] = "file không tồn tại";
			$uploadok = 0;
		}


		if ($_FILES[$input_name]['size'] > $max_size) {
			$error_arr = "kích thức sai quá lớn";
			$uploadok = 0;
		}

		if (!in_array($imagefileType, $formats_allowed_array)) {
			$error_arr[] = "xin loi, chỉ" . implode(array_values($formats_allowed_array), ",")."được cho phép";
			$uploadok = 0 ;
		}

		if ($uploadok == 0 ) {
			$error_arr[] = "<br>"."upload không thanh công";
		}else {
			if (move_uploaded_file($_FILES[$input_name]['tmp_name'], $target_file)) {
				return $_FILES[$input_name]['name'];
				
			}else {
				$error_arr[] = "khong thanh công";
			}
		}


		return $error_arr;
	}

	function getcategories($conn){
		$query_categories = "SELECT * FROM categories";
		$categories_resutl = $conn->query($query_categories);

		$categories = array();

		while ($row = $categories_resutl->fetch_assoc()) {
		    $categories[] = $row;
		}


	return $categories;
	}
	function getusers($conn){
		$query_user = "SELECT * FROM users";
		$user_resutl = $conn->query($query_user);

		$users = array();
		while ($row = $user_resutl->fetch_assoc()) {
		    $users[] = $row;
		}
	return $users;
	}

	function getposts($conn){
		$query_post  ="SELECT * FROM posts";

		$post_resutl = $conn->query($query_post);

		$posts = array();

		while ($row  = $post_resutl->fetch_assoc()) {
		    $posts[] = $row;
		}
		return $posts;
	}
	function getpostsid($conn,$id){
		$query_post = "SELECT * FROM posts WHERE id= ".$id;

		$post_resutl = $conn->query($query_post);

		$posts = $post_resutl->fetch_assoc();


		if ($posts['user_id']) {
			$query_user = "SELECT * FROM users WHERE id = ".$posts['user_id'];

			$user_resutl = $conn->query($query_user);

			$users =  $user_resutl->fetch_assoc();

			$posts['user'] =$users;
		}else {
			echo 'sai';
		}

		if ($posts['category_id']) {
			$query_categories = "SELECT * FROM categories WHERE id = ".$posts['category_id'] ;

			$categories_resutl = $conn->query($query_categories);

			$catogories = $categories_resutl->fetch_assoc();

			$posts['categorie'] = $catogories;
		}


		return $posts;
	}

 ?>
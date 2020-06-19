<?php 
	function getcategories($conn){

		$query = "SELECT * FROM categories";
	    $result = $conn->query($query);

	    $categories =array();
	    while ($row = $result->fetch_assoc()) {
	        $categories[] = $row;
	    }
		return $categories;
	}

	function getusers($conn){
		$query = "SELECT * FROM users";
	    $result = $conn->query($query);

	    $users =array();
	    while ($row = $result->fetch_assoc()) {
	        $users[] = $row;
	    }
	return $users;
	}
	function getpost($conn,$id){
	
		$post_query = "SELECT * FROM posts WHERE id= ".$id;

		$post_result = $conn->query($post_query);

		$post = $post_result->fetch_assoc();
		

		if ($post['user_id']) {
			$user_query = "SELECT * FROM users WHERE id= ".$post['user_id'];
			$user_result = $conn->query($user_query);

			$user = $user_result->fetch_assoc();
			$post['user'] = $user;
		}else {
			echo 'no';
		}

		if ($post['category_id']) {
			$category_query = "SELECT * FROM categories WHERE id= ".$post['category_id'];
			$category_result = $conn->query($category_query);

			$categories = $category_result->fetch_assoc();
			$post['categories'] = $categories;
			// echo '<pre>';
			// print_r($post);
		}
	return $post;
	}

	function add($table,$data){
		$query = "INSERT INTO $table (";
		end($data);
		$last_key = key($data);
		foreach ($data as $key => $value) {
		 	if ($key == $last_key) {
		 		$query .= $key .")"; 
		 	}else {
		 		$query .= $key . ",";
		 	}
		 } 
		$query .= " VALUES (";
		end($data);
		$last_key = key($data);
		 foreach ($data as $key => $value) {
		 	if ($key == $last_key) {
		 		$query .= "'". $key."'" .")"; 
		 	}else {
		 		$query .= "'". $key."'" .",";
		 	}
		 } 
		 return $query;

	}
	function update($table,$data,$id){
		$query = "UPDATE  $table SET ";
		foreach ($data as $key => $value) {
		 	$query .= $key . " = '" . $value. "'," ;  
		}
		$query = substr_replace($query, "", -1);

		$query .=" WHERE id= $id";

		return $query;

	}
	// function delete($table,$id){
	// 	$query = "DELETE"
	// }
 ?>
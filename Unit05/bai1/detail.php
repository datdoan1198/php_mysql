<?php 
	$id = $_GET['id'];
	echo $id;
	require_once('connect.php');

	// Viết câu lệnh để thêm dữ liệu
    $query = "SELECT * from categories WHERE id = ". $id;

	// Thực thi câu lệnh
    $result = $conn->query($query);
    // Trả về 1 bản ghi
    $category = $result->fetch_assoc();
    echo '<pre>';

   print_r($category);
?>
<p>id : <?php echo $category['id']; ?></p>
<p>name : <?php echo $category['name']; ?></p>
<p>description : <?php echo $category['description']; ?></p>
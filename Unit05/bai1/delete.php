<?php 
	$id = $_GET['id'];


	require_once('connect.php');

	$query =  "DELETE from categories where id=".$id;

	$status =$conn->query($query);
	header('location:demo.php');

 ?>
<?php 
	require ('../model.php');
	
	class category extends model{
		private $id;
		private $name ;
		private $slug ;
		private $parent_category ;
		private $image ;
		private $description ;


		function set_category_information($id,$name,$slug,$parent_category,$image,$description){
			$this->id = $id;
			$this->name = $name;
			$this->slug = $slug;
			$this->parent_category = $parent_category;
			$this->image = $image;
			$this->description = $description;
		}

		function get_category_information(){
			$arr = array();
			$arr ['id'] = $this->id;
			$arr ['name'] = $this->name;
			$arr ['slug'] = $this->slug;
			$arr ['parent_category'] = $this->parent_category;
			$arr ['image'] = $this->image;
			$arr ['description'] = $this->description;

			return $arr;
		}
	}

	$category = new category('categories');

	$file = $_FILES['image'];

	$category->upLoadFile("../image","image","500000",array('jpg','png','txt'));
	
	$data = $_POST;

	$description = htmlspecialchars($data['description']);

	$category->set_category_information($data['id'],$data['name'],$data['slug'],$data['parent_category'],$file['name'],$description);

	$data_category = $category->get_category_information();

	$category->add($data_category);




	header('location:category.php')


 ?>
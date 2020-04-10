<?php 
	require('../model.php');
	$data = $_POST;
	$content = htmlspecialchars($data['content']);
	echo $content;
	class posts extends model{
		private $id ;
		private $title ;
		private $description ;
		private $slug ;
		private $content ;

		public function set_post($id,$title,$description,$slug,$content){
			$this->id = $id;
			$this->title = $title;
			$this->description = $description;
			$this->slug = $slug;
			$this->content = $content;
		}
		public function get_post(){
			$arr_post = array();
			$arr_post ['id'] = $this->id;
			$arr_post ['title'] = $this->title;
			$arr_post ['description'] = $this->description;
			$arr_post ['slug'] = $this->slug;
			$arr_post ['content'] = $this->content;
			return $arr_post;

		}
	}

	$posts = new posts('posts');
	$posts->set_post($data['id'],$data['title'],$data['description'],$data['slug'],$content);

	$data_post = $posts->get_post();
	
	$result = $posts->add($data_post);

	header('location:post.php');


 ?>
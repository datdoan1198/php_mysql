<?php
// canh 1
	// $arr_name = array(1,2);
	// // var_dump($arr_name);
	// print_r($arr_name);
// canh 2
	// $arr_name = array(
	// 	0 => '1',
	// 	1 => 'hello',

	// );
	// echo "<pre>";
	// 		print_r($arr_name);
	// echo "</pre>";
// cach 3
	// $arr_name = array(5);
	// $arr_name[]= 1;
	// $arr_name[] = 2;
	// $arr_name[] = 'hloo';
	// echo "<pre>";
	// 		print_r($arr_name);
	// echo "</pre>";
// cach 4
	// $arr_name = array('a',1,4,6); 
 //    $arr_name[0] = 'Zent Group';
 //    $arr_name[1] = 'Be all you can be';
 //    $arr_name[6] = 2;

 //    // In mảng theo định dạng

 //    echo  "<pre>";
 //       // print_r($arr_name);
 //       var_dump($arr_name);
 //    echo "</pre>";
// cach 5
	$user = array();

	$user ["name"] = 'doan tien dat';
	$user ['age'] = 22;
	$user ['contry'] = 'nam dinh';
	$user ['school'] = 'kinh khong';
	$user ['years'] = 1998;

	echo "<pre>";
		var_dump($user);
	echo "</pre>";
	// echo "name :".$user['name']."<br>";
	// echo "age :".$user['age']."<br>";
	foreach ($user as $key => $value) {
		 echo $key. ":". $value ."<br>";
	// for ($i=0; $i <$) ; $i++) { 
	// 	# code...
	// }
	}
?>
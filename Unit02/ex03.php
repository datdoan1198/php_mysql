<?php
	$info = array();

	$info[] = array(
		'id' => 12345,
		'name' => 'Vu Van Thuong',
		'phone'=> '0123244',
		'eamil' => 'vuvanthuong@gamil.com'
	);
	$info[] = array(
		'id' => 126777,
		'name' => 'doan tien dat',
		'phone'=> '2323232323',
		'eamil' => 'datdoan@gamil.com',
	);

	foreach ($info as $key => $value) {
		echo "<br> thong tin sinh vien thu ".($key+1);
		echo "<br> - id ".$value['id'];
	};
	if (array_key_exists('id', $info)) {
		echo "<br>id " . $info['id'];
	}else{
		echo "<br>ko ton tai";
	} 
?>
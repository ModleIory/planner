<?php 
	// function __autoload($class){
	// 	$file = "{$class}.php";
	// 	echo $file;
	// 	if(file_exists($file)){
	// 		require_once($file);
	// 	}
	// }

	// $t = new Helper();
	

	function deal_auto_load($class){
		$file = "{$class}.php";
		if(file_exists($file)){
			require_once($file);
		}
	}
	spl_autoload_register('deal_auto_load');

	$t = new  Helper();
<?php
	
	//框架核心库路径
	//__DIR__是system下
	defined('SYSTEM_PATH') or define('SYSTEM_PATH',__DIR__.'/');
	//$_SERVER['SCRIPT_NAME']是指向index.php,因为这个是在index.php引入的嘛
	defined('APP_PATH') or define('APP_PATH',dirname($_SERVER['SCRIPT_NAME']).'/');
	defined("DEGUG") or define('DEGUG',TRUE);
	defined("CONFIG_PATH") or define("CONFIG_PATH",APP_PATH.'config/');
	defined("RUNTIME_PATH") or define("RUNTIME_PATH",APP_PATH.'runtime/');

	require_once(CONFIG_PATH.'config.php');
	//这种乱七八糟的路径是可以用的
	// echo CONFIG_PATH.'config.php';

	//这是一个类
	require_once(SYSTEM_PATH.'Core.php');

	$plan = new Core();
	$plan->run();



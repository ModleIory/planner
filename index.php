<?php
	
	define("BASE_PATH",__DIR__.'/');
	// echo BASE_PATH;die;
	define("APP_PATH",BASE_PATH.'app/');
	// echo APP_PATH;die;
	define("APP_URL","http://planner.com/index.php");
	//框架核心库路径
	//__DIR__是system下
	define('SYSTEM_PATH',BASE_PATH.'system/');
	define('LIBS_PATH',APP_PATH.'libs/');
	// echo SYSTEM_PATH;die;
	//$_SERVER['SCRIPT_NAME']是指向index.php,因为这个是在index.php引入的嘛
	// defined('APP_PATH') or define('APP_PATH',dirname($_SERVER['SCRIPT_NAME']).'/');
	defined("CONFIG_PATH") or define("CONFIG_PATH",BASE_PATH.'config/');
	defined("RUNTIME_PATH") or define("RUNTIME_PATH",BASE_PATH.'runtime/');

	require_once(CONFIG_PATH.'config.php');
	//这种乱七八糟的路径是可以用的
	// echo CONFIG_PATH.'config.php';

	//这是一个类
	require_once(SYSTEM_PATH.'Core.php');

	$plan = new Core();
	$plan->run();

	// 判断变量为空并且定义
	// $var = null;
	// $var or $var = 'variable';
	// echo $var;
	


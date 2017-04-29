<?php
	echo phpversion().'<br>';
	echo version_compare(PHP_VERSION,'5.3','>=').'<br>';
	// header('fuck fuck',TRUE,404);
	header('key:nginx');
	// exit(1);
	const you = 'fairy';
	define("YOU","FAIRY");
	echo defined('YOU').'<br>';
	echo defined('you').'<br>';
	echo __FILE__.'<br>';
	echo dirname(__FILE__).'<br>';
	echo getcwd().'<br>';
	chdir('..');
	echo getcwd().'<br>';
	chdir('planner');
	$wow = 'test.php';
	echo getcwd().'<br>';
	//如果当前路径存在就是输出路径,否则返回false
	echo realpath($wow).'<br>';
	$str = " wow ";
	echo trim($str).'<br>';
	$str_l = "ww_oo";
	echo ltrim($str_l,'ww').'<br>';
	$str_r = "www_ooo_www";
	echo rtrim($str_r,'ww').'<br>';
	print_r(pathinfo(__FILE__));
	echo pathinfo(__FILE__,PATHINFO_BASENAME).'<br>';
	$string = "I love zhongyaji,...";
	echo strrchr($string,'love')."<br>";
	echo DIRECTORY_SEPARATOR;
	echo "*************";

	$a = 100;
	$b = &$a;
	echo $a;
	echo $b;
	$b++;
	echo $a;
	echo $b;
	function you(){
		echo "I am you";
	}
	$xi = 'you';
	$xi();

	echo function_exists('you');

	function ha(array $arr,$str,$auto){
		echo "array is ".json_encode($arr);
		echo $str;
		echo $auto;
	}
	ha(array('ha','you','me'),'hello','fuck');

	echo "################################"."<br>";

	require_once('test_1.php');
	$one = new test_1();
	$one->show();


	echo "<br>"."!!!!!!!!!!!!!!!!!".'<br>';
	class A{
		function a_(){
			echo "this is a";
		}
	}
	class B{
		function b_(){
			echo 'this is b';
		}
		function c(){
			$this->a_a =new A();
			$this->a_a->a_();
		}
	}
	$w = new B();
	$w->c();
	class C{
		function c_(){
			echo "I am cccc";
		}
	}
	$c = new C();
	$c->c_();

	echo "<br>";
	$html  =  "<h1>成\\者\为王</h1>fuck/tory\\";
	echo $html;
	echo stripslashes($html);	

	function deal($x){
		echo $x*2;
		return $x*2;
	}
	$you = array(1,2,34,7,4);
	//return dealest data
	$v = array_map('deal', $you);

	// var_dump($v);die;
	echo '###########################################'."<br>";
	echo get_magic_quotes_gpc();

	echo $_GET['home'];
	$_ENV['you'] = 'me';
	print_r( $_ENV);

	echo "<br>"."!!!!!!!!!!!!!!!!!!!!"."<br>";

	$p = $_GET['url'];
	echo $p;
	$p_a = explode('/', $p);
	print_r($p_a);

	echo "<br>"."!!!!!!!!!!!!!!!!!!!!"."<br>";

	function fuck($a,$b){
		echo "this is {$a} and {$b}";
	}
	
	call_user_func_array('fuck',array('fuck','world'));

	echo "<br>"."!!!!!!!!!!!!!!!!!!!!"."<br>";

	$arr = [1];

	echo array_shift($arr).'ddd-';
	echo array_shift($arr)==false;

	echo "<br>"."!!!!!!!!!!!extract(var_array)!!!!!!!!!"."<br>";

	$arr = array("fuck"=>"world","fight"=>"man");

	extract($arr);
	echo $fuck.$fight;




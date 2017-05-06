<?php 
//在类的内部无法实例化自己,否则报错404
	// class oaoa{
	// 	var $a;
	// 	function __construct(){
	// 		// $this->a = new oaoa();
	// 	}
	// 	public function you(){
	// 		echo "i am you";
	// 	}
	// 	public function me(){
	// 		echo " i am me";
	// 	}
	// }
	// $wa = new oaoa();
	// $wa->me();
	// 
	

	class fuck{
		var $db;
		function __construct(){
			//麻皮  原来可以这样哇
			$this->db = $this;
		}
		function show(){
			echo "this is show of self";
		}
	}
	$yo = new fuck();
	$yo->db->show();
	$yo->show();
<?php 
//数据库的链接
	class Plan_Database{
		var $mysqli;
		public function __construct(){
			$this->connect();
		}

		//当一个方法是静态方法的时候,里面的变量只能是静态的,否则外部调用了静态方法,用非静态的变量,不是很适合哇!
		public function connect(){
			$this->mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
			if(mysqli_connect_error()){
				echo mysqli_connect_error();
			}else{
				// echo "open mysql ok!";
			}
			$this->mysqli->set_charset(DB_CHARSET);
		}	

		//对该对象的调用完全结束时候使用,它被继承,当子完成时候,才算不会调用它了 ,所以,他就子完了之后才关闭
		function __destruct(){
			// echo "close mysql ok!";
			$this->db->mysqli->close();
		}
	}
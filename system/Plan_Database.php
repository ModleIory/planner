<?php 
//专门链接数据库的
	class Plan_Database{
		var $mysqli;
		function __construct(){
			//每次调用时候从这儿链接数据库
			$this->connect();
		}
		//当一个方法是静态方法的时候,里面的变量只能是静态的,否则外部调用了静态方法,用非静态的变量,不是很适合哇!
		public function connect(){
			$this->mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
			if(mysqli_connect_error()){
				echo mysqli_connect_error();
			}else{
				echo "open mysql ok!";
			}
			$this->mysqli->set_charset(DB_CHARSET);
		}

		function __destruct(){
			echo "close mysql ok!";
			$this->mysqli->close();
		}
	}
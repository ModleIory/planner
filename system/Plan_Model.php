<?php
	class Plan_Model extends Plan_Database{
		public function __construct(){
			parent::__construct();
		}	
		//$sql sql 语句
		public function execute($sql){
			$sql = 'select * from user where id =2 and fuck=5';
			$sql = "insert into user (name ,psw d) values (hah,xixi)";
			$sql = 'delete from user where id = 4 or age <= 1';
			$sql = "update user set fuck = 2 where age >3";
			echo "this is execute method";
		}
	}
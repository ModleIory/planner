<?php
//数据库的方法库
	class Plan_Model extends Plan_Database{
		var $db;
		function __construct(){
			parent::__construct();
			//这个可以把整个对象赋值给一个变量,就可以$this->db->excute了,不需要另外的对象了
			$this->db = $this;
		}
		//run query==>此种查询方法,防注入靠的是词法的分析,而不是预编译老子认为!,不然老子自认为无法实现,对于过复杂的语句
		public function execute($sql){
			//insert 返回 true
			//delete 返回 true 没有delete的也返回true
			//update 返回 true 没有update的也返回true
			//select 返回的是一个object
			$result = $this->mysqli->query($sql);
			if( gettype($result)=='boolean' ){
				return $result;
			}elseif( gettype($result)=='object' ){
				return $result->fetch_all(MYSQLI_ASSOC);
			}else{
				echo "unknow type of sql result";
				exit(1);
			}
		}
		
		
	}
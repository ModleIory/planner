<?php 
	class User_model extends Plan_Model{
		function get_by_id(){
			echo "this is get by id";
			//怎么给其加个前缀  $this->db->execute()当执行核心database库的时候
			echo $this->execute('dd');
		}
	}
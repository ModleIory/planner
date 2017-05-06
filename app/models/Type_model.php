<?php 
	class Type_model extends Plan_Model{
		var $table = 'type';
		public function get_type_list(){
			$sql = "select * from ".$this->table;
			$result = $this->db->execute($sql);
			return $result;
		}
	}
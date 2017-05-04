<?php 
	class show{
		public function __construct(){
			echo "this is construct...";
		}
		public function __destruct(){
			echo 'this is destruct...';
		}
		public function fuck(){
			echo "this is fuck";
		}
	}

	$instance = new show();
	$instance->fuck();

<?php 
	class Plan_Controller{
		protected $view = '';
		protected $db = "";
		//$c controller name  $a action name
		public function Plan_Controller($c=null,$a=null){
			$this->view = new Plan_View();
		}
		public function load_model($modelname){
			$instance = new $modelname();
			//模型使用时候的名称
			$use_name_deal = explode('_',$modelname);
			$use_name = array_shift($use_name_deal);
			return $this->$use_name=$instance;
		}
	}
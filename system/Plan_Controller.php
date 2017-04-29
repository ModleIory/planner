<?php 
	class Plan_Controller{
		protected $view = '';
		protected $model = '';
		//$c controller name  $a action name
		public function Plan_Controller($c=null,$a=null){
			// echo 'prepare method';
			$this->view = new Plan_View();
		}
	}
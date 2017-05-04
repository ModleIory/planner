<?php
	class Welcome extends Plan_Controller{
		public function Welcome($c,$a){
			parent::__construct();
		}
		public function index(){
			echo 'this is Welcome/index ';
			$data['user'] = 'modle';
			$data['wife'] = 'fairy';
			$data['list'] = array(1,2,4,5);
			$this->load_model('User_model');
			$this->User->get_by_id();
			$this->view->assign('welcome',$data);
		}
	}
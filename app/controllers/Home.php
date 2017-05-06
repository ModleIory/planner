<?php
	class Home extends Plan_Controller{
		public function index(){
			echo "home/introduce";
			$this->plan->load_model("Type_model");
			$result = $this->Type->get_type_list();
			$this->plan->load_lib('test_lib');
			$this->test->modle_show();
			$data['list'] = $result;
			$data['title'] = 'Main Page';
			// var_dump($data);die;
			$this->view->assign('Home',$data);
		}
	}
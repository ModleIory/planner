<?php 
	class Plan_Controller{
		protected $view = '';
		protected $plan = "";
		//$c controller name  $a action name
		public function Plan_Controller($c=null,$a=null){
			$this->view = new Plan_View();
			$this->plan = $this;
		}
		//加载模型
		protected function load_model($modelname){
			$instance = new $modelname();
			//模型使用时候的名称
			$use_name_deal = explode('_',$modelname);
			$use_name = array_shift($use_name_deal);
			return $this->$use_name=$instance;
		}
		//加载自定义库
		protected function load_lib($libname){
			$lib_path = LIBS_PATH.$libname.'.php';
			if( file_exists($lib_path) ){
				require_once($lib_path);
				$simple_name = explode('_',$libname);
				$use_name = array_shift($simple_name);
				return $this->$use_name = new $libname;
			}else{
				echo "the lib {$libname} you require is not exist!";
				exit(1);
			}
		}
	}
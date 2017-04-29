<?php 
	class Core{
		public function run(){
			//函数里面不能用$this->method_name(),是回调函数,这么写在class里面
			//当要实例化一个class时候若是没有引入,那么就会执行这个函数来指派任务
			spl_autoload_register(array($this,'autoload_class'));
			$this->check_environment();
			$this->removeMagicQuotes();
			$this->unregisterGlobals();
			$this->route();
		}
		/*
			路由处理
		 */
		private function route(){
			$controller = "";
			$action = "";
			$params = array();

			$uri = $_SERVER['REQUEST_URI'];// /index.php/controller/action/param1/param2
			if($uri){
				$document_arr = explode('/',$uri);
				//推出空的和index.php
				array_shift($document_arr);
				array_shift($document_arr);

				$controller = array_shift($document_arr); 
				$controller or $controller = DEFAULT_CONTROLLER;
				$action = array_shift($document_arr);
				$action or $action = 'index';
				$params = $document_arr;
			}
			// echo $controller.$action;
			// print_r($params);
			// 
			$con = ucfirst($controller);
			//把控制器名字和方法传递给类(控制器)的构造函数
			$dispatch = new $con($con,$action);

			//如果类下面的方法存在
			if(method_exists($con, $action)){
				//如果方法存在执行函数
				call_user_func_array(array($dispatch,$action),$params);
			}else{
				echo $con.'controller is not exists! ';
				exit(1);
			}

		}

		/*
			根据debug的设定来设定是否报系统错误错!
		 */
		private function check_environment(){
			if(DEGUG){
				error_reporting(-1);
				ini_set('display_errors','On');
			}else{
				error_reporting(0);
				ini_set('display_errors','Off');
				ini_set('log_errors','On');
				ini_set('error_log',RUNTIME_PATH.'logs/error_log.log');
			}	
		}

		/*
		
			清理数据库或者表单取出来的\斜杠,这里是清理数组中的,就是$_GET[]这些全局变量里面的
		*/
		private function stripslashes_deal($value){
			$newer = is_array($value)?array_map(array($this,'stripslashes_deal'),$value):stripslashes($value);
			return $newer;
		}
		/*
			解决用户输入的斜线的过滤
		*/
		private function removeMagicQuotes(){
			//得到看看php有没有打开get/post/cookie的功能,如果打开了
			if( get_magic_quotes_gpc() ){
				$_GET = isset($_GET)?$this->stripslashes_deal($_GET):'';
				$_POST = isset($_POST)?$this->stripslashes_deal($_POST):'';
				$_COOKIE = isset($_COOKIE)?$this->stripslashes_deal($_COOKIE):'';
				$_SESSION = isset($_SESSION)?$this->stripslashes_deal($_SESSION):'';
			}
		}
		/*
			unregisterGlobals在我看来,就是清楚$GLOBALS['you'] = $_GET['you']
		*/
		private function unregisterGlobals(){
			//register_globals影响的是$_GET[]之类,如果设定了,那么,得到是直接写变量名就行了,就是避免这种问题的发生
			if(ini_get('register_globals')){
				echo 'unset global register';
				$arr = array('_SESSION','_GET','_POST','_COOKIE','_REQUEST','_SERVER','_ENV','_FILES');
				foreach ($arr as $key => $value) {
					foreach($value as $k=>$v){
						if($GLOBALS[$k] == $v){
							unset($GLOBALS[$k]);
						}
					}
				}
			}
		}

		

		/*
			假若$class是wa,根据没有定义的类名来自己引入class
			由于引入时候从多个文件夹找寻,可能重名,所以,要区别命名,见readme.md
		*/
		private function autoload_class($class){
			//system库引入名字/system/wa.php
			$system_file = SYSTEM_PATH."{$class}.php";
			//model引入名字/app/models/wa.php
			$model_file = APP_PATH."app/models/{$class}.php";
			//controllers引入名字/app/controllers/wa.php
			$controller_file = APP_PATH."app/controllers/{$class}.php";
			if( file_exists($system_file) ){
				require($system_file);
			}elseif( file_exists($model_file) ){
				require($model_file);
			}elseif( file_exists($controller_file) ){
				require($controller_file);
			}else{
				header('string',true,404);
				echo "MODLE TIP : can not find class document !file is ".__FILE__.', line is '.__LINE__;
				exit(1);
			}
		}
	}
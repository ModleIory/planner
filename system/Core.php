<?php 
	class Core{
		public function run(){
			//函数里面不能用$this->method_name(),是回调函数,这么写在class里面
			spl_autoload_register(array($this,'autoload_class'));
			$this->check_environment();
			
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
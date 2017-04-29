<?php
	class Plan_View{
		public function Plan_View(){

		}
		//相对于views文件夹的路径$view_path
		public function assign($view_path,$data_arr){
			extract($data_arr);
			$view = APP_PATH."app/views/{$view_path}.php";
			if(file_exists($view)){
				require_once($view);
			}else{
				echo "{$view_path} this view document is not exsits!!!";
				exit(1);
			}
		}
	}
<?php
	//;这种形式不可以有namespace之外的代码
	namespace one{
		class show{
			public function wow(){
				echo "this is one function";
			}
		}
	}

	namespace two{
		class show{
			function mom(){
				echo "thisistwo function";
			}
		}
	}

	namespace {
		$w = new one\show();
		$w->wow();
		$m = new two\show();
		$m->mom();
	}
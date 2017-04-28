<?php
	class fairy{
		const wiser = "modle_sherlock";
		var $one;
		var $two = 'two';
		public $three = 'three';
		public static $four = 'four';
		private function family(){
			$this->one = "fuck";
			echo "this is {$this->one}";
		}
		public function out(){
			echo self::wiser;	
			$this->family();
		}
	}
	$fuck = new fairy();
	$fuck->out();
	echo fairy::wiser;

	interface girl{
		public function happiness($man,$knowledge);
	}
	class zhongyiji implements girl{
		public function happiness($man,$knowledge){
			echo "man is {$man} and knowledge is {$knowledge}";
		}
	}
	$yo = new zhongyiji();
	$yo->happiness('wuruijie','more more');
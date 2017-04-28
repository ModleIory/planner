<?php
	namespace fuck\you;
	require('C.php'); 

	const you = 'fairy';
	function you(){
		echo "you are my fairy";
	}
	class you{
		function show(){
			echo "you are my fairy in class"."<br>";
			echo __FUNCTION__.' '.__METHOD__ ;
		}
	}

	//非限定
	echo you."<br>";//faith
	you();//you are my faith
	$Y = new you();
	$Y->show();

	echo "<br>";
	
	//限定->相当于在fuck\you下了,直接写me,相对路径嘛
	echo me\you."<br>";
	me\you();
	$X = new me\you();
	$X->show();

	echo "<br>";

	//完全限定,绝对路劲嘛
	echo \fuck\you\me\you;
	\fuck\you\me\you();


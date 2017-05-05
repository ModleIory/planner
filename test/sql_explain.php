<?php
	$you = 'me';
	$age = 21;
	//字符串模板无法不解析输出
	$sql = "select * from user where fuck={$you} or xi>{$age}";
	echo $sql."<br>";
	echo str_replace('=','\$',$sql);
	echo gettype('1');

	echo "######null objecty######"."<br>";

	$db = new stdClass();
	$db->fuck = 'you';
	$db->show = 'love';
	var_dump($db);
	echo $db->fuck;

	function la(){
		echo "I am lala";
	}
	

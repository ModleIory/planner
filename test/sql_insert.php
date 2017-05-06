<?php 
	$str = "' or 1=1 -- \"";
	echo addslashes($str);
	$stri = "-";
	$rule = "/[-'\"] /";
	echo preg_match($rule,$stri);

	//实际上对于 ' or 1=1 -- 就是要转译'或者",-= 都不用,因为其他语句里面是有这些符号的core里面就已经处理了
	//
	echo "#*#*#*#*#**#"."<br>";

	$arr = array();
	if($arr){
		echo "空数组为true";
	}else{
		echo "空数组为false";
	}
	echo "#*#*#*#*#**#"."<br>";
	if(isset($arr)){
		echo "isset空数组是true";
		echo "empty空数组是".empty($arr);
	}else{
		echo "isset空数组是false";
		echo "empty空数组是".empty($arr);
	}
	echo "#*#*#*#*#**#"."<br>";
	echo "isset没有定义的变量是".isset($wo);
	echo "empty没有定义的变量是".empty($wo);
	echo "#*#*#*#*#**#"."<br>";
	$test = null;
	if(isset($test)){
		echo "isset null的变量是true";
		echo "empty null的变量是".empty($test);
	}else{
		echo "isset null的变量是false";	
		echo "empty null的变量是".empty($test);
	}
	echo "#*#*#*#*#**#"."<br>";
	$zero = 0;
	if(isset($zero)){
		echo "isset 0的变量是true";
		echo "empty 0的变量是".empty($zero);
	}else{
		echo "isset 0的变量是false";	
		echo "empty 0的变量是".empty($zero);
	}
	echo "#*#*#*#*#**#"."<br>";



/**
	isset空数组是true  empty空数组是1
	isset没有定义的变量是false  empty没有定义的变量是1
	isset null的变量是false  empty null的变量是1
	isset 0的变量是true  empty 0的变量是1
**/
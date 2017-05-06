<?php 
	$format = "/^((13)|(15)|(18))\d{9}$/";
	$string = '13132659858';
	echo preg_match($format,$string);

	echo gettype(array());
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
</head>
<body>
	<hr>
	<h1>welcome use plan frame for you development!</h1>
	<?php foreach($list as $v):?>
		<strong><?=$v['id']?></strong>
		<cite><?=$v['type']?></cite>
		<?php if($v['id']%2==0):?>
			<h1>break</h1>
		<?php endif;?>
	<?php endforeach;?>
</body>
</html>
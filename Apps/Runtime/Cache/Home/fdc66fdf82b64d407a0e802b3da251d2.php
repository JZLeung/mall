<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php if(is_array($asdf)): foreach($asdf as $k=>$vo): echo ($k); ?>|<?php echo ($vo); endforeach; endif; ?>
	
		下面的事不会被解释
		<foreach name="asdf" item="vo" key="k" >
		   {$k}|{$vo}
		</foreach>
	
</body>
</html>
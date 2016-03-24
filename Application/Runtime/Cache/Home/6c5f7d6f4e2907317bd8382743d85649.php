<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/mall/Public/Common/css/simditor.css">
</head>
<body>
	<textarea name="" id="editor" cols="30" rows="10"></textarea>
	
	<script src="/mall/Public/Common/js/jquery-1.12.0.js"></script>
	<script src="/mall/Public/Common/js/simeditor/module.min.js"></script>
	<script src="/mall/Public/Common/js/simeditor/hotkeys.min.js"></script>
	<script src="/mall/Public/Common/js/simeditor/uploader.min.js"></script>
	<script src="/mall/Public/Common/js/simeditor/simditor.min.js"></script>
	<script>
		$(document).ready(function() {
			var editor = new Simditor({
				textarea: $('#editor'),
				defaultImage: '/mall/Public/Common/images/default.png'
				//optional options
			});
		});
	</script>
</body>
</html>
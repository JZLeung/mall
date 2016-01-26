<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<input type="text" id="num"><br>
	<button id="btn">clickme</button>
	<table></table>
	<script src="http://apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#btn').click(function(event) {
			$.ajax({
				type: "post",
				url: 'db',
				data:{'uid':1},
				success:function(json){
					console.log(json);
					var $tbody = $('<tbody>');
					$.each(json, function(index, val) {
						$tbody.append('<tr><td>'+val.id+'</td><td>'+val.title+'</td><td>'+val.url+'</td></tr>');
					});
					$('table').append($tbody);
				}
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		});
	});
	</script>
</body>
</html>
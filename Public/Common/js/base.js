;(function(){
	$('input[data-validate]').on('blur', function(event){
		event.preventDefault();
		var error = checkElement(this);
		var me = $(this);
		/*var validates = me.data('validate').split(';'),
				value = this.value,
				error = '',
				flag = true;
		for (var i = 0; i < validates.length; i++) {
			var va = validates[i].split(':');
			if (!checkValue($(this), va[0], value)) {
				flag = false;
				error += (va[1] == '' ? '' : '<li>'+va[1]+'</li>');
			}
		}*/
		if (error == '') {me.addClass('success').removeClass('error');console.log(me.attr('class'));}
		else{me.addClass('error').removeClass('success');console.log(me.attr('class'));}
		me.next().html(error);
		console.log(error);
	});
})()

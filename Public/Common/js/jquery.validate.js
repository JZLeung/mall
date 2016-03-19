;(function($) {
/**
 * 验证表单
 * element：需要验证的控件
 * type：验证的类型
 * value： 需要验证的值
 */
checkValue = function(element, type, value) {
	v = value.replace(/(^\s*)|(\s*$)/g, "");
	switch (type) {
			//必填
		case "required":
			return /[^(^\s*)|(\s*$)]/.test(v);
			break;
			//中文
		case "chinese":
			return /^[\u0391-\uFFE5]+$/.test(v);
			break;
			//数字
		case "number":
			return /^([+-]?)\d*\.?\d+$/.test(v);
			break;
			//整数
		case "integer":
			return /^-?[1-9]\d*$/.test(v);
			break;
			//正整数
		case "plusinteger":
			return /^[1-9]\d*$/.test(v);
			break;
			//负整数
		case "unplusinteger":
			return /^-[1-9]\d*$/.test(v);
			break;
			//非负数
		case "znumber":
			return /^[1-9]\d*|0$/.test(v);
			break;
			//非整数
		case "fnumber":
			return /^-[1-9]\d*|0$/.test(v);
			break;
			//双精度浮点数
		case "double":
			return /^[-\+]?\d+(\.\d+)?$/.test(v);
			break;
			//正双精度浮点数
		case "plusdouble":
			return /^[+]?\d+(\.\d+)?$/.test(v);
			break;
			//负双精度浮点数
		case "unplusdouble":
			return /^-[1-9]\d*\.\d*|-0\.\d*[1-9]\d*$/.test(v);
			break;
			//英文
		case "english":
			return /^[A-Za-z]+$/.test(v);
			break;
			//用户名
		case "username":
			return /^[a-z]\w{3,}$/i.test(v);
			break;
			//手机
		case "mobile":
			return /^\s*(15\d{9}|13\d{9}|14\d{9}|17\d{9}|18\d{9})\s*$/.test(v);
			break;
			//电话
		case "phone":
			return /^((\(\d{2,3}\))|(\d{3}\-))?(\(0\d{2,3}\)|0\d{2,3}-)?[1-9]\d{6,7}(\-\d{1,4})?$/.test(v);
			break;
			//电话
		case "tel":
			return /^((\(\d{3}\))|(\d{3}\-))?13[0-9]\d{8}?$|15[89]\d{8}?$|170\d{8}?$|147\d{8}?$/.test(v) || /^((\(\d{2,3}\))|(\d{3}\-))?(\(0\d{2,3}\)|0\d{2,3}-)?[1-9]\d{6,7}(\-\d{1,4})?$/.test(v);
			break;
			//邮箱
		case "email":
			return /^[^@]+@[^@]+\.[^@]+$/.test(v);
			break;
			//网址
		case "url":
			return /^http:\/\/[A-Za-z0-9]+\.[A-Za-z0-9]+[\/=\?%\-&_~`@[\]\':+!]*([^<>\"\"])*$/.test(v);
			break;
			//IP地址
		case "ip":
			return /^[\d\.]{7,15}$/.test(v);
			break;
			//QQ号
		case "qq":
			return /^[1-9]\d{4,10}$/.test(v);
			break;
			//中文名字
		case "chinesename":
			return /^[\u0391-\uFFE5]{2,15}$/.test(v);
			break;
			//英文名字
		case "englishname":
			return /^[A-Za-z]{1,161}$/.test(v);
			break;
			//年龄
		case "age":
			return /^[1-99]?\d*$/.test(v);
			break;
			//日期
		case "date":
			return /^((((1[6-9]|[2-9]\d)\d{2})-(0?[13578]|1[02])-(0?[1-9]|[12]\d|3[01]))|(((1[6-9]|[2-9]\d)\d{2})-(0?[13456789]|1[012])-(0?[1-9]|[12]\d|30))|(((1[6-9]|[2-9]\d)\d{2})-0?2-(0?[1-9]|1\d|2[0-8]))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))-0?2-29-))$/.test(v);
			break;
			//时间
		case "datetime":
			return /^((((1[6-9]|[2-9]\d)\d{2})-(0?[13578]|1[02])-(0?[1-9]|[12]\d|3[01]))|(((1[6-9]|[2-9]\d)\d{2})-(0?[13456789]|1[012])-(0?[1-9]|[12]\d|30))|(((1[6-9]|[2-9]\d)\d{2})-0?2-(0?[1-9]|1\d|2[0-8]))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))-0?2-29-)) (20|21|22|23|[0-1]?\d):[0-5]?\d:[0-5]?\d$/.test(v);
			break;
			//身份证
		case "idcard":
			return /^(\d{6})(\d{4})(\d{2})(\d{2})(\d{3})([0-9]|X)$/.test(v);
			break;
			//大写英文
		case "bigenglish":
			return /^[A-Z]+$/.test(v);
			break;
			//小写英文
		case "smallenglish":
			return /^[a-z]+$/.test(v);
			break;
			//颜色代码
		case "color":
			return /^#[0-9a-fA-F]{6}$/.test(v);
			break;
			//ascii码
		case "ascii":
			return /^[\x00-\xFF]+$/.test(v);
			break;
			//md5
		case "md5":
			return /^([a-fA-F0-9]{32})$/.test(v);
			break;
			//后缀名检查
		case "zip":
			return /(.*)\.(rar|zip|7zip|tgz)$/.test(v);
			break;
		case "img":
			return /(.*)\.(jpg|gif|ico|jpeg|png)$/.test(v);
			break;
		case "doc":
			return /(.*)\.(doc|xls|docx|xlsx|pdf)$/.test(v);
			break;
		case "mp3":
			return /(.*)\.(mp3)$/.test(v);
			break;
		case "video":
			return /(.*)\.(rm|rmvb|wmv|avi|mp4|3gp|mkv)$/.test(v);
			break;
		case "flash":
			return /(.*)\.(swf|fla|flv)$/.test(v);
			break;
			//多选
		case "radio":
			var radio = element.closest('form').find('input[name="' + element.attr("name") + '"]:checked').length;
			return eval(radio == 1);
			break;
		default:
			//其他规则验证
			var $test = type.split('#');
			if ($test.length > 1) {
				switch ($test[0]) {
						//比较大小
					case "compare":
						return eval(Number(v) + $test[1]);
						break;
						//比较正则
					case "regexp":
						return new RegExp($test[1], "gi").test(v);
						break;
						//比较长度
					case "length":
						var $length;
						if (element.attr("type") == "checkbox") {
							$length = element.closest('form').find('input[name="' + element.attr("name") + '"]:checked').length;
						} else {
							$length = v.replace(/[\u4e00-\u9fa5]/g, "***").length;
						}
						return eval($length + $test[1]);
						break;
						//ajax校验
					case "ajax":
						var $getdata;
						var $url = $test[1] + v;
						$.ajaxSetup({
							async: false
						});
						$.getJSON($url, function(data) {
							$getdata = data.getdata;
						});
						if ($getdata == "true") {
							return true;
						}
						break;
						//检验重复
					case "repeat":
						return v == jQuery('input[name="' + $test[1] + '"]').eq(0).val();
						break;
						//不校验
					default:
						return true;
						break;
				}
				break;
			} else {
				return true;
			}
	}
};

checkElement = function(obj){
	var me = $(obj);
	var validates = me.data('validate').split(';'),
			value = obj.value,
			error = '';
	for (var i = 0; i < validates.length; i++) {
		var va = validates[i].split(':');
		if (!checkValue($(this), va[0], value)) {
			error += (va[1] == '' ? '' : '<li>'+va[1]+'</li>');
		}
	}
	return error;
}

$.fn.checkForm = function(form){
	//var $form = typeof form == 'object' ? form : null,
	var $form = this,
		flag = true;
	if (!$form) {return ;}
	$form.find('input[data-validate]').each(function(index, el) {
		flag = checkElement(this) == '' ? true : false;
		if (!flag) {return false;}
	});
	return flag;
};
})(window.jQuery);
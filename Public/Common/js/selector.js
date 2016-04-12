(function(window, undefined){
	var win = window,
		doc = document;
	var selector = function (options){
		this.opt = options;
		this.data = options.data;
		this.default = options.default;
		this.doms = this.getSelectors();
		this.value = [];
		var me = this;
		for (var i = 0 ; i < this.doms.length ; i++) {
			(function(index){
				me.doms[index].onchange = function(){
					me.changeFunc(index+1)
				};
			})(i);
		}
		this.init()
		return {
			getValue: this.getValue,
			setValue: this.setValue,
			doms: this.doms,
			opts: this.opt
		};
	}


	selector.prototype = {
		init:function(){
			this.setOptions(1,'0');
		},
		getSelectors: function(){
			var s = this.opt.selecotor;
			var selects = [];
			for (var i = 0; i < s.length ; i++) {
				if(typeof s[i] === 'object'){
					selects.push(s[i])
				}else if(typeof s[i] === 'string'){
					var dom = doc.getElementById(s[i]);
					if(dom){
						selects.push(dom);
					}

				}
			}
			return selects;
		},
		changeFunc: function(index){
			var value = [0];
			for(var i = 0 ; i < index ; i ++){
				var s = this.doms[i];
				value.push(s.options[s.selectedIndex].value);
			}
			this.setOptions(index+1, value.join('_'));

		},
		setOptions: function(index, dataname){
			if(index > this.doms.length){return}
			var s = this.doms[index-1],
				data = this.data[dataname] || [];
			s.options.length = 0;
			if (this.default) {
				s.options[0] = new Option(this.default[index-1], -1);
				for (var i = 0 ; i < data.length ; i++) {
					s.options[i+1] = new Option(data[i], i);
				}
			}else{
				for (var i = 0 ; i < data.length ; i++) {
					s.options[i] = new Option(data[i], i);
				}
			}

			this.setOptions(index+1, dataname+'_0');
		},
		getValue:function(){
			var s = this.doms,
				value = [];
			for (var i = 0; i < s.length; i++) {
				value.push(s[i].options[s[i].selectedIndex].text);
			}
			return value;
		},
		setValue:function(value, selectValue){
			if (value instanceof Array || value instanceof Object) {
				if (selectValue) {
					var selects = this.doms;
					for (var i = 0; i < value.length; i++) {
						var s = selects[i];
						for (var j = 0; j < s.options.length; j++) {
							if (s.options[j].value == value[i]) {
								s.selectedIndex = j;
								s.onchange();
								break;
							}
						}
					}
				}else{
					for (var i = 0; i < value.length; i++) {
						this.doms[i].selectedIndex = value[i];
						this.doms[i].onchange();
					}
				}

			}
		}
	};
	window.selector = selector;
})(window)

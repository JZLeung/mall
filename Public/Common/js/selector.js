(function(window, undefined){
	var win = window,
		doc = document;
	var selector = function (options){
		this.opt = options;
		this.data = options.data;
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
				value.push(this.doms[i].selectedIndex);
			}
			this.setOptions(index+1, value.join('_'));
			
		},
		setOptions: function(index, dataname){
			if(index > this.doms.length){return}
			var s = this.doms[index-1],
				data = this.data[dataname] || [];
			s.options.length = 0;
			for (var i = 0 ; i < data.length ; i++) {
				s.options[i] = new Option(data[i], i);
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
		}
	};
	window.selector = selector;
})(window)

var toast = {
	el: "div#toast" ,
	text: "Sample Toast",
	interval: 3000,
	domNode: {
		root: null,
		text: null
	},
	close: function(){
		shrink(this.domNode.root) ;
	},
	show: function(options = {
				text: "Sample Toast",
				interval: 3000
			}){
		this.text = options.text || this.text ;
		this.interval = options.interval || this.interval ;
		this.domNode.text.textContent = this.text ;
		enlarge(this.domNode.root)
		var toastRef = this ;
		setTimeout(function(){
			toastRef.close() ;
		}, this.interval)
	},
	init: function(){
		this.domNode.root = document.querySelector(this.el) ;
		this.domNode.text = this.domNode.root.querySelector("span") ;	
	}
};
window.addEventListener("load", function(){
	toast.init() ;
})
var toast = {
	el: "div#toast" ,
	text: "Sample Toast",
	interval: 3000,
	domNode: {
		root: null,
		text: null
	},
	close: function(){
		this.domNode.root.style.display = "none" ;
	},
	show: function(options = {
				text: "Sample Toast",
				interval: 3000
			}){
		this.text = options.text || this.text ;
		this.interval = options.interval || this.interval ;
		this.domNode.text.textContent = this.text ;
		this.domNode.root.style.display = 'flex' ;
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
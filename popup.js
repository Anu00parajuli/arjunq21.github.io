var popup = {
	duration: 500 ,
	el: "div.popup_cont" ,
	title: "Popup Title",
	body: "Popup Body",
	domNode: {
		root: null,
		title: null,
		body: null,
		closeButton: null
	},
	close: function(){
		fadeOut(this.domNode.root) ;
	},
	show: function(options = {
				title: "Popup Title",
				body: "Popup Body"
			}){
		var thisRef = this ;
		this.title = options.title || this.title ;
		this.body = options.body || this.body ;
		this.domNode.title.textContent = this.title ;
		this.domNode.body.innerHTML = this.body ;
		fadeIn(this.domNode.root, 600) ;
	},
	init: function(){
		this.domNode.root = document.querySelector(this.el) ;
		this.domNode.title = this.domNode.root.querySelector("div.p_title_text span") ;
		this.domNode.closeButton = this.domNode.root.querySelector("div.p_close i") ;
		this.domNode.body = this.domNode.root.querySelector("div.p_body") ;
		var popupRef = this ;
		this.domNode.closeButton.addEventListener("click", function(e){
			popupRef.close() ;
		})
		this.domNode.root.addEventListener("click", function(e){
			if(e.target == popupRef.domNode.root){
				popupRef.close() ;
			}
		})		
	}
};
window.addEventListener("load", function(){
	popup.init() ;
})
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
		var thisRef = this ;
		thisRef.domNode.root.style.display = "none" ;
		// this.domNode.root.classList.remove("show") ;
		// this.domNode.root.style.animationDuration = this.duration + "ms" ;		
		// this.domNode.root.classList.add("hide") ;
		// setTimeout(function(){
		// 	thisRef.domNode.root.style.display = "none" ;
		// },thisRef.duration) ;
		// this.domNode.root.style.animationDirection = "reverse" ;
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
		thisRef.domNode.root.style.display = "flex" ;
		// this.domNode.root.classList.remove("hide") ;
		// this.domNode.root.style.animationDuration = this.duration + "ms" ;		
		// this.domNode.root.classList.add("show") ;
		// setTimeout(function(){
		// 	thisRef.domNode.root.style.display = "flex" ;
		// }, thisRef.duration) ;
		// this.domNode.root.style.display = 'flex' ;
		// this.domNode.root.style.animationName = "test" ;
		// this.domNode.root.style.animationDirection = "normal" ;
		// this.domNode.root.style.opacity = 1 ;
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
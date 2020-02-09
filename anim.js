function fadeIn( div , interval = 400){
	if(div.constructor.name == "HTMLDivElement"){
		div.style.animationDuration = interval + "ms" ;
		div.classList.remove("fadeOut") ;
		div.classList.add("fadeIn") ;
		div.style.display = 'flex' ;
	}else{
		console.error("Only divs can be animated.") ;
	}
}
function fadeOut( div , interval = 400){
	if(div.constructor.name == "HTMLDivElement"){
		div.style.animationDuration = interval + "ms" ;
		div.classList.remove("fadeIn") ;
		div.classList.add("fadeOut") ;
		var intrvl = setTimeout(function(){
			div.style.display = 'none' ;
			clearTimeout(intrvl) ;
		}, interval )
	}else{
		console.error("Only divs can be animated.") ;
	}
}
function shrink( div, interval = 400 ){
	if(isDiv(div)){
		div.style.animationDuration = interval + "ms" ;
		div.classList.remove("enlarge") ;
		div.classList.add("shrink") ;
		var intrvl = setTimeout(function(){
			div.style.display = 'none' ;
			clearTimeout(intrvl) ;
		}, interval )
	}
}
function enlarge( div , interval = 400){
	if(isDiv(div)){
		div.style.animationDuration = interval + "ms" ;
		div.classList.remove("shrink") ;
		div.classList.add("enlarge") ;
		div.style.display = 'flex' ;
	}else{
		console.error("Only divs can be animated.") ;
	}
}
function isDiv( div ){
	if(div.constructor.name == "HTMLDivElement"){
		return true ;
	}else{
		console.error(div , " is not a div.") ;
		return false ;
	}
}
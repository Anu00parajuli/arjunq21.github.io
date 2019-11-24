var callButton, mailButton ;
window.addEventListener("load", function(){
	callButton = document.querySelector("#callButton") ;
	mailButton = document.querySelector("#mailButton") ;
	var popupButtons = [
		{node: callButton, title: "Phone No.", actionButton: "Call Now", name: 'phone'},
		{node: mailButton, title: "Email", actionButton: "Email Now", name: 'email'},
	];
	popupButtons.forEach(function(button){
		button.node.addEventListener("click", function(e){
			var largeText = button.node.querySelector("div.it_text span").textContent.trim() ;
			// var href = button.node.href ;
			popup.show({
				title: button.title,
				body: 	`
						<span class='largeText'> ${largeText} </span>
						<div class='action_buttons'>
							<div class='ab_copy'  onclick="copyToClipBoard('${largeText}')"> Copy </div>
							<div class='ab_action'> <a href = "${button.node.href}" target = "${button.node.target}" > ${button.actionButton} </a></div>
						</div>

						`
			})	
			e.preventDefault() ;	
		})
	})


 // var elem = document.getElementById('myForm');
    // var event = new Event('click');  // (*)
    // mailButton.dispatchEvent(event);


})

function copyToClipBoard( str ){
	var input = document.getElementById('clipboardInput') ;
	input.style.display = 'block' ;
	input.value = str ;
	input.select() ;
	document.execCommand("copy") ;
	input.style.display = 'none' ;
	popup.close();
	toast.show({text: "Copied " + str });
}

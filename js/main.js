// JavaScript Document
$(document).ready(function(){
	/* makes the active and disabled links go nowhere */
    $(".active, .disabled").each(function(){
		$(this).on("click",function(event){
			event.preventDefault();
		});
	});
});
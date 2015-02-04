// JavaScript Document

var perc;

$(document).ready(function() {
	
	 var inputs = $(".form-control");
	 
	 perc = 100 / ($(inputs).length);
	 
	 
	 for(i=0;i<inputs.length;i++){
		 inputs[i].onblur = fieldCheck;
	 }
	 
	 $(".btn").on("click", function(event){
		 if(document.querySelector(".progress span").innerHTML != "100%"){
			 event.preventDefault();
			 
			 var errorField = document.createElement("p");
			 errorField.innerHTML = "You must fill out all the fields.";
			 errorField.className = "error";
			 
			 document.querySelector(".formBtn").appendChild(errorField);
		 }
	 });

});

function fieldCheck(){
	
	val = true;
	var entry = this.value;
	var progress = $(".progress");
	var progressBar = $(progress).find(".progress-bar");
	var progressNum = $(progress).find("span");
	
	if(entry.length <= 0){
		val = false;
	}
	
	
	if(val==true && $(this).hasClass("done")==true){
		
		return false;
		
	} else if(val==true && $(this).hasClass("done")==false){
		
		$(this).addClass("done");
		
		var currProgress = $(progressNum).html();
		var newProgress = parseInt(currProgress.slice(0,-1)) + perc;
		$(progressNum).html(newProgress + "%");
		
		$(progressBar).attr('aria-valuenow', newProgress);
		$(progressBar).css({width: newProgress + "%"});
		
		return false;
		
	} else if(val==false && $(this).hasClass("done")==true){
		
		$(this).removeClass("done");
		
		var currProgress = $(progressNum).html();
		var newProgress = parseInt(currProgress.slice(0,-1)) - perc;
		$(progressNum).html(newProgress + "%");
		
		$(progressBar).attr('aria-valuenow', newProgress);
		$(progressBar).css({width: newProgress + "%"});
		
		return false;
		
	} else {
		
		return false;
		
	}
}
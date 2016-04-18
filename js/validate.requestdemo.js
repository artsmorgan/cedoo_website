jQuery(document).ready(function($) {
"use strict";	
	$('form.demoform').submit(function(event){
				
	  	event.preventDefault();
	  	var str = $(this).serialize();
	  	//console.log(str);
	  	$.ajax({
			   type: "POST",
			   url: "demo.mail.php",
			   data: str,
			   success: function(msg){
					if(msg=='success'){
						$('#myModal').modal('hide');
					}
				}
		});

	});	

	$('form#subscribeForm').submit(function(event){
				
	  	event.preventDefault();
	  	var str = $(this).serialize();
	  	// $('#successModal').modal('show');
	  	$.ajax({
			   type: "POST",
			   url: "subscribe.mail.php",
			   data: str,
			   success: function(msg){
			   	console.log(msg);
					if(msg=='success'){
						$('#successModal').modal('show');
						setTimeout(function(){
							$('#successModal').modal('hide');
						}, 1000);
						
					}
				}
		});

	});	


});		
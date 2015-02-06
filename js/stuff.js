
	

	$('#here').delegate('input', 'blur' , function(event) {

		if($(this).val()=='') {

			$(this).closest('.form-group').removeClass('has-success').addClass('has-error');
		}

		else {

			$(this).closest('.form-group').removeClass('has-error').addClass('has-success');

		}

		$.each($(this).closest('form').find('input'), function(index, inputField) {

				
				if($(inputField).val()!=='') {

				$(inputField).closest('form').find('button').removeClass('disabled');

				}
				else {

					$(inputField).closest('form').find('button').addClass('disabled');
				}
				
			});
	});

	$('#pageChange li').on('click', function(event) {

		event.preventDefault();
		me=$(this);

		var emptyCheck=true;

		$.each($('input'), function(index, inputField) {

				
				if($(inputField).val()!=='') {

					emptyCheck=false;

				}
				else {

					
					if(parseInt(me.attr('data-num')) > parseInt($('.active').attr('data-num')) ) {

						emptyCheck=true;
						$('.nowActive').addClass('disabled');

					}

					else {

						emptyCheck=false;
						


					}
				}
				
			});

		

		if(!$(this).hasClass('disabled')) {
			$('.active').removeClass('active');
			$(this).addClass('active');
			var pageNum= $(this).attr('data-page');

			$.ajax({

		    url: 'story/'+pageNum+'.php',
		    type: 'POST',
		    dataType: 'html',

		  

		    success: function(data) { 
		    $('#here').fadeOut(300 , function() {

		        $('#here').html(data);


		    }); 
				$('#here').fadeIn(300);

		    },
		});
	
		}
		
	});
	$('#here').delegate('#startBtn', 'click', function(event) {

		event.preventDefault();

		$.ajax({
		    url: 'story/page1.php',
		    type: 'POST',
		    dataType: 'html',

		  

		    success: function(data) { 

		    $('#here').fadeOut(300 , function() {

			$('#heads').fadeIn(300);

				$('#here').removeClass('center-block');
		        $('#here').html(data);

		    }); 
			    $('#myProgress').fadeIn(300);
				$('#here').fadeIn(300);

		    },
		});
	});



	$('#here').delegate('#subNext', 'click', function(event) {

		event.preventDefault();

		if($('#fname').val()!='' && $('#cname').val() !='' && $('#cpos').val()!='' &&  $('#hseas').val()!='' ) {

			$('.active').removeClass('active').addClass('nowActive');
			$('#pageChange li:nth-of-type(2)').addClass('nowActive active').removeClass('disabled');

			$('#progInd').fadeOut(300 , function(){

				$('.progress-bar').animate({width:'33%'} , 200);
				$('#progInd').html('33% Complete(Subject)');
				$('#progInd').delay(200).fadeIn(500);
				$('.progress-bar').attr('aria-valuenow' , '33');
				
			});
			
			$.ajax({
		    url: 'story/page2.php',
		    type: 'POST',
		    dataType: 'html',
		  	data:{'fname' : $('#fname').val() , 'cname' : $('#cname').val() , 'cpos': $('#cpos').val() , 'hseas' : $('#hseas').val()},

			success: function(data) { 
			    $('#here').fadeOut(300 , function() {

			        $('#here').html(data);

			    }); 

				$('#here').fadeIn(300);

			    },
			});

		} else {

			$('#subjectInfo').find("input[value='']").closest('.form-group').addClass(' has-error');

		}
		
		
	});



	$('#here').delegate('#perNext', 'click', function(event) {

		event.preventDefault();
		if($('#fsong').val()!='' && $('#fdish').val() !='' && $('#fdrink').val()!=''  ) {

			$('.active').removeClass('active').addClass('nowActive');
			$('#pageChange li:nth-of-type(3)').addClass('nowActive active').removeClass('disabled');


			$('#progInd').fadeOut(300 , function(){

				$('.progress-bar').animate({width:'67%'} , 200);
				$('#progInd').html('67% Complete(Personel)');
				$('#progInd').delay(200).fadeIn(500);
				$('.progress-bar').attr('aria-valuenow' , '67');
				
			});
		
			$.ajax({
			    url: 'story/page3.php',
			    type: 'POST',
			    dataType: 'html',

			  	data:{'fsong' : $('#fsong').val() , 'fdish' : $('#fdish').val() , 'fdrink': $('#fdrink').val()},
			  
			    success: function(data) { 
			    $('#here').fadeOut(300 , function() {

			        $('#here').html(data);

			    }); 
			$('#here').fadeIn(300);

			    },
			});

		} else {

			$('#perInfo .form-group').addClass(' has-error');

		}
	});

	$('#here').delegate('#ranNext', 'click', function(event) {

		event.preventDefault();
		if($('#rtranspo').val()!='' && $('#rday').val()!='' && $('#rmonth').val()!='' && $('#rword').val()!='') {

			$('#progInd').fadeOut(300 , function(){

				$('.progress-bar').animate({width:'100%'} , 200);
				$('#progInd').html('100% Complete(Random)');
				$('#progInd').delay(200).fadeIn(500);
				$('.progress-bar').attr('aria-valuenow' , '100');
				
			});
		
			$.ajax({
			    url: 'story/story.php',
			    type: 'POST',
			    dataType: 'html',

			  	data:{'rtranspo' : $('#rtranspo').val() , 'rday' : $('#rday').val() , 'rmonth': $('#rmonth').val() , 'rword' : $('#rword').val()},
			  
			    success: function(data) { 

			    $('#heads').fadeOut(300);
			    $('#here').fadeOut(300 , function() {

				$('#here').addClass('center-block');

			        $('#here').html(data);

			    }); 

			    $('#loader').fadeIn(500);

			     $('#loader').delay(2000).fadeOut(300, function(){
			    
			    		$('#myProgress').fadeOut(300);
						$('#here').fadeIn(300);

			     })

			    },
			});

		} else {

			$('#randomInfo .form-group').addClass(' has-error');

		}
	});

		$('#here').delegate('#endBtn', 'click', function(event) {

		event.preventDefault();

		


		 $.ajax({
			    url: 'story/start.php',
			    type: 'POST',
			    dataType: 'html',

			  	data:{'rtranspo' : $('#rtranspo').val() , 'rday' : $('#rday').val() , 'rmonth': $('#rmonth').val() , 'rword' : $('#rword').val()},
			  
			    success: function(data) { 
			    $('#here').fadeOut(300 , function() {

			        $('#here').html(data);
			        $('.active').removeClass('active');
			        $('.nowActive').removeClass('nowActive')
			        $('#pageChange li').addClass('disabled');
					$('#pageChange li:nth-of-type(1)').addClass('active').removeClass('disabled');

			    }); 

					
			  	 
			     


					$('.progress-bar').animate({width:'2%'} , 200);
					$('#progInd').html('2%');
					$('.progress-bar').attr('aria-valuenow' , '2');
					$('#here').fadeIn(300);

			    

			    },
			});
		  
		
	});
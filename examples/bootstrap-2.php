<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bootstrap</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- you can also add inside the content attribute "maximum-scale=1.0, user-scalable=no", which will disable the zoom functions on your site (making it feel more like a native app) -->

<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


</head>

<body>
	<div class="container-fluid"> <!-- container-fluid is a 100% width elastic container -->
    
    	<nav class="row">
        	<div class="col-lg-3"></div>
            <div class="col-lg-6">
                <ul class="nav nav-pills nav-justified">
                	<?php
					/* this php loop creates the nav links, and figures out what page we are on based on the 'pg' in the query string, giving that link the 'active' state */
						for($i=1; $i<4; $i++){
							echo '<li';
							if(isset($_GET['pg'])){
								if($_GET['pg'] == $i){
									echo ' class="active"';	
								}
							}
							echo '><a href="' . $_SERVER["PHP_SELF"] . '?pg=' . $i . '">Page' . $i . '</a></li>';
						}
					?>
                </ul>
            </div>
            <div class="col-lg-3"></div>
        </nav>
        
        <hr>
        
        <div class="progress">
        <!-- progress-bar-danger = red, -warning = yellow, -info = light-blue, -success = green, -striped = any colour strpied, and the class active will make it animated -->
        <?php
        	/* set a variable for the percentage of the progress...*/
			if(isset($_GET['pg'])){
				$progress = round($_GET['pg']*33.3);
			}else{
				$progress = 33;	
			}
		
		 ?>
        	<div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $progress; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $progress; ?>%">
            	<!-- label for the progress bar -->
            	<span><?php echo $progress; ?>%</span>
            </div>
            
            <!-- you can stack progress bars!
            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width:33%">
            	<span>33%</span>
            </div>
            -->
        </div>
        
        <hr>
        
        <footer>
        	<!-- add back and next buttons -->
        	<ul class="pager">
            	<li class="pull-left disabled"><a href="">Previous</a></li>
                <li class="pull-right"><a href="">Next</a></li>
            </ul>
            <!-- pagination numbers -->
            <ul class="pagination">
            	<li class="active"><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
            </ul>
        </footer>
    
    </div>
    
<script>
	/* make the active and disabled links go nowhere */
	$(".active, .disabled").each(function(){
		$(this).on("click", function(event){
			event.preventDefault();
		});
	});
</script>
</body>
</html>

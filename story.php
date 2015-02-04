<?php
	include_once('includes/session.php');
	
	if(!isset($_POST['noun-plural-1'])){

		$host  = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'form.php';
	
		header("Location: http://$host$uri/$extra");
		die();
	}
	
	session_destroy();
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Library of Fate</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="scripts/story.js"></script>
</head>

<body>
	<div id="wrapper" class="container">
    
    	<?php
			include_once("includes/header.php");
		?>
        
        <div id="main">
        	<div id="pCont">
        		<p><span class="pFirst">W</span>ell done, fate-weaver. The turns of time and destiny have been rewritten as you directed them. Beware, however: rarely does such an act come without price. The fates will surely extract payment from you... eventually. For now, gaze below, and see the new course history has taken, thanks to you.</p>
        	</div>
            
            <img class="img-responsive border-call" src="images/border_call.svg" alt="">
            
            <div class="col-sm-2"></div>
            
            <div class="col-sm-8" id="storyCont">
            
            	<?php
					
					echo "<p>Two <span>" . $_POST['noun-plural-1'] . "</span>, both alike in dignity,<br>
							In fair <span>" . $_POST['place-1'] . "</span>, where we lay our scene,<br>
							From ancient <span>" . $_POST['noun-1'] . "</span> break to new mutiny,<br>
							Where civil blood makes civil hands unclean.<br>
							From forth the fatal loins of these two foes<br>
							A pair of star-cross`d <span>" . $_POST['noun-plural-2'] . "</span> take their life;<br>
							Whole misadventured piteous overthrows<br>
							Do with their <span>" . $_POST['noun-2'] . "</span> bury their parents` strife.<br>
							The fearful passage of their <span>" . $_POST['adjective-1'] . "</span> love,<br>
							And the continuance of their parents` rage,<br>
							Which, but their children`s end, nought could <span>" . $_POST['verb-1'] . "</span>,<br>
							Is now the <span>" . $_POST['number-1'] . "</span> hours` traffic of our stage;<br>
							The which if you with patient <span>" . $_POST['body-part-plural-1'] . "</span> attend,<br>
							What here shall <span>" . $_POST['verb-2'] . "</span>, our toil shall strive to mend.</p>";
				
				?>
                
            </div>
            
            <div class="col-sm-2"></div>
            
            <img class="img-responsive border-call" src="images/border_call.svg" alt="">
            
        </div><!--main-->
        
        <?php
			include_once("includes/footer.php");
		?>
        
    </div><!--wrapper-->
</body>
</html>
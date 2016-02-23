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
    <title>The Ultimate Warrior</title>
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
        		<p><span class="pFirst">C</span>enturies ago There lived a great king who went to war with his gallant soldiers, they all fought and stood by him the war was great and he came back victorious so in order to display his pleasure he held a fight in  one of the famous arena in rome whoever wins become the 7th Commander of the sixth legion</p>
        	</div>
            
            <img class="img-responsive border-call" src="images/border_call.svg" alt="">
            
            <div class="col-sm-2"></div>
            
            <div class="col-sm-8" id="storyCont">
            
            	<?php
					
					echo "<p>Two <span>" . $_POST['noun-plural-1'] . "</span>, both alike in dignity,<br>
							On the First day two warriors one from the first legion of Capua <span>" . $_POST['place-1'] . "</span>, and the other from the legion of Capua,<br>
							and the other from the legion of Spartacus went into the  <span>" . $_POST['noun-1'] . "</span> arena the first in Rome, Greece and Bethany to <br>
							settle their differences they agreed that they would fight to<br>
							the death, so a contest was set up they both <br>
							had their wish fulfilled, meanwhile the warrior of the region <span>" . $_POST['noun-plural-2'] . "</span> of Capua had a helmet and a sword given to <br>
							him by his father that sword has never lost in battle now <br>
							the other warrior uses two swords and two  <span>" . $_POST['noun-2'] . "</span>spears, one spear on the left hand the other on the back, <br>
							and the other on the right he has six weapons  <span>" . $_POST['adjective-1'] . "</span> love,<br>
							at his disposal, He also has a horse. He is always swift and accurate,<br>
							he has never lost he jumps in the air,  <span>" . $_POST['verb-1'] . "</span>,<br>
							lands with his legs rolls and strike on the ground with <span>" . $_POST['number-1'] . "</span> his head upright, he is known <br>
							as the bringer of rain. <span>" . $_POST['body-part-plural-1'] . "</span> attend.</p>";
                    
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
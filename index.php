<?php
	include_once('includes/session.php');
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
    <script src="scripts/welcome.js"></script>
</head>

<body>
	<div id="wrapper" class="container">
    
    	<?php
			include_once("includes/header.php");
		?>
        
        <div id="main">
        	<div id="pCont">
        		<p><span class="pFirst">W</span>elcome to The Library, traveller! Here is recorded the epic histories and tales of mankind, those that have passed, and those that are yet to come. The power of this place is a mystery, but what is known is that a precious few who come here are given a precious gift, and a terrible responsibility: the power to challenge the cycle of destiny and rewrite the fates to their whim. Are you among them, traveller? Do you possess the gift of destiny? Enter, and find out. Enter, and rewrite history. Enter, and challenge fate!
                <br>
				<?php
                
					
				
				?></p>
        	</div>
            <img class="img-responsive border-call" src="images/border_call.svg">
            <div class="btnContainer">
            	<input type="submit" class="btn" value="CHALLENGE DESTINY">
            </div><!--btnContainer-->
            <img class="img-responsive border-call" src="images/border_call.svg">
        </div><!--main-->
        
        <?php
			include_once("includes/footer.php");
		?>
        
    </div><!--wrapper-->
</body>
</html>
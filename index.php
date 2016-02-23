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
        		<p><span class="pFirst">C</span>enturies ago There lived a great king who went to war with his gallant soldiers, they all fought and stood by him the war was great and he came back victorious so in order to display his pleasure he held a fight in  one of the famous arena in rome whoever wins become the 7th Commander of the sixth legion.
                <br>
				<?php
                
					
				
				?></p>
        	</div>
            <img class="img-responsive border-call" src="images/border_call.svg">
            <div class="btnContainer">
            	<input type="submit" class="btn" value="FIGHT TILL DEATH">
            </div><!--btnContainer-->
            <img class="img-responsive border-call" src="images/border_call.svg">
        </div><!--main-->
        
        <?php
			include_once("includes/footer.php");
		?>
        
    </div><!--wrapper-->
</body>
</html>
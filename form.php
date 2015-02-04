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
    <script src="scripts/form.js"></script>
</head>

<body>
	<div id="wrapper" class="container">
    
    	<?php
			include_once("includes/header.php");
		?>
        
        <div id="main">
        	<div id="pCont">
        		<p><span class="pFirst">Y</span>ou have made a brave choice, traveller. The fates are not always kind to those who challenge them. Complete the information below as you see fit, and discover the rewards for your actions! And the consequences...</p>
        	</div>
            
            <img class="img-responsive border-call" src="images/border_call.svg" alt="">
            
            <div class="col-sm-2"></div>
            
            <div class="col-sm-8">
            
            	<div class="col-sm-12">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                        </div>
                        <span>0%</span>
                    </div>
                </div>
            
            	<form action="story.php" role="form" method="post">
                
            	<div class="col-sm-6">
                    <div class="form-group">
                        <label for="noun-plural-1">Noun (Plural):</label>
                        <input type="text" id="noun-plural-1" name="noun-plural-1" class="form-control" placeholder="eg. cars, doors, plates...">
                    </div>
                    <div class="form-group">
                        <label for="noun-1">Noun:</label>
                        <input type="text" id="noun-1" name="noun-1" class="form-control" placeholder="eg. house, knife, statue...">
                    </div>
                    <div class="form-group">
                        <label for="verb-1">Verb:</label>
                        <input type="text" id="verb-1" name="verb-1" class="form-control" placeholder="eg. run, jump, type...">
                    </div>
                    <div class="form-group">
                        <label for="adjective-1">Adjective:</label>
                        <input type="text" id="adjective-1" name="adjective-1" class="form-control" placeholder="eg. careful, slow, strong...">
                    </div>
                    <div class="form-group">
                        <label for="number-1">Number:</label>
                        <input type="text" id="number-1" name="number-1" class="form-control" placeholder="eg. six, seventeen...">
                    </div>
                </div><!--col-sm-6-->
                
                <div class="col-sm-6">
                	<div class="form-group">
                        <label for="noun-plural-2">Noun (Plural):</label>
                        <input type="text" id="noun-plural-2" name="noun-plural-2" class="form-control" placeholder="eg. cars, doors, plates...">
                    </div>
                    <div class="form-group">
                        <label for="noun-2">Noun:</label>
                        <input type="text" id="noun-2" name="noun-2" class="form-control" placeholder="eg. house, knife, statue...">
                    </div>
                	<div class="form-group">
                        <label for="verb-2">Verb:</label>
                        <input type="text" id="verb-2" name="verb-2" class="form-control" placeholder="eg. run, jump, type...">
                    </div>
                    <div class="form-group">
                        <label for="place-1">Place:</label>
                        <input type="text" id="place-1" name="place-1" class="form-control" placeholder="eg. Paris, Spark St...">
                    </div>
                    <div class="form-group">
                        <label for="body-part-plural-1">Body Part (Plural):</label>
                        <input type="text" id="body-part-plural-1" name="body-part-plural-1" class="form-control" placeholder="eg. arms, hairs, lungs...">
                    </div>
                </div>
                
                <div class="formBtn btnContainer">
                    <input type="submit" class="btn" value="CONTINUE">
                </div><!--btnContainer-->
                
                </form>
            </div><!--col-sm-8-->
            
            <div class="col-sm-2"></div>
            
            <img class="img-responsive border-call" src="images/border_call.svg" alt="">
            
        </div><!--main-->
        
        <?php
			include_once("includes/footer.php");
		?>
        
    </div><!--wrapper-->
</body>
</html>
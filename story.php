<?php 
session_start();

$content = '<p>Start your Story</p>';
	if(isset($_GET['pg'])){
		$_SESSION['page#'] = "start";
		$_GET['pg'] == "start";
		$content = '<p>Start your Story</p>';
			
		if($_GET['pg'] == 1){
			$_SESSION['page#'] = "1";
			$content = '<p>A Female _______ (noun) Entered the room. There was _____ (feeling) in her eyes.</p>
			<p>FEMALE: "Detective _________(noun), thank you for seeing me on such a ________(adjective) day!"</p>
			<p>DETECTIVE: "Its alright miss ________(noun). What seems to be the problem?</p>';
			
		}else if($_GET['pg'] == 2){
			$_SESSION['page#'] = "2";
			$content = '<p>FEMALE: "I was walking home, when a ________(noun) came out of nowhere and stole my ________(noun)"!
			<p>DETECTIVE: "I am sorry to hear that. Can you describe the ________(noun)?"</p>
			<p>FEMALE: "Yes, the _______(noun) was _______, weighed ______ pounds, had _______(noun) _______(noun), and had ______ (colour) eyes."</p>';
			
		}
		else if($_GET['pg'] == 3){
			$_SESSION['page#'] = "3";
			$content = '<p>DETECTIVE: "Thank you, this will help in ________ (adjective) the _________(noun). However, I will require ________ (noun) as a downpayment for my ________(adjective)."</p>
			
			<p>FEMALE: "Yes, of course. I will ______ (adjective) your ______ (noun). Thanks again Detective!"</p>';
		}else if($_GET['pg'] == "end"){
			$content = "Thats all folks!";
		}
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Detective Stories</title>
<!-- www.bootstrapcdn.com -->
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<link href="styles/style.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</head>

<body>
    <div class="container">
        <header>
        	<nav class="row">
            <ul class="nav nav-justified">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Navlink</a></li>
                <li><a href="#">Navlink</a></li>
                <li><a href="#">Navlink</a></li>
            </ul>
            </nav>
        
        </header>
    <div class="row">
    	<div class="col-lg-12">
        	<?php 
				echo $content;
			?>
        </div>
    </div>
    <div class="row">
            <ul class="pager">
            	<li class="pull-left disabled"><a href="#">Previous</a></li>
                <li class="pull-right"><a href="#">Next</a></li>
            </ul>
            <!-- pagination numbers -->
            <ul class="pagination">
            
            	<!-- The first page of the site -->
            	<li><a href=" <?php echo $_SERVER["PHP_SELF"] ?>?pg=start" name="pg">Start</a></li>
                        <?php 
			/* this php loop creates the page links, and figures out what page we are on based on the 'pg' in the query string, giving that link the 'active' state */
			for($i=1; $i<4; $i++){
					echo '<li';
					if(isset($_GET['pg'])){
						if($_GET['pg'] == $i){
							echo ' class="active"';
						}
					}
					echo '><a href="' .$_SERVER["PHP_SELF"] . '?pg=' . $i . '" name="pg">Page ' . $i . '</a></li>';	
				}
			?>
            	<!-- When the user finishes the story, they click the end page -->
            	<li><a href="<?php echo $_SERVER["PHP_SELF"] ?>?pg=end" name="pg">End</a></li>
            </ul>
    
    </div>
    
    </div>
</body>
</html>

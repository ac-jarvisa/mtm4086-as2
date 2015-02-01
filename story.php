<?php 
session_unset();
session_start();

$content = '<p>Start your Story</p> 

<form method="post" class="form-horizontal" role="form" action="' . $_SERVER["PHP_SELF"] . '?pg=1">

<input type="submit" name="story-end" class="btn btn-info pull-left" value="Start Your Story">

</form>';
$form = '';
$results = '';

if(isset($_GET['pg'])){
	$_GET['pg'] == "start";
			
	if($_GET['pg'] == 1){

		$content = '<p>A Female _______ (noun) Entered the room. There was _____ (feeling) in her eyes.</p>
			<p>FEMALE: "Detective _________(noun), thank you for seeing me on such a ________(adjective) day!"</p>
			<p>DETECTIVE: "Its alright miss ________(noun). What seems to be the problem?</p>';
		$form = '<form method="post" class="form-horizontal" role="form" action="' . $_SERVER["PHP_SELF"] . '?pg=2">
            	<label for="story-1-a1">1) </label>
                <input type="text" id="story-1-a1" name="story-1-a1" class="form-control">
                <label for="story-1-a2">2) </label>
                <input type="text" id="story-1-a2" name="story-1-a2" class="form-control">
                <label for="story-1-a3">3) </label>
                <input type="text" id="story-1-a3" name="story-1-a3" class="form-control">
                <label for="story-1-a4">4) </label>
                <input type="text" id="story-1-a4" name="story-1-a4" class="form-control">
                <label for="story-1-a5">5) </label>
                <input type="text" id="story-1-a5" name="story-1-a5" class="form-control">
                <input type="submit" name="story-1" class="btn btn-info pull-right" value="next part">            </form>';
			
	}else if($_GET['pg'] == 2){
		// if the submit button was pressed on the previous page...
		if(isset($_POST['story-1'])){
			$_SESSION['story-1-a1'] = $_POST['story-1-a1'];
			$_SESSION['story-1-a2'] = $_POST['story-1-a2'];
			$_SESSION['story-1-a3'] = $_POST['story-1-a3'];
			$_SESSION['story-1-a4'] = $_POST['story-1-a4'];
			$_SESSION['story-1-a5'] = $_POST['story-1-a5'];
			
			// checks to see if all form inputs are empty
			if(empty($_POST['story-1-a1']) && empty($_POST['story-1-a2']) && empty($_POST['story-1-a3']) && empty($_POST['story-1-a4']) && empty($_POST['story-1-a5'])){
				// if any inputs are empty, redirect the user to the start page.	
				header("Location: story.php?=start");
			}
			// if all is well, continue to the next page
		}
		
			$content = '<p>FEMALE: "I was walking home, when a ________(noun) came out of nowhere and stole my ________(noun)"!
			<p>DETECTIVE: "I am sorry to hear that. Can you describe the ________(noun)?"</p>
			<p>FEMALE: "Yes, the _______(noun) was _______, weighed ______ pounds, had _______(noun) _______(noun), and had ______ (colour) eyes."</p>';
			
			$form = '<form method="post" class="form-horizontal" role="form" action="' . $_SERVER["PHP_SELF"] . '?pg=3">
            	<label for="story-1-a1">1) </label>
                <input type="text" id="story-2-a1" name="story-2-a1" class="form-control">
                <label for="story-1-a2">2) </label>
                <input type="text" id="story-2-a2" name="story-2-a2" class="form-control">
                <label for="story-1-a3">3) </label>
                <input type="text" id="story-2-a3" name="story-2-a3" class="form-control">
                <label for="story-1-a4">4) </label>
                <input type="text" id="story-2-a4" name="story-2-a4" class="form-control">
                <label for="story-1-a5">5) </label>
                <input type="text" id="story-2-a5" name="story-2-a5" class="form-control">
				<label for="story-1-a6">6) </label>
                <input type="text" id="story-2-a6" name="story-2-a6" class="form-control">
				<label for="story-1-a7">7) </label>
                <input type="text" id="story-2-a7" name="story-2-a7" class="form-control">
				<label for="story-1-a8">8) </label>
                <input type="text" id="story-2-a8" name="story-2-a8" class="form-control">
				 <label for="story-1-a9">9) </label>
                <input type="text" id="story-2-a9" name="story-2-a9" class="form-control">
                <input type="submit" name="story-1" class="btn btn-info pull-right" value="next part">            </form>';
		}
	else if($_GET['pg'] == 3){
		// if the submit button was pressed on the last page...
		if(isset($_POST['story-1'])){
			$_SESSION['story-2-a1'] = $_POST['story-2-a1'];
			$_SESSION['story-2-a2'] = $_POST['story-2-a2'];
			$_SESSION['story-2-a3'] = $_POST['story-2-a3'];
			$_SESSION['story-2-a4'] = $_POST['story-2-a4'];
			$_SESSION['story-2-a5'] = $_POST['story-2-a5'];
			$_SESSION['story-2-a6'] = $_POST['story-2-a6'];
			$_SESSION['story-2-a7'] = $_POST['story-2-a7'];
			$_SESSION['story-2-a8'] = $_POST['story-2-a8'];
			$_SESSION['story-2-a9'] = $_POST['story-2-a9'];
				
			// checks to see if all form inputs are empty
			if(empty($_POST['story-2-a1']) && empty($_POST['story-2-a2']) && empty($_POST['story-2-a3']) && empty($_POST['story-2-a4']) && empty($_POST['story-2-a5']) && empty($_POST['story-2-a6']) && empty($_POST['story-2-a7']) && empty($_POST['story-2-8']) && empty($_POST['story-2-a9'])){
				// if any inputs are empty, redirect the user to the start page.	
				header("Location: story.php?=start");
			}
			// if all is well, continue to the next page
		}
		$content = '<p>DETECTIVE: "Thank you, this will help in ________ (adjective) the _________(noun). However, I will require ________ (noun) as a downpayment for my ________(adjective)."</p>
			<p>FEMALE: "Yes, of course. I will ______ (adjective) your ______ (noun). Thanks again Detective!"</p>';
			
		$form = '<form method="post" class="form-horizontal" role="form" action="' . $_SERVER["PHP_SELF"] . '?pg=end">
            	<label for="story-3-a1">1) </label>
                <input type="text" id="story-1-a1" name="story-3-a1" class="form-control">
                <label for="story-3-a2">2) </label>
                <input type="text" id="story-1-a2" name="story-3-a2" class="form-control">
                <label for="story-3-a3">3) </label>
                <input type="text" id="story-1-a3" name="story-3-a3" class="form-control">
                <label for="story-3-a4">4) </label>
                <input type="text" id="story-1-a4" name="story-3-a4" class="form-control">
                <label for="story-3-a5">5) </label>
                <input type="text" id="story-1-a5" name="story-3-a5" class="form-control">
				<label for="story-3-a6">6) </label>
                <input type="text" id="story-1-a6" name="story-3-a6" class="form-control">
                <input type="submit" name="story-1" class="btn btn-info pull-right" value="next part">            </form>';
				
				
	}else if($_GET['pg'] == "end"){
		// This is the last page of the story
		// if the submit button was pressed on the last page...
		if(isset($_POST['story-1'])){
			$_SESSION['story-3-a1'] = $_POST['story-3-a1'];
			$_SESSION['story-3-a2'] = $_POST['story-3-a2'];
			$_SESSION['story-3-a3'] = $_POST['story-3-a3'];
			$_SESSION['story-3-a4'] = $_POST['story-3-a4'];
			$_SESSION['story-3-a5'] = $_POST['story-3-a5'];
			$_SESSION['story-3-a6'] = $_POST['story-3-a6'];
			
			// checks to see if all form inputs are empty
			if(empty($_POST['story-3-a1']) && empty($_POST['story-3-a2']) && empty($_POST['story-3-a3']) && empty($_POST['story-3-a4']) && empty($_POST['story-3-a5']) && empty($_POST['story-3-a6'])){
				// if any inputs are empty, redirect the user to the start page.	
				header("Location: story.php?=start");
			}
			// if all is well, continue to the next page
		}
			$content = '';
			$form = '';
			$results = '<p>A Female ' . $_SESSION['story-1-a1'] . ' Entered the room. There was ' . $_SESSION['story-1-a2'] . ' in her eyes.</p><p>FEMALE: "Detective ' . $_SESSION['story-1-a3'] . ', thank you for seeing me on such a' . $_SESSION['story-1-a4'] . ' day!"</p>
			<p>DETECTIVE: "Its alright miss ' . $_SESSION['story-1-a5'] . '. What seems to be the problem?</p>
			
			<p>FEMALE: "I was walking home, when a ' . $_SESSION['story-2-a1'] . ' came out of nowhere and stole my ' . $_SESSION['story-2-a2'] . '"!
			<p>DETECTIVE: "I am sorry to hear that. Can you describe the ' . $_SESSION['story-2-a3'] .'?"</p>
			<p>FEMALE: "Yes, the ' . $_SESSION['story-2-a4'] . ' was ' . $_SESSION['story-2-a5'] . ', weighed ' . $_SESSION['story-2-a6'] . ' pounds, had ' . $_SESSION['story-2-a7'] . ' ' . $_SESSION['story-2-a8'] . ', and had ' . $_SESSION['story-2-a9'] . ' eyes."</p>
			
			<p>DETECTIVE: "Thank you, this will help in ' . $_SESSION['story-3-a1'] . ' the ' . $_SESSION['story-3-a2'] . '. However, I will require' . $_SESSION['story-3-a3'] . ' as a downpayment for my ' . $_SESSION['story-3-a4'] . '."</p>
			<p>FEMALE: "Yes, of course. I will ' . $_SESSION['story-3-a5'] . ' your ' . $_SESSION['story-3-a6'] . '. Thanks again Detective!"</p>
			
			<form method="post" class="form-horizontal" role="form" action="' . $_SERVER["PHP_SELF"] . '?pg=start"><input type="submit" name="story-end" class="btn btn-info pull-right" value="Back to Start"></form>';
session_unset();		//empties the session file
session_destroy();
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
				echo $form;
				echo $results;
			?>
        </div>
    </div>
    <div class="row">
            <ul class="pager">
            	<li class="pull-left disabled"><a href="#">Previous</a></li>
                <li class="pull-right"><a href="#">Next</a></li>
            </ul>
            <!-- pagination numbers
            <ul class="pagination">
            	<li><a href=" <?php // echo $_SERVER["PHP_SELF"] ?>?pg=start" name="pg">Start</a></li>
                      <?php  
			/* this php loop creates the page links, and figures out what page we are on based on the 'pg' in the query string, giving that link the 'active' state 
			for($i=1; $i<4; $i++){
					echo '<li';
					if(isset($_GET['pg'])){
						if($_GET['pg'] == $i){
							echo ' class="active"';
						}
					}
					echo '><a href="' .$_SERVER["PHP_SELF"] . '?pg=' . $i . '" name="pg">Page ' . $i . '</a></li>';	
				}
			*/ ?>
            	<!-- When the user finishes the story, they click the end page 
            	<li><a href="<?php /* echo $_SERVER["PHP_SELF"] */ ?>?pg=end" name="pg">End</a></li>
            </ul>  -->
    
    </div>
    
    </div>
</body>
</html>

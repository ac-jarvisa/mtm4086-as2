<?php 
session_unset();
session_start();

$content = '<h2>Create your own Mad Libs detective story!</h2>

<p>Whenever you are ready, click the "start your story" button below.</p>

<form method="post" class="form-horizontal" role="form" action="' . $_SERVER["PHP_SELF"] . '?pg=1">

<label for="story-start" class="gly"></label>

<input type="submit" name="story-start" id="story-start" class="btn btn-primary btn-lg" value="Start Your Story"><span class="subBtn"></span>

</form>';
$form = '';
$results = '';

if(isset($_GET['pg'])){
	$_GET['pg'] == "start";
			
	if($_GET['pg'] == 1){

		$content = '<p>A female _______ entered the room. There was _____ in her eyes.</p>
			<p>FEMALE: "Detective _________, thank you for seeing me on such a ________ day!"</p>
			<p>DETECTIVE: "Its alright miss ________. What seems to be the problem?</p>';
		$form = '<form method="post" class="form-horizontal" role="form" action="' . $_SERVER["PHP_SELF"] . '?pg=2">
            	<label for="story-1-a1">1) Noun (Job) </label>
                <input type="text" id="story-1-a1" name="story-1-a1" class="form-control">
                <label for="story-1-a2">2) Noun (Emotion) </label>
                <input type="text" id="story-1-a2" name="story-1-a2" class="form-control">
                <label for="story-1-a3">3) Noun (Name) </label>
                <input type="text" id="story-1-a3" name="story-1-a3" class="form-control">
                <label for="story-1-a4">4) Adjective </label>
                <input type="text" id="story-1-a4" name="story-1-a4" class="form-control">
                <label for="story-1-a5">5) Noun (Name) </label>
                <input type="text" id="story-1-a5" name="story-1-a5" class="form-control">
                <input type="submit" name="story-1" class="btn btn-primary btn-lg pull-right" value="next part">            </form>';
			
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
		
			$content = '<p>FEMALE: "I was walking home, when a ________ came out of nowhere and stole my ________"!
			<p>DETECTIVE: "I am sorry to hear that. Can you describe the ________?"</p>
			<p>FEMALE: "Yes, the _______ was _______, weighed ______ pounds, had _______  _______, and had ______ eyes."</p>';
			
			$form = '<form method="post" class="form-horizontal" role="form" action="' . $_SERVER["PHP_SELF"] . '?pg=3">
            	<label for="story-1-a1">1) Noun (Thing) </label>
                <input type="text" id="story-2-a1" name="story-2-a1" class="form-control">
                <label for="story-1-a2">2) Noun (Thing) </label>
                <input type="text" id="story-2-a2" name="story-2-a2" class="form-control">
                <label for="story-1-a3">3) Noun (Person / Thing) </label>
                <input type="text" id="story-2-a3" name="story-2-a3" class="form-control">
                <label for="story-1-a4">4) Noun (Person / Thing)  </label>
                <input type="text" id="story-2-a4" name="story-2-a4" class="form-control">
                <label for="story-1-a5">5) Noun (Description) </label>
                <input type="text" id="story-2-a5" name="story-2-a5" class="form-control">
				<label for="story-1-a6">6) Number </label>
                <input type="text" id="story-2-a6" name="story-2-a6" class="form-control">
				<label for="story-1-a7">7) Noun (One Word Description) </label>
                <input type="text" id="story-2-a7" name="story-2-a7" class="form-control">
				<label for="story-1-a8">8) Noun (One Word Description) </label>
                <input type="text" id="story-2-a8" name="story-2-a8" class="form-control">
				 <label for="story-1-a9">9) Colour </label>
                <input type="text" id="story-2-a9" name="story-2-a9" class="form-control">
                <input type="submit" name="story-1" class="btn btn-primary btn-lg pull-right" value="next part">            </form>';
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
		// this variable contains the story content displayed on the page
		$content = '<p>DETECTIVE: "Thank you, this will help in ________ the _________. However, I will require ________ as a downpayment for my ________."</p>
			<p>FEMALE: "Yes, of course. I will ______ your ______. Thanks again Detective!"</p>';
		// this variable contains the form where users can insert the missing sections of the story.
		$form = '<form method="post" class="form-horizontal" role="form" action="' . $_SERVER["PHP_SELF"] . '?pg=end">
            	<label for="story-3-a1">1) Adjective </label>
                <input type="text" id="story-1-a1" name="story-3-a1" class="form-control">
                <label for="story-3-a2">2) Noun (Person / Thing) </label>
                <input type="text" id="story-1-a2" name="story-3-a2" class="form-control">
                <label for="story-3-a3">3) Noun (Thing) </label>
                <input type="text" id="story-1-a3" name="story-3-a3" class="form-control">
                <label for="story-3-a4">4) Adjective </label>
                <input type="text" id="story-1-a4" name="story-3-a4" class="form-control">
                <label for="story-3-a5">5) Adjective </label>
                <input type="text" id="story-1-a5" name="story-3-a5" class="form-control">
				<label for="story-3-a6">6) Noun </label>
                <input type="text" id="story-1-a6" name="story-3-a6" class="form-control">
                <input type="submit" name="story-1" class="btn btn-primary btn-lg pull-right" value="next part">            </form>';
				
				
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
			$results = '<p>A Female ' . $_SESSION['story-1-a1'] . ' Entered the room. There was ' . $_SESSION['story-1-a2'] . ' in her eyes.</p><p>FEMALE: "Detective ' . $_SESSION['story-1-a3'] . ', thank you for seeing me on such a ' . $_SESSION['story-1-a4'] . ' day!"</p>
			<p>DETECTIVE: "Its alright miss ' . $_SESSION['story-1-a5'] . '. What seems to be the problem?</p>
			
			<p>FEMALE: "I was walking home, when a ' . $_SESSION['story-2-a1'] . ' came out of nowhere and stole my ' . $_SESSION['story-2-a2'] . '"!
			<p>DETECTIVE: "I am sorry to hear that. Can you describe the ' . $_SESSION['story-2-a3'] .'?"</p>
			<p>FEMALE: "Yes, the ' . $_SESSION['story-2-a4'] . ' was ' . $_SESSION['story-2-a5'] . ', weighed ' . $_SESSION['story-2-a6'] . ' pounds, had ' . $_SESSION['story-2-a7'] . ' ' . $_SESSION['story-2-a8'] . ', and had ' . $_SESSION['story-2-a9'] . ' eyes."</p>
			
			<p>DETECTIVE: "Thank you, this will help in ' . $_SESSION['story-3-a1'] . ' the ' . $_SESSION['story-3-a2'] . '. However, I will require ' . $_SESSION['story-3-a3'] . ' as a downpayment for my ' . $_SESSION['story-3-a4'] . '."</p>
			<p>FEMALE: "Yes, of course. I will ' . $_SESSION['story-3-a5'] . ' your ' . $_SESSION['story-3-a6'] . '. Thanks again Detective!"</p>
			
			<form method="post" class="form-horizontal" role="form" action="' . $_SERVER["PHP_SELF"] . '?pg=start"><input type="submit" name="story-end" class="btn btn-primary btn-lg pull-right" value="Back to Start"></form>';
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
<title>Mid Libs Detective Stories</title>
<!-- www.bootstrapcdn.com -->
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<link href="styles/style.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</head>

<body>

      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand bg-primary" href="#">Mad Libs Detective Stories</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Create A Story<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="story.php">Introduction Chapter</a></li>
                <li class="dropdown-header">The Investigation</li>
                <li><a href="#">The Investigation</a></li>
                <li><a href="#">The Investigation Part 2</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">The Finale</li>
                <li><a href="#">Finding The Culprit</a></li>
                <li><a href="#">Case Closed</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    <div class="container wrap">
        
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
    
    </div><footer class="panel-footer">this is my foot!</footer>
</body>
</html>

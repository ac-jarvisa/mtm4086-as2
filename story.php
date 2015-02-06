<?php
//clears the session if the user has already run the game
session_unset();
//starts a new session
session_start();

//this variable will be used to produce the form
$formCon = '';
//this variable will be used to produce the final story
$final = "";
$intro = '
	<div class="jumbotron" id="home">
		<h1>Magical Stories <small>Customized Storytelling</small></h1>
		<p>Everything is better with your own personal touch. Add your own flair to our stories!</p>
		<p>You have selected the story <span id="selected">Princess Blossom\'s Tea Party</span></p>
		<p><a class="btn btn-primary btn-lg" href="' . $_SERVER["PHP_SELF"] . '?pg=1" role="button">Begin Your Story</a></p>
	</div>';


if(isset ($_GET['pg'])){
	//page with instructions and allows users to begin creating the story
	$_GET['pg'] == 'begin';

	//this if statement checks which page the user is on and dynamically updates the information based on that
	if($_GET['pg'] == 1){
		$formCon = '
			<div class="alert alert-info fade in">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Hey there!</strong> Fill out each text field with an appropriate word. 
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Step One</h3>
				</div>
				<div class="panel-body">
					<form method="post" role="form" action="' . $_SERVER["PHP_SELF"] . '?pg=2">
						<label for="one">Animal</label><input type="text" name="one" id="one" class="form-control">
						<label for="two">Flavour</label><input type="text" name="two" id="two" class="form-control">
						<label for="three">Place</label><input type="text" name="three" id="three" class="form-control">
						<button type="submit" name="partOne" id="partOne" class="btn btn-primary btn pull-right">Next <span class="glyphicon glyphicon-arrow-right"></span></button>
					</form>
				</div>
			</div>
			';
	
	}else if($_GET['pg'] == 2){
		//this if statement checks to see if any of the form fields from the previous page were empty
		//if any form fields are empty the user will get sent back to the beginning
		if(isset($_POST['partOne'])){
			$_SESSION['sesOne'] = $_POST['one'];
			$_SESSION['sesTwo'] = $_POST['two'];
			$_SESSION['sesThree'] = $_POST['three'];
			//print_r($_SESSION);

			if(empty($_POST['one']) || empty($_POST['two']) || empty($_POST['three'])){
				//tells which page to go to
				header('Location: story.php?pg=begin');
			}
		}

		$formCon = '
		<div class="alert alert-info fade in">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Hey there!</strong> Fill out each text field with an appropriate word. 
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Step Two</h3>
			</div>
			<div class="panel-body">
				<form method="post" role="form" action="' . $_SERVER["PHP_SELF"] . '?pg=3">
					<label for="four">Noun</label><input type="text" name="four" id="four" class="form-control">
					<label for="five">Noun</label><input type="text" name="five" id="five" class="form-control">
					<label for="six">Onomatopoeia</label><input type="text" name="six" id="six" class="form-control">
					<button type="submit" name="partTwo" id="partTwo" class="btn btn-primary btn pull-right">Next <span class="glyphicon glyphicon-arrow-right"></span></button>
				</form>
			</div>
		</div>';

	}else if($_GET['pg'] == 3){

		if(isset($_POST['partTwo'])){
			$_SESSION['sesFour'] = $_POST['four'];
			$_SESSION['sesFive'] = $_POST['five'];
			$_SESSION['sesSix'] = $_POST['six'];
			
			if(empty($_POST['four']) || empty($_POST['five']) || empty($_POST['six'])){
				header('Location: story.php?=begin');
			}
		}

		$formCon = '
		<div class="alert alert-info fade in">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Hey there!</strong> Fill out each text field with an appropriate word. 
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Step Three</h3>
			</div>
			<div class="panel-body">
				<form method="post" role="form" action="' . $_SERVER["PHP_SELF"] . '?pg=finish">
					<label for="seven">Dessert</label><input type="text" name="seven" id="seven" class="form-control">
					<label for="eight">Name</label><input type="text" name="eight" id="eight" class="form-control">
					<label for="nine">Animal</label><input type="text" name="nine" id="nine" class="form-control">
					<button type="submit" name="partThree" id="partThree" class="btn btn-primary btn pull-right">Read Your Story <span class="glyphicon glyphicon-arrow-right"></span></button>
				</form>
			</div>
		</div>';

	}else if($_GET['pg'] == 'finish'){

		if(isset($_POST['partThree'])){
			$_SESSION['sesSeven'] = $_POST['seven'];
			$_SESSION['sesEight'] = $_POST['eight'];
			$_SESSION['sesNine'] = $_POST['nine'];
			
			if(empty($_POST['seven']) || empty($_POST['eight']) || empty($_POST['nine'])){
				header('Location: story.php?=begin');
			}
		}
		//final result of the story including all of the users custom information
		$final = '
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<p>Once upon a time, there was a little girl named Princess Blossom. Princess Blossom loved hosting tea parties for her toy <strong>' . $_SESSION['sesOne'] . 's</strong>. Today was a special day, Princess Blossom was making her very favourite <strong>' . $_SESSION['sesTwo'] . '</strong> tea!</p>
					<p>She ran to the <strong>' . $_SESSION['sesThree'] . '</strong> to find the tea, but when she arrived it was nowhere to be found. She looked all over and under and over again. What would she serve her little toy friends?</p>
					<p>Princess Blossom threw her head back and exclaimed, "How could this happen to me?!"</p>
					<p>With her head tilted back and her eyes opened wide, she noticed a <strong>' . $_SESSION['sesFour'] . '</strong> sitting on the highest shelf.</p>
					<p>"That must be where they keep the tea," She said to herself. "I know! I will climb this <strong>' . $_SESSION['sesFive'] . '</strong>, and get it myself."</p>
					<p>She climbed the <strong>' . $_SESSION['sesFive'] . '</strong>, reaching as far as she could. Suddenly, </p>
					<h1 id="loud">' . $_SESSION['sesSix'] . '</h1>
					<p>Princess Blossom had fallen to the ground.</p>
					<p>"Oh bother, I will never get to have my very favourite <strong>' . $_SESSION['sesTwo'] . '</strong> tea."</p>
					<p>She picked herself up and headed towards the door, when she kicked something across the ground.</p>
					<p>"THE TEA!" she cried with glee. Her fall had shook the <strong>' . $_SESSION['sesFour'] . '</strong> off of the shelf. </p>
					<p>She scooped up the tea and ran back to her room to set up the tea party. </p>
					<p>Everything was perfect, especially the <strong>' . $_SESSION['sesSeven'] . '</strong> her mother made for Princess Blossom to share with her guests.</p>
					<p>Everyone was in attendance, from Duke <strong>' . $_SESSION['sesEight'] . '</strong> the <strong>' . $_SESSION['sesOne'] . '</strong>, to Lady Persephone the <strong>' . $_SESSION['sesNine'] . '</strong>; it was good to see they had set aside their differences. They all sat and talked, discussing only the most important political matters (who would get a spot on the bed this week.).</p>
					<p> And they all lived happily ever after – or at least until the tea was gone.</p>
					<h2 class="fancy">The End.</h2>
				</div>
			</div>
		';

		$formCon = '<form method="post" role="form" action="' . $_SERVER["PHP_SELF"] . '">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<button type="submit" class="btn btn-block btn-primary">Restart Story <span class="glyphicon glyphicon-repeat"></span></button>
					</div>
				</div>
			</form>';
	}else if($_GET['pg'] == 'begin'){
	}

}


?>

<!DOCTYPE HTML>
<html>
<head>
<title>Magical Story</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link href="styles/style.css" rel="stylesheet" />
</head>

<body>	
	<nav class="navbar navbar-inverse">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="story.php">Magical Stories</a>
		</div>
		<div class="collapse navbar-collapse pull-right" id="navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Stories 
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Crazy Kittens</a></li>
						<li class="divider"></li>
						<li class="active"><a href="#">Princess Blossom's Tea Party</a></li>
						<li class="divider"></li>
						<li><a href="#">Unicorn Stampede</a></li>
					</ul>
				</li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</div>
	</nav>
	
	<?php
		//page with instructions and allows users to begin creating the story	
		if(isset($_GET['pg'])){
			if($_GET['pg'] == 'begin'){
				echo '<div class="alert alert-danger" role= "alert"><strong>Oh no!</strong> You have been sent back to the beginning. Always fill out all texts fields before submitting. <a href="' . $_SERVER["PHP_SELF"] . '?pg=1" class= "alert-link">Please Try Again!</a></div>';
				echo $intro;
			}
		}else{
			echo $intro;
		}
	?>

	<div>
		<?php	
			if(isset($_GET['pg'])){
				if($_GET['pg'] != 'begin'){
					echo '<div class="jumbotron" id="princess">
							<h1>Princess Blossom\'s Tea Party</h1>
						</div>';
				}
			}
		?>
	</div>

	<div class="container-fluid">
	
        <?php 
			//this loop figures out which page you are on and multiplies it by that page number to show how far you are
			if(isset($_GET['pg'])){
				$progress = round($_GET['pg']*33.3);
				//only display the progress bar on appropraite pages
				if($_GET['pg'] == 'finish' || $_GET['pg'] == 'begin'){
				}else{
					echo '
					<div class="progress block">
						<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $progress ?>" aria-valuemin="0" aria-valuemax="100" style="width:' . $progress . '%">
	        			<span>' . $progress . '%</span>
	        			</div>
        			</div>';
				}	
			}else{
				$progress = 0;	
			}
		?>
    
    
    <div class="form-group">
    	<!-- echos the dynamic information -->
		<?php
			echo $final;
		?>
		<?php
			echo $formCon;
		?>
	</div>
	<div class="footer">
		<p>Copyright &copy; Magical Stories</p>
	</div>
</div>

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="scripts/script.js"></script>
</body>
</html>
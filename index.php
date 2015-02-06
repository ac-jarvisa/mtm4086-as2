<?php
	
	session_unset();
	session_start();
	
	$currPage = '';
	$pageIntro = '';
	
	if(isset ($_GET['pg'])){
		
		
		if($_GET['pg'] == 'front'){
			$pageIntro = '
				<p class="lead">For eons the greatest of hero\'s have lived on the only way real heroes can: through song and poetry! Use the form below to craft your own song about your real/fictitious (we don\'t judge here) exploits!</p>
			';
		
			$currPage = '
				<!---------------FORM SECTION ONE--------------------------------------->
						<form class="form-horizontal" role="form" action=" index.php?pg=details1" method="post">
					
						<div class="input-group">
							<!------NAME-------------------------------->
							<span class="input-group-addon" id="basic-addon1">Name:</span>
							<input type="text" class="form-control" name="name" placeholder="Hero" aria-describedby="basic-addon1">
						</div>
						
						<div class="input-group">
							<!------EPITHET-------------------------------->
							<span class="input-group-addon" id="basic-addon1">Epithet:</span>
							<input type="text" class="form-control" name="Title" placeholder="The Heroic" aria-describedby="basic-addon1">
						</div>
						
						<div class="input-group">
							Gender:
							<div class="radio">
								<label><input type="radio" name="gender" value="man">Male</label>
							</div>
							
							<div class="radio">
								<label><input type="radio" name="gender" value="woman" checked>Female</label>
							</div>
						</div>
						
						<p>Once you\'ve entered some information above click "Start" to choose your adventurous tale!</p>
						<button type="submit" id="getStarted" name="getStarted" class="btn btn-default">Start</button>
						
						</form>
			';
		}else if($_GET['pg'] == 'details1'){
			if(isset($_POST['getStarted'])){
				$_SESSION['detailOne'] = $_POST['name'];
				$_SESSION['detailTwo'] = $_POST['Title'];
				$_SESSION['detailThree'] = $_POST['gender'];
			
				if(empty($_POST['name']) || empty($_POST['Title']) || empty($_POST['gender'])){
					header('Location: index.php?pg=front');
					}
			}
			
			$pageIntro = '
				<p class="lead"> Any good tale contains an enemy to slay. Choose your enemy, your weapon, and a method of death for your enemy (ie beheading)</p>
			';
			
			$currPage = '
				<!---------------FORM SECTION TWO--------------------------------------->
						<form class="form-horizontal" role="form" action="index.php?pg=details2" method="post">
					
						<div class="input-group">
							<!------weapon-------------------------------->
							<span class="input-group-addon" id="basic-addon1">Weapon:</span>
							<input type="text" class="form-control" name="weapon" placeholder="Sword" aria-describedby="basic-addon1">
						</div>
						
						<div class="input-group">
							<!------Rival-------------------------------->
							<span class="input-group-addon" id="basic-addon1">Enemy:</span>
							<input type="text" class="form-control" name="rival" placeholder="ManBearPig" aria-describedby="basic-addon1">
						</div>
						
						<div class="input-group">
							<!------Kill Method-------------------------------->
							<span class="input-group-addon" id="basic-addon1">Kill Method:</span>
							<input type="text" class="form-control" name="methodDeath" placeholder="Beheading" aria-describedby="basic-addon1">
						</div>
						
						<p>Continue on to the next section</p>
						<button type="submit" id="getGoing" name="getGoing" class="btn btn-default">Next</button>
						
						</form>
			';
		}else if($_GET['pg'] == 'details2'){
		
			if(isset($_POST['getGoing'])){
				$_SESSION['detailFour'] = $_POST['weapon'];
				$_SESSION['detailFive'] = $_POST['rival'];
				$_SESSION['detailSix'] = $_POST['methodDeath'];
			
				if(empty($_POST['weapon']) || empty($_POST['rival']) || empty($_POST['methodDeath'])){
					header('Location: index.php?pg=front');
					}
			}
			
			$pageIntro = '
				<p class="lead">It\'s time for the final touch. What is the outcome of your tale? Choose the treasure you gain, the name of your life long love, and number of children you had.</p>
			';
			
			$currPage = '
				<!---------------FORM SECTION THREE--------------------------------------->
						<form class="form-horizontal" role="form" action="index.php?pg=tale" method="post">
					
						<div class="input-group">
							<!------LOVER-------------------------------->
							<span class="input-group-addon" id="basic-addon1">Lover:</span>
							<input type="text" class="form-control" name="lover" placeholder="Tyra" aria-describedby="basic-addon1">
						</div>
						
						<div class="input-group">
							<!------TREASURE-------------------------------->
							<span class="input-group-addon" id="basic-addon1">Treasure:</span>
							<input type="text" class="form-control" name="treasure" placeholder="The Holy Grail" aria-describedby="basic-addon1">
						</div>
						
						<div class="input-group">
							<!------NUM KIDS-------------------------------->
							<span class="input-group-addon" id="basic-addon1"># of Kids:</span>
							<input type="text" class="form-control" name="numberKids" placeholder="7" aria-describedby="basic-addon1">
						</div>
						
						<p>Read your epic by clicking submit</p>
						<button type="submit" id="getFinished" name="getFinished" class="btn btn-default">Submit</button>
						
						</form>
			';
		}else if($_GET['pg'] == 'tale'){
		
			if(isset($_POST['getFinished'])){
				$_SESSION['detailSeven'] = $_POST['lover'];
				$_SESSION['detailEight'] = $_POST['treasure'];
				$_SESSION['detailNine'] = $_POST['numberKids'];
			
				if(empty($_POST['lover']) || empty($_POST['treasure']) || empty($_POST['numberKids'])){
					header('Location: index.php?pg=front');
					}
			}
			
			
			$pageIntro = '
				View your tale below:
			';
			
			$currPage = '
				Gather round ye children<br>
				For a tale as old as time<br>
				About the Hero' . $_SESSION['detailOne'] . '<br>
				A ' . $_SESSION['detailThree'] . ' who was fine<br><br>

				' . $_SESSION['detailOne'] . ' was quite the hero<br>
				With a ' . $_SESSION['detailFour'] . ' held up so high<br>
				When he ' . $_SESSION['detailSix'] . ' ' . $_SESSION['detailFive'] . '<br>
				I thought it\'d split the sky<br><br>
				
				He saved ' . $_SESSION['detailSeven'] . ' his lover<br>
				And took ' . $_SESSION['detailEight'] . ' as reward<br>
				Had ' . $_SESSION['detailNine'] . ' little children<br>
				A very tiny horde<br><br>
				
				But we remember fondly<br>
				The ' . $_SESSION['detailThree'] . ' who saved us all<br>
				Bless You ' . $_SESSION['detailOne'] . ' ' . $_SESSION['detailTwo'] . '<br>
				You never dropped the ball<br>';
		}
	}else{
			$pageIntro = '
				<p class="lead">For eons the greatest of hero\'s have lived on the only way real heroes can: through song and poetry! Use the form below to craft your own song about your real/fictitious (we don\'t judge here) exploits!</p>
			';
		
			$currPage = '
				<!---------------FORM SECTION ONE--------------------------------------->
						<form class="form-horizontal" role="form" action=" index.php?pg=details1" method="post">
					
						<div class="input-group">
							<!------NAME-------------------------------->
							<span class="input-group-addon" id="basic-addon1">Name:</span>
							<input type="text" class="form-control" name="name" placeholder="Hero" aria-describedby="basic-addon1">
						</div>
						
						<div class="input-group">
							<!------EPITHET-------------------------------->
							<span class="input-group-addon" id="basic-addon1">Epithet:</span>
							<input type="text" class="form-control" name="Title" placeholder="The Heroic" aria-describedby="basic-addon1">
						</div>
						
						<div class="input-group">
							Gender:
							<div class="radio">
								<label><input type="radio" name="gender" value="male">Male</label>
							</div>
							
							<div class="radio">
								<label><input type="radio" name="gender" value="female" checked>Female</label>
							</div>
						</div>
						
						<p>Once you\'ve entered some information above click "Start" to choose your adventurous tale!</p>
						<button type="submit" id="getStarted" name="getStarted" class="btn btn-default">Start</button>
						
						</form>
			';
		}
?>
<!doctype html>

<html lang="en-ca">

<head>
	<meta charset="utf-8">
	<title>A Bard's Tale</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
</head>

<body>
	<div class="container">
				<div class="row">
					<h1>Compose your own Bardic Tale!</h1>
					<div class="col-md-2">
					</div>
					
					<div class="col-md-8">
						
								<?php echo $pageIntro;?>
							
					</div>
					
					<div class="col-md-2">
					</div>
				</div>
					
				<div class="row">
				
					<div class="col-xs-2">
					</div>
					
					<div class="col-xs-8">
						<?php echo $currPage;?>
					</div>
					
					<div class="col-xs-2">
					</div>
				</div>
				
				<!--------------------------------------------PROGRESS BAR-------------------------------------------------->
				
			
				
				<!-----------------------------------------FOOTER------------------------------------------------------>
				<div class="footer">
					<div class="row">
					<div class="col-md-8">
						<p>No heroic tale generated by this site will be sung by an actual bard...unless you know a bard...in which case email us to let us know that bards still exist. We would appreciate knowing how to become official bards. </p>
					</div>
					
					<div class="col-md-4">
						
					</div>
					</div>
				</div>
	</div>
	
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="/js/bootstrap-paginator.min.js"></script>
</body

</html>
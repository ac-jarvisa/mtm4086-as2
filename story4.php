<!doctype html>

<?php 
	session_start();
	if(isset($_POST['third'])) {
		$_SESSION['post_data'] += $_POST;
		if(empty($_SESSION['post_data']['bird']) || empty($_SESSION['post_data']['tv']) || empty($_SESSION['post_data']['dede'])) {
			header("location:index.php");
		}
	}else {
		header("location:index.php");
	}
?>

<html lang="en-ca">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Nick Belland">
	<meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="scripts/script.js"></script>
	<title>Mega Story</title>
</head>

<body>
	
	<div class="container-fluid">
		<nav class="navbar navbar-default">
			<img src="images/logo.gif" alt="logo" width="60px"/>
	        <div class="navbar-header">
	            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a href="#" class="navbar-brand"><img src="" alt=""/></a>
	        </div>
	        <div id="navbarCollapse" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav navbar-right">
	                <li><a href="#">HOME</a></li>
	                <li><a href="#">ABOUT</a></li>
	                <li class="active"><a href="#">STORY</a></li>
	                <li><a href="#">CONTACT</a></li>
	            </ul>
	        </div>
	    </nav>

	    <div class="jumbotron">
	    	<div class="row">
				<div class="col-md-2"></div>
	    		<div class="col-md-8">
	    			<div class="progress progress-striped active">
						<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="100" aria-valuemax="100" style="width: 100%;">
	    					<span>100%</span>
	  					</div>
					</div>
				</div>
				<div class="col-md-2"></div>
		    </div>
		    <div class="row">	
		    	<h1>Congratulations! Here is your one of a kind amazing story! <a href="index.php">Try Again?</a></h1>
		    </div>
		</div>

		<div class="grey">
			<div class="row">
			    <div class="col-md-2"></div>
			    <div class="col-md-8">
			    	<p>There once was an <?php echo $_SESSION['post_data']['animal']; ?> named <?php echo $_SESSION['post_data']['name']; ?>.  <?php echo $_SESSION['post_data']['name']; ?> loved <?php echo $_SESSION['post_data']['activity']; ?>.  Especially when they played with their best friend who was a <?php echo $_SESSION['post_data']['bird']; ?>.  After <?php echo $_SESSION['post_data']['activity']; ?>, <?php echo $_SESSION['post_data']['name']; ?>  would watch either <?php echo $_SESSION['post_data']['movie']; ?> or <?php echo $_SESSION['post_data']['tv']; ?>.  Until one day <?php echo $_SESSION['post_data']['name']; ?>'s mom told them to grab their favourite <?php echo $_SESSION['post_data']['colour']; ?> dressy clothes and go get a job as a <?php echo $_SESSION['post_data']['job']; ?>.  Did <?php echo $_SESSION['post_data']['name']; ?> end up getting a job you ask? <?php echo $_SESSION['post_data']['dede']; ?></p>
			    </div>
			    <div class="col-md-2"></div>
			</div>
		</div>
	</div>

</body>

<?php
	session_unset();
?>

</html>
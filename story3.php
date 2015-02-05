<!doctype html>

<?php 
	session_start();
	if(isset($_POST['second'])) {
		$_SESSION['post_data'] += $_POST;
		if(empty($_SESSION['post_data']['animal']) || empty($_SESSION['post_data']['job']) || empty($_SESSION['post_data']['movie'])) {
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
						<div class="progress-bar" role="progressbar" aria-valuenow="66" aria-valuemin="66" aria-valuemax="100" style="width: 66%;">
		    				<span>66%</span>
		  				</div>
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>

	    	<div class="row">
		    	<h1>This is the last step!  Just fill out these last three fields and you get your one of a kind story!</h1>
		    </div>
		</div>

		<div class="grey">
			<form class="form-horizontal" role="form" action="story4.php" method="post">
	            <div class="form-group">
	                <div class="col-sm-4">
	                    <input type="text" id="bird" name="bird" class="form-control" placeholder="Enter a type of bird...">
	                </div>
	                <div class="col-sm-4">
	                    <input type="text" id="tv" name="tv" class="form-control" placeholder="Enter your favourite tv show...">
	                </div>
	                <div class="col-sm-4">
	                    <input type="text" id="dede" name="dede" class="form-control" placeholder="Do you love dede? ( Yes or No )...">
	                </div>
	            </div>
	            <div class="col-sm-4"></div>
	            <button type="submit" id="third" name="third" class="btn btn-default col-sm-4">Next</button>
	            <div class="col-sm-4"></div>
	        </form>
	    </div>
	</div>

</body>

</html>
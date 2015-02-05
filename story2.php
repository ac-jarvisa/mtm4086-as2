<!doctype html>

<?php 
	session_start();
	if(isset($_POST['first'])) {
		$_SESSION['post_data'] = $_POST;
		if(empty($_SESSION['post_data']['name']) || empty($_SESSION['post_data']['colour']) || empty($_SESSION['post_data']['activity'])) {
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
						<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="33" aria-valuemax="100" style="width: 33%;">
		    				<span>33%</span>
		  				</div>
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>

		    <div class="row">
		    	<h1>Great start!  Only a few more fields on this page!</h1>
			</div>
		</div>

		<div class="grey">
			<form class="form-horizontal" role="form" action="story3.php" method="post">
    	        <div class="form-group">
    	            <div class="col-sm-4">
    	                <input type="text" id="animal" name="animal" class="form-control" placeholder="Enter your favourite animal...">
    	            </div>
    	            <div class="col-sm-4">
    	                <input type="text" id="job" name="job" class="form-control" placeholder="Enter your dream job...">
    	            </div>
    	            <div class="col-sm-4">
    	                <input type="text" id="movie" name="movie" class="form-control" placeholder="Enter your favourite movie...">
       		        </div>
            	</div>
            	<div class="col-sm-4"></div>
            	<button type="submit" id="second" name="second" class="btn btn-default col-sm-4">Next</button>
            	<div class="col-sm-4"></div>
        	</form>
		</div>
	</div>

</body>

</html>
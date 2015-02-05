<!doctype html>

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
						<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 4%;">
		    				<span>0%</span>
		  				</div>
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>

		    <div class="row">
		    	<h1>Create your own story!  All you have to do is enter some keywords and guess what?  We will do the rest!</h1>
			</div>
		</div>

		<div class="grey">
			<form class="form-horizontal" role="form" action="story2.php" method="post">
	            <div class="form-group">
	                <div class="col-sm-4">
	                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name...">
	                </div>
	                <div class="col-sm-4">
	                    <input type="text" id="colour" name="colour" class="form-control" placeholder="Enter your favourite colour...">
	                </div>
	                <div class="col-sm-4">
	                    <input type="text" id="activity" name="activity" class="form-control" placeholder="Enter your favourite activity...">
	                </div>
	            </div>
	            <div class="col-sm-4"></div>
	            <button type="submit" id="first" name="first" class="btn btn-default col-sm-4">Next</button>
	            <div class="col-sm-4"></div>
	        </form>
	    </div>
	</div>

</body>

</html>
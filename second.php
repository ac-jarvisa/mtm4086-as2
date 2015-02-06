<?php
 
session_start();

if(isset($_POST['charname'])) {
	$_SESSION['charname'] = $_POST['charname'];
}

if(isset($_POST['hobbyname'])) {
 	$_SESSION['hobbyname']  = $_POST['hobbyname'];
}

if(isset($_POST['placename'])) {
 	$_SESSION['placename'] = $_POST['placename'];
}

if(isset($_SESSION['schoolname'])) {
 	$school=$_SESSION['schoolname'];
}

if(isset($_SESSION['dislikething'])) {
 	$dislike=$_SESSION['dislikething'];
}

if(isset($_SESSION['favoritething'])) {
 	$fav=$_SESSION['favoritething'];
}

echo $_SESSION['charname'];

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 2</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Ubuntu:700' rel='stylesheet' type='text/css'>
<link href="styles/styles.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>

<body>
 
<div class="container-fluid">
	<div class="page-header">
    	<h1>Storyteller</h1>
    </div>
    
    <nav>
    	<ul class="nav nav-tabs nav-justified">
        	<li><a href="#">Personal</a></li>
            <li class="active"><a href="#">Like/dislike</a></li>
            <li><a href="#">Random</a></li>
            <li><a href="#">Result</a></li>
        </ul>
    </nav>
    
    <div class="paragraph1">	
       <h4>Having a stress at work? Relax! Success is failure turned inside out. The silver tint of the clouds of doubt, and you never can tell how close you are. It may be near when it seems afar. So stick to the fight when you're hardest hit. It's when things seem worst that you must not quit. Take a deep breath, and let's play storyteller. Answer the questions below and see what your story is about today!</h4>
              
    </div>
	
    <div class="progress">
      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
        30%
      </div>
	</div>
    
  <div>
    	<h2>Please fill in this form</h2>
        <form class="form-horizontal" method="post" action="third.php" role="form" id="secondpage">
        	<div class="form-group">
            	<label for="schoolname" class="col-sm-3">School:</label>
                <div class="col-sm-9"><input type="text" class="form-control" id="schoolname" name="schoolname" value="<?php  if(isset($school)) {echo $school;} ?>" ></div>
            </div>
            
            <div class="form-group">
            	<label for="dislikething" class="col-sm-3">Dislike:</label>
                <div class="col-sm-9"><input type="text" class="form-control" id="dislikething" name="dislikething" value="<?php  if(isset($dislike)) {echo $dislike;} ?>" ></div>
            </div>
            
            <div class="form-group">
            	<label for="favoritething" class="col-sm-3">Favourite thing:</label>
                <div class="col-sm-9"><input type="text" class="form-control" id="favoritething" name="favoritething" value="<?php  if(isset($fav)) {echo $fav;} ?>" ></div>
            </div>
        
       
       <div class="form-group">
				<div class="col-sm-3"></div>               
                <div class="col-sm-9"><input type="submit" value="Next" class="pull-right btnwidth btn btn-primary btn-lg btn-block" name="next2btn" id="next2btn" ></div>
            	
          </div>
        
        </form>
    </div>

</div>    
</body>
</html>
<?php
 
session_start();

if(isset($_POST['schoolname'])) {
 	$_SESSION['schoolname'] = $_POST['schoolname'];
}

if(isset($_POST['dislikething'])) {
 	$_SESSION['dislikething'] = $_POST['dislikething'];
}

if(isset($_POST['favoritething'])) {
 	$_SESSION['favoritething'] = $_POST['favoritething'];
}

if(isset($_SESSION['coolnumbers'])) {
 	$num=$_SESSION['coolnumbers'];
}

if(isset($_SESSION['lovegirlwith'])) {
 	$girl=$_SESSION['lovegirlwith'];
}

if(isset($_SESSION['justate'])) {
 	$ate=$_SESSION['justate'];
}

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
            <li><a href="#">Like/dislike</a></li>
            <li class="active"><a href="#">Random</a></li>
            <li><a href="#">Result</a></li>
        </ul>
    </nav>
    
    <div class="paragraph1">	
       <h4>Having a stress at work? Relax! Success is failure turned inside out. The silver tint of the clouds of doubt, and you never can tell how close you are. It may be near when it seems afar. So stick to the fight when you're hardest hit. It's when things seem worst that you must not quit. Take a deep breath, and let's play storyteller. Answer the questions below and see what your story is about today!</h4>
              
    </div>

	<div class="progress">
      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
        70%
      </div>
	</div>

  <div>
    	<h2>Please fill in this form</h2>
        <form class="form-horizontal" method="post" action="last.php" role="form" id="secondpage">
        	<div class="form-group">
            	<label for="coolnumbers" class="col-sm-3">Whatever numbers:</label>
                <div class="col-sm-9"><input type="text" class="form-control" id="coolnumbers" name="coolnumbers" value="<?php  if(isset($num)) {echo $num;} ?>" ></div>
            </div>
            
            <div class="form-group">
            	<label for="lovegirlwith" class="col-sm-3">Friend that you hate the most:</label>
                <div class="col-sm-9"><input type="text" class="form-control" id="lovegirlwith" name="lovegirlwith" value="<?php  if(isset($girl)) {echo $girl;} ?>" ></div>
            </div>
            
            <div class="form-group">
            	<label for="justate" class="col-sm-3">Just ate:</label>
                <div class="col-sm-9"><input type="text" class="form-control" id="justate" name="justate" value="<?php  if(isset($ate)) {echo $ate;} ?>" ></div>
            </div>
        
        <div class="form-group">
				<div class="col-sm-3"></div>               
                <div class="col-sm-9"><input type="submit" value="Next" class="pull-right btnwidth btn btn-primary btn-lg btn-block" name="next3btn" id="next3btn" ></div>
            	
          </div>
        
        </form>
    </div>

</div>    
</body>
</html>
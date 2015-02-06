<?php


session_start();

if(isset($_SESSION['charname'])) {
	 $name=$_SESSION['charname'];
}

if(isset($_SESSION['hobbyname'])) {
 	$hobby=$_SESSION['hobbyname'];
}

if(isset($_SESSION['placename'])) {
 	$place=$_SESSION['placename'];
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
    	<h1><strong>Storyteller</strong></h1>
    </div>
    
    <nav>
    	<ul class="nav nav-tabs nav-justified">
        	<li class="active"><a href="#">Personal</a></li>
            <li><a href="#">Like/dislike</a></li>
            <li><a href="#">Random</a></li>
            <li><a href="#">Result</a></li>
        </ul>
    </nav>
    
    <div class="paragraph1">	
       <h4>Having a stress at work? Relax! Success is failure turned inside out. The silver tint of the clouds of doubt, and you never can tell how close you are. It may be near when it seems afar. So stick to the fight when you're hardest hit. It's when things seem worst that you must not quit. Take a deep breath, and let's play storyteller. Answer the questions below and see what your story is about today!</h4>
              
    </div>
    <div class="progress">
  		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%; color:blue; margin-left:10px;">
    0%
  </div>
</div>
    
    <div>
    	<h2>Please fill in this form</h2>
        <form class="form-horizontal" method="post" action="second.php" role="form" id="firstpage">
        	<div class="form-group">
            	<label for="charname" class="col-sm-3">Name:</label>
                <div class="col-sm-9"><input type="text" class="form-control" id="charname" name="charname" value="<?php  if(isset($name)) {echo $name;} ?>" ></div>
            </div>
            
            <div class="form-group">
            	<label for="hobbyname" class="col-sm-3">Hobby:</label>
                <div class="col-sm-9"><input type="text" class="form-control" id="hobbyname" name="hobbyname" value="<?php  if(isset($hobby)) {echo $hobby;} ?>" ></div>
            </div>
            
            <div class="form-group">
            	<label for="placename" class="col-sm-3">Live in:</label>
                <div class="col-sm-9"><input type="text" class="form-control" id="placename" name="placename" value="<?php  if(isset($place)) {echo $place;} ?>" ></div>
            </div>
          <div class="form-group">
				<div class="col-sm-3"></div>               
                <div class="col-sm-9"><input type="submit" value="Next" class="pull-right btnwidth btn btn-primary btn-lg btn-block" name="next1btn" id="next1btn" ></div>
            	
          </div>
        </form>
    </div>
    
	    
		
			
		
</div>


</body>
</html>
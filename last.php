<?php
 
session_start();

if(isset($_POST['coolnumbers'])) {
 	$_SESSION['coolnumbers'] = $_POST['coolnumbers'];
}

if(isset($_POST['lovegirlwith'])) {
 	$_SESSION['lovegirlwith'] = $_POST['lovegirlwith'];
}

if(isset($_POST['justate'])) {
 	$_SESSION['justate'] = $_POST['justate'];
}

if(isset($_SESSION['charname'])) {
	 $name=$_SESSION['charname'];
}

if(isset($_SESSION['hobbyname'])) {
 	$hobby=$_SESSION['hobbyname'];
}

if(isset($_SESSION['placename'])) {
	$place=$_SESSION['placename'];
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

if(isset($_SESSION['lovegirlwith'])) {
 	$girl=$_SESSION['lovegirlwith'];
}

if(isset($_SESSION['justate'])) {
 	$ate=$_SESSION['justate'];
}

if(isset($_SESSION['coolnumbers'])) {
 	$num=$_SESSION['coolnumbers'];
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
            <li><a href="#">Random</a></li>
            <li class="active"><a href="#">Result</a></li>
        </ul>
    </nav>
    
    <div class="paragraph1">	
       <h4>Having a stress at work? Relax! Success is failure turned inside out. The silver tint of the clouds of doubt, and you never can tell how close you are. It may be near when it seems afar. So stick to the fight when you're hardest hit. It's when things seem worst that you must not quit. Take a deep breath, and let's play storyteller. Answer the questions below and see what your story is about today!</h4>
              
    </div>
 
 	<div class="progress">
      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
        100%
      </div>
	</div>
 
 <div class="col-sm-12" id="story">
	<blockquote class="blockquote">
    	<p>Once upon a time, in a land not so far away from <strong><?php echo $place ?></strong> lived a person named, <strong><?php echo $name ?></strong>. One of <?php echo $name ?>'s hobbies is <strong><?php echo $hobby ?></strong>. <?php echo $name ?> went to <strong><?php echo $school ?></strong> and finally graduated after 10 years. <?php echo $name ?> doesn't really like <strong><?php echo $dislike ?></strong> because most of the people in this world like it a lot. There's one thing that <?php echo $name ?> likes, which is <strong><?php echo $fav ?></strong>. <?php echo $name ?> went out for dinner with a friend named <strong><?php echo $girl ?></strong> last night and they ate <strong><?php echo $ate ?></strong>. After dinner, they went to pet shop and bought <strong><?php echo $num ?></strong> kittens to live with. They went home and live happily ever after.</p>
	</blockquote>
    
    <form class="form-horizontal" method="post" action="reset.php" role="form" id="last">
		 <div class="form-group">
				<div class="col-sm-3"></div>               
                <div class="col-sm-9"><input type="submit" value="New Story" class="pull-right btnwidth btn btn-primary btn-lg btn-block" name="lastbtn" id="lastbtn" ></div>
    </form>
</div>

</div>    
</body>
</html>
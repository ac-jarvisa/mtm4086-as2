<!doctype html>
<html lang="en-ca">
<head>
<meta charset="utf-8">
<title>DinoLand</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styles/styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>
<body>
	<div id="wrapper" class="container-fluid">
	<div class="jumbotron">
		<h1>Story Bout A Dino</h1>
			

                <?php
					$start = '
					<div class="progress progress-striped">
   			 <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
       			 <span class="prog">0%</span>
  			 </div>
			</div>
						<p>Go!</p>
						<form role="form" method="post" action="' . $_SERVER["PHP_SELF"] . '?pg=first">
						  <input type="submit" name="btn-start" class="btn btn-lg btn-success" value="Start">
						</form>
						
						';
					
					//First page of fields
					$first = '
						<div class="progress progress-striped">
   			 <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 33%;">
       			 <span class="prog">33%</span>
  			 </div>
			</div>
						
						<form role="form" method="post" action="' . $_SERVER["PHP_SELF"] . '?pg=second">
							<div class="form-group">
								<label for="dino">Type of Dinosaur</label>
								<input type="text" id="dino" name="dino" class="form-control" value="">
							</div>
							
							<div class="form-group"> 
								<label for="name">A boys name</label>
								<input type="text" id="name" name="name" class="form-control" value="">
								
							</div>
							<div class="form-group">
								<label for="celeb">A Celebrity</label>
								<input type="text" id="celeb" name="celeb" class="form-control" value="">
								
							</div>
						  <input type="submit" name="btn-first" class="btn btn-success" value="Next">
							
						</form>
					';
					
					//Second page of fields
					$second = '
						<div class="progress progress-striped">
   			 <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
       			 <span class="prog">66%</span>
  			 </div>
			</div>
			
						<form role="form" method="post" action="' . $_SERVER["PHP_SELF"] . '?pg=third">
							<div class="form-group">
								<label for="job">An Occupation</label>
								<input type="text" id="job" name="job" class="form-control" value="">
							</div>
							
							<div class="form-group">
								<label for="fight">A type of fighting</label>
								<input type="text" id="fight" name="fight" class="form-control" value="">
							</div>
							
							<div class="form-group">
								<label for="store">A Hardware Store</label>
								<input type="text" id="store" name="store" class="form-control" value="">
							</div>
							
						  <input type="submit" name="btn-second" class="btn btn-success" value="Next">
						</form>
					';
					
					//Third page of fields
					$third = '
						<div class="progress progress-striped">
   				 <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
       			 <span class="prog">100%</span>
  				 </div>
				</div>
			
					   <form role="form" method="post" action="' . $_SERVER["PHP_SELF"] . '?pg=end">
							<div class="form-group">
								<label for="tool">A tool</label>
								<input type="text" id="tool" name="tool" class="form-control" value="">
							</div>
							
							<div class="form-group">
								<label for="body">A body part</label>
								<input type="text" id="body" name="body" class="form-control" value="">
							</div>
							
							<div class="form-group">
								<label for="weapon">A weapon</label>
								<input type="text" id="weapon" name="weapon" class="form-control" value="">
							</div>
							<input type="submit" name="btn-third" class="btn btn-success" value="Submit!">
						</form>
					';
					
					
					//Story Page
					$end = '
					
						<h1>Dino Land - Part I</h1>
						
						
						<p>Once upon a time there was a ______ named ______ who was the king of the world, he thought he was better than everybody else until ______ came along and started to steal his fame. After a year of competing with such a famous celebrity, he thought it was time to destroy them. He hired a ______ who proceeded to teach him ______ on his spare time. Then the day had come for him to attack, he went to ______ and bought a ______, and the ______ of a giraffe, once he got home he found his enemy dead in the village with a ______ in his hand. The End. </p>
						
						
						<form role="form" method="post" action="' . $_SERVER["PHP_SELF"] . '">
							  <input type="submit" name="btn-restart" class="btn btn-lg btn-danger" value="Restart!">
						</form>
					';
					
					
					session_start();
					if(isset($_POST['btn-start'])){	
						echo $first;	
							
					}else if(isset($_POST['btn-first'])){
						
						
						$_SESSION['words'] = $_POST;
						if(($_SESSION['words']['dino'] =='') || ($_SESSION['words']['name'] == '') || ($_SESSION['words']['celeb'] == '')) {
							//go back to first page if there are blank fields
							header('location: story.php');
							
						}else{
							//if all is correct go to second page
							echo $second;
						}
					
					}else if(isset($_POST['btn-second'])){
						
						
						$_SESSION['words'] += $_POST;
						if(($_SESSION['words']['job'] == '') || ($_SESSION['words']['fight'] == '') || ($_SESSION['words']['store'] == '')) {
							//go back to first page if there are blank fields
							header('location: story.php');
							
						}else{
							//if all is correct go to third page
							echo $third;
						}
					
					}else if(isset($_POST['btn-third'])){
						
						
						$_SESSION['words'] += $_POST;
						if(($_SESSION['words']['tool'] == '') || ($_SESSION['words']['body'] == '') || ($_SESSION['words']['weapon'] == '')) {
							//go back to first page if there are blank fields
							header('location: story.php');
							
						}else{
							//if all is correct go to last page
							echo $end;
						}
						
					}else if(isset($_POST['btn-restart'])){
						//go back to first page if restart button is clicked
						header('location: story.php');	
						
						//session destroy to get rid of field entries
						session_destroy(); 

					}else{
						echo $start;
					}
				?>
	</div>
	</div>
</body>
</html>
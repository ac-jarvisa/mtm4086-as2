<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta="viewport" content="width=device-width, initial-scale=1">
	<title>Create Your Own</title>
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>

<body>
	<div id="wrapper" class="container-fluid">
		<div class="jumbotron">
			<h1>Create Your Own Hero Story</h1>
			

                <?php
					$start = '
						<div class="progress">
								<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
								<span>0%</span>
								</div>
						</div>
						<p style="font-size: 30px;">Get started on your story!</p>
						<img src="img.jpg" class="img-responsive" style="padding-bottom: 20px;">
						<form role="form" method="post" action="' . $_SERVER["PHP_SELF"] . '?pg=partone">
						  <input type="submit" name="btn-start" class="btn btn-block btn-danger" value="Start">
						</form>
						
					';

					$partone = '
						<div class="progress">
								<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="33" aria-valuemin="33" aria-valuemax="100" style="width: 33%;">
								<span>33%</span>
								</div>
						</div>
                        <p style="font-size: 30px;">Part One!</p>
						
						<form role="form" method="post" action="' . $_SERVER["PHP_SELF"] . '?pg=parttwo ">
							<div class="form-group">
								<label for="thing">Plural Thing:</label>
								<input type="text" id="thing" name="thing" class="form-control" value="">
							</div>
							<div class="form-group"> 
								<label for="awesome-name">Awesome Name:</label>
								<input type="text" id="awesome-name" name="awesome-name" class="form-control" value="">
								
							</div>
							<div class="form-group">
								<label for="adjective">Adjective:</label>
								<input type="text" id="adjective" name="adjective" class="form-control" value="">
								
							</div>
						  <input type="submit" name="btn-partone" class="btn btn-block btn-danger" value="Next">
							
						</form>
					';
					
					$parttwo = '
						<div class="progress">
								<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="66" aria-valuemin="66" aria-valuemax="100" style="width: 66%;">
								<span>66%</span>
								</div>
						</div>
						
						<p style="font-size: 30px;">Part Two!</p>
						<form role="form" method="post" action="' . $_SERVER["PHP_SELF"] . '?pg=partthree ">
							<div class="form-group">
								<label for="weapon">Weapon:</label>
								<input type="text" id="weapon" name="weapon" class="form-control" value="">
							</div>
							<div class="form-group">
								<label for="another-awesome-name">Another Awesome Name:</label>
								<input type="text" id="another-awesome-name" name="another-awesome-name" class="form-control" value="">
							</div>
							<div class="form-group">
								<label for="verb">Number Larger Than One:</label>
								<input type="text" id="number" name="number" class="form-control" value="">
							</div>
						  <input type="submit" name="btn-parttwo" class="btn btn-block btn-danger" value="Next">
						</form>
					';
					
					$partthree = '
						<div class="progress">
								<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="99" aria-valuemin="99" aria-valuemax="100" style="width: 99%;">
								<span>99%</span>
								</div>
						</div>
						<p style="font-size: 30px;">Part Three!</p>
					   <form role="form" method="post" action="' . $_SERVER["PHP_SELF"] . '?pg=story ">
							<div class="form-group">
								<label for="another-adjective">Another Adjective:</label>
								<input type="text" id="another-adjective" name="another-adjective" class="form-control" value="">
								<!-- the default for form-control inside of a form-group is a 100% (responsive) block form element -->
							</div>
                            <div class="form-group">
								<label for="food">Favourite Food:</label>
								<input type="text" id="food" name="food" class="form-control" value="">
								<!-- the default for form-control inside of a form-group is a 100% (responsive) block form element -->
							</div>
							<div class="form-group">
								<label for="animal">Rediculous Animal Plural:</label>
								<input type="text" id="animal" name="animal" class="form-control" value="">
								<!-- the default for form-control inside of a form-group is a 100% (responsive) block form element -->
							</div>
							<input type="submit" name="btn-partthree" class="btn btn-block btn-danger" value="Submit!">
						</form>
					';
					
					$story = '
					
						<h1>Story Time!</h1>
						<div class="progress">
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin=100" aria-valuemax="100" style="width: 100%;">
								<span>100%</span>
								</div>
						</div>
                        <p>And voila! Your story is complete!</p> 
						<p>In a world where ["thing"] no longer exists, the dawn of a new hero is approaching. And his name is ["awesome-name"]. With his futuristic ["adjective"] ["weapon"] and his trusty sidekick ["another-awesome-name"] , they will visit ["number"] planets. They will travel thougout the galaxy fighting ["another-adjective"] monsters in search of ["food"]and ["animal"].</p>
						<form role="form" method="post" action="' . $_SERVER["PHP_SELF"] . '">
						  <input type="submit" name="btn-new" class="btn btn-block btn-danger" value="New">
						</form>
					';
					
					
					session_start();
					if(isset($_POST['btn-start'])){	
						echo $partone;
							
							
					}else if(isset($_POST['btn-partone'])){
						
						
						$_SESSION['secret_sauce'] = $_POST;
						if(($_SESSION['secret_sauce']['thing'] =='') || ($_SESSION['secret_sauce']['awesome-name'] == '') || ($_SESSION['secret_sauce']['adjective'] == '')) {
							header('location: create.php');
							//echo $start;
							
						}else{
							echo $parttwo;
						}
						
					}else if(isset($_POST['btn-parttwo'])){
						
						
						$_SESSION['secret_sauce'] += $_POST;
						if(($_SESSION['secret_sauce']['weapon'] == '') || ($_SESSION['secret_sauce']['another-awesome-name'] == '') || ($_SESSION['secret_sauce']['number'] == '')) {
							header('location: create.php');
							//echo $start;
						}else{
							echo $partthree;
						}
						
					}else if(isset($_POST['btn-partthree'])){
						
						
						$_SESSION['secret_sauce'] += $_POST;
						if(($_SESSION['secret_sauce']['another-adjective'] == '') || ($_SESSION['secret_sauce']['food'] == '') || ($_SESSION['secret_sauce']['animal'] == '')) {
							header('location: create.php');
							//echo $start;
						}else{
							echo $story;
						}
						
					}else if(isset($_POST['btn-new'])){
						header('location: create.php');	
						//echo $start;
						session_destroy(); 

					}else{
						echo $start;
					}
				?>
		</div>
	</div>
</body>
</html>

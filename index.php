<?php
    session_start();
?>

<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Story</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		
		<style>
			input { width: 22.5%; margin: 15px 1%; }
		</style>
		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <div class="container-fluid">
        
            
            
            <header class="row">
	            <div class="col-lg-3"></div>
                <h1 class="col-lg-6 jumbotron">Spooky Scary Story</h1>
                <div class="col-lg-3"></div>
            </header>
			
			<div class="row">
				<div class="col-lg-3"></div>
					<div class="progress col-lg-6">
					<?php
						if(isset($_GET['pg'])){
							$progress = round($_GET['pg']*25);
						}else{
							$progress = 0;	
						}
					 ?>
						<div class="progress-bar active progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $progress; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $progress; ?>%">
							<span><?php echo $progress; ?>%</span>
						</div>
						
					</div>
				<div class="col-lg-3"></div>
			</div>
            
            <div class="row">
	            <div class="col-lg-3"></div>
                <div class="col-lg-6 ">
                	<?php
                        if(isset($_GET['pg'])) {
						
							$pgnum = $_GET['pg'];
						
                        	if($pgnum == 1) {
								echo 
								"<form method='post' action='index.php?pg=2'>
								<input type='text' name='name1' id='name1' placeholder='Name' />
								<input type='text' name='object1' id='object1' placeholder='Object' />
								<input type='text' name='adjective1' id='adjective1' placeholder='Adjective' />
								<input type='submit' id='btn1' name='btn1' />
								</form>";
							}
							
							else if($pgnum == 2) {
								echo 
								"<form method='post' action='index.php?pg=3'>
								<input type='text' name='bodypart1' id='bodypart1' placeholder='Body Part' />
								<input type='text' name='name2' id='name2' placeholder='Name' />
								<input type='text' name='object2' id='object2' placeholder='Object' />
								<input type='submit' id='btn2' name='btn2' />
								</form>";
							}
							
							else if($pgnum == 3) {
								echo 
								"<form method='post' action='index.php?pg=4'>
								<input type='text' name='verb1' id='verb1' placeholder='Verb' />
								<input type='text' name='adverb1' id='adverb1' placeholder='Adverb' />
								<input type='text' name='day1' id='day1' placeholder='Weekday' />
								<input type='submit' id='btn3' name='btn3' />
								</form>";
							}
							
							else {
								echo "Down the street in old man ".$_SESSION['name1']."'s house, A spooky scary ".$_SESSION['object1']." roamed the house. It had ".$_SESSION['adjective1']." ".$_SESSION['bodypart1']." and a bushy tail. One day, ".$_SESSION['name2']." snuck into the house. They found something spookier and scarier than they had ever seen before. They found a rusty ".$_SESSION['object2']." hanging from the ceiling. ".$_SESSION['name2']." grabbed the ".$_SESSION['object2']." when suddenly the ".$_SESSION['object1']." ".$_SESSION['verb1']." and ".$_SESSION['adverb1']." devoured them. That was the last Taco ".$_SESSION['day1']." that ".$_SESSION['name2']." ever had. Fin.";
								
								echo "<a href='index.php?pg=1'><button>Redo the Spooking</button></a>";
							}
                        }
						else {
							echo "<h2>Welcome to the Spooky Scary Storytelling Experience!</h2><a href='index.php?pg=1'><button>Begin the Spooking</button></a>";
						}
						
						if(isset($_POST['btn1'])) {
							$_SESSION['name1'] = $_POST['name1'];
							$_SESSION['object1'] = $_POST['object1'];
							$_SESSION['adjective1'] = $_POST['adjective1'];
						} else if(isset($_POST['btn2'])) {
							$_SESSION['bodypart1'] = $_POST['bodypart1'];
							$_SESSION['name2'] = $_POST['name2'];
							$_SESSION['object2'] = $_POST['object2'];
						} else if(isset($_POST['btn3'])) {
							$_SESSION['verb1'] = $_POST['verb1'];
							$_SESSION['adverb1'] = $_POST['adverb1'];
							$_SESSION['day1'] = $_POST['day1'];
						}
						
                    ?>
                </div>
                <div class="col-lg-3"></div>
            </div>
    	</div>
    </body>
</html>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Stories</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link href="styles/style.css" rel="stylesheet">
<script src="scripts/java.js"></script>
</head>

<body>

<?php
//start the session
session_start();

//these if statements are for the redirect, it asks the current page number and if the form fields are empty if so redirects to the first page
if (isset($_GET['pg']) && $_GET['pg'] == 2){
	
if($_POST['verb1'] == "" || $_POST['adj1'] == "" || $_POST['place1'] == ""){	
	header("location: index.php");

}else{
	
}
};

if (isset($_GET['pg']) && $_GET['pg'] == 3){
	
if($_POST['animal1'] == "" || $_POST['food'] == "" || $_POST['hate'] == ""){	
	header("location: index.php");

}else{
	
}
};
if (isset($_GET['pg']) && $_GET['pg'] == 4){
	
if($_POST['noun1'] == "" || $_POST['program'] == "" || $_POST['number'] == ""){	
	header("location: index.php");

}else{
	
}
};
?>
<div class="container">
        <div class="jumbotron">
        	<h1>Story Time! <small id="subheader">Do you like stories?</small></h1>
            <h3>Fill in the blanks!</h3>
        </div>
        
        <nav>
            <ul class="nav nav-tabs nav-divider">
                <li><a href="#">Stories</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Buy</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>        
    	<div class="row" id="toprow">
        	<div class="col-xs-4" id="img1"><h3>wow</h3></div>
            
        	<div class="col-xs-4" id="img2"><h3>Stories</h3></div>
                        
        	<div class="col-xs-4" id="img3"><h3>Much tale</h3></div>
                                             
	</div>
<?php

					//saves the form data in session	
					 if (isset($_POST['btnSubmit'])) { 
						 $_SESSION['verb1'] = $_POST['verb1'];
						 $_SESSION['adj1'] = $_POST['adj1'];
						 $_SESSION['place1'] = $_POST['place1'];
					 						 						 
						 } 	
					 if (isset($_POST['btnSubmit2'])) { 
						 $_SESSION['animal1'] = $_POST['animal1'];						 
						 $_SESSION['food'] = $_POST['food'];
						 $_SESSION['hate'] = $_POST['hate'];						 						 						 						 
						 }if (isset($_POST['btnSubmit3'])) { 
						 $_SESSION['noun1'] = $_POST['noun1'];
						 $_SESSION['program'] = $_POST['program'];
						 $_SESSION['number'] = $_POST['number'];						 						 						 						 
			}  							
?>
        
        <div class="progress">
        <?php
		//multiplies the page number by 25 for the progress bar
			if(isset($_GET['pg'])){
				$progress = round($_GET['pg']*25);							
			}else{
				$progress = 0;	
			}
		
		 ?>
        	<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $progress; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $progress; ?>%">
            	<span><?php echo $progress; ?>%</span>
            </div>
        </div>
                <div class="row main">
                        <div class="col-md-3">                     
                        
                        
                        </div>
                        <div class="col-md-6">
						<?php
						//echos our different forms based on which page you are on
			if(isset($_GET['pg'])){						
								if($_GET['pg'] == 1){
									echo "
            				<form name='form1' id='form1' action= " . $_SERVER["PHP_SELF"] . '?pg=2' . " method='post'>
                                        <div class='form-group'>
                                            <label for='name'>Present Tense Verb:</label>
                                            <input type='text' id='verb1' name='verb1' class='form-control'>
											
                                            <label for='adj1'>Adverb:</label>
                                            <input type='text' id='adj1' name='adj1' class='form-control'>
																						
                                            <label for='place1'>Place:</label>
                                            <input type='text' id='place1' name='place1' class='form-control'>											
											
										
                                        </div>
								  <input type='submit' id='btnSubmit' name='btnSubmit' class='button' value='next' />		
                                </form>									
									";	
								}								
								if($_GET['pg'] == 2){
									echo "
            				<form name='form2' id='form2' action= " . $_SERVER['PHP_SELF'] . '?pg=3' . " method='post'>
                                        <div class='form-group'>

                                            <label for='animal1'>Animal:</label>
                                            <input type='text' id='animal1' name='animal1' class='form-control'>	
											
                                            <label for='food'>A type of food:</label>
                                            <input type='text' id='food' name='food' class='form-control'>																						

                                            <label for='hate'>Someone you hate:</label>
                                            <input type='text' id='hate' name='hate' class='form-control'>											
                                        </div>
								  <input type='submit' id='btnSubmit2' name='btnSubmit2' class='button' value='next' />		
                                </form>									
									";
								}if($_GET['pg'] == 3){
									echo "
            				<form name='form3' id='form3' action= " . $_SERVER['PHP_SELF'] . '?pg=4' . " method='post'>
                                        <div class='form-group'>
										
                                            <label for='noun1'>Noun:</label>
                                            <input type='text' id='noun1' name='noun1' class='form-control'>

                                            <label for='program'>A computer program you hate:</label>
                                            <input type='text' id='program' name='program' class='form-control'>

                                            <label for='number'>A number:</label>
                                            <input type='text' id='number' name='number' class='form-control'>
																					
                                        </div>
								  <input type='submit' id='btnSubmit3' name='btnSubmit3' class='button' value='next' />		
                                </form>									
									";
								}
								if($_GET['pg'] == 4){
									echo '
									<h1>Your Story</h1>
									<p>One day there was a sad ' . $_SESSION['animal1'] . '. He was sad because there was lots of ' . $_SESSION['program'] . ' work to do. He would try to forget about ' . $_SESSION['program'] . ' by eating ' . $_SESSION['number'] . ' ' . $_SESSION['food'] . 's or by ' . $_SESSION['verb1'] . '. No matter how hard he tried, ' . $_SESSION['hate'] . ' told him he had to keep doing his ' . $_SESSION['program'] . ' work and there was no escape. He ' . $_SESSION['adj1'] . ' hated ' . $_SESSION['hate'] . ' so much that he bought a ' . $_SESSION['noun1'] . ', but that didn\'t help. One day, he plans to escape ' . $_SESSION['program'] . ' work and run away to 	' . $_SESSION['place1'] . '.	
									</p>												
									';
									
									
//									echo '<p>verb1: ' . $_SESSION['verb1'] . '</p>
//									 <p>noun1: ' . $_SESSION['adj1'] . '</p>
//									 <p>noun1: ' . $_SESSION['place1'] . '</p>								 
//									 <p>noun1: ' . $_SESSION['animal1'] . '</p>									 
//									 <p>noun1: ' . $_SESSION['noun1'] . '</p>
//									 <p>noun1: ' . $_SESSION['program'] . '</p>
//									 <p>noun1: ' . $_SESSION['number'] . '</p>
//									 <p>noun1: ' . $_SESSION['food'] . '</p>
//									 <p>noun1: ' . $_SESSION['hate'] . '</p>									 									 									 									 									 									
//									';


									echo '<a href=' . $_SERVER['PHP_SELF'] . '>new story?</a>';
								}
							}else{
								//anything else will appear on the first page
									echo '
									
									<h1>Create your own story</h1>
									<p>Fill in the blanks and create your own cool story.</p>
									<a href=' . $_SERVER['PHP_SELF'] . '?pg=1' . '>click to begin</a>';	
								}
								?>
                         </div>
                        <div class="col-md-3">

                        </div>                
                </div>

		<footer>
 			<div class="modal-footer">
            <h2 id="foothead">Awesome Stories</h2>
            </div>       
        </footer>		
</div>
<!--Sources:
http://subtlepatterns.com/
http://www.fontsquirrel.com/
http://www.morguefile.com/
-->
</body>
</html>
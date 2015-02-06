<?php
// $_POST data validation code can go here to make sure data is ok for use.
if (!isset($_SESSION)) { session_start(); }
if (isset($_POST['control']) && $_POST['control'] == 2){
if (isset($_POST["enjoy"]) &&  trim($_POST["enjoy"]) != ""){
$_SESSION['enjoy'] = htmlspecialchars(trim($_POST["enjoy"]));//avoiding the user breaking my code by submitting a special character
$error1= 0;
}
else{
$error1 = 1;
}
if (isset($_POST["strength"]) &&  trim($_POST["strength"]) != ""){
$_SESSION['strength'] = htmlspecialchars(trim($_POST["strength"]));
$error2= 0;
}
else{
$error2 = 2;
}
if (isset($_POST["weakness"]) &&  trim($_POST["weakness"]) != ""){
$_SESSION['weakness'] = htmlspecialchars(trim($_POST["weakness"]));
$error3 = 0;
}
else{
$error3 = 3;
}
if($error1 == 1 OR $error2 == 2 OR $error3 == 3){
// return page 2
$error = 1;
include("details.php");
exit();
}
}
elseif(isset($_SESSION['enjoy']) && isset($_SESSION['strength']) && isset($_SESSION['weakness'])){
}
else{
//return page2
include("details.php");
exit();
}
?>



<!doctype html>
<html lang="en-ca">
<head>
<meta charset="utf-8">
<title>Ask Madame Zora</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="styles/style3.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>



</head>

<body>
<div class="progress">
  <div class="progress-bar progress-bar-info gold" role="progressbar" aria-valuenow="66.6"
  aria-valuemin="0" aria-valuemax="100" style="width:66.6%">
  <span>PROGRESS: 66.6% YOUR FORTUNE AWAITS!</span>
  </div>
  </div>      


	<div class="container">
    	<!-- container is a fixed-width, responsive container for your site, the breakpoints are as follows:
        x-small devices / phones: <768px - container 100% width
        small devices / tablets: >= 768px - container set to 750px
        medium devices / desktops: >= 992px - container set to 970px
        large devices / desktops: > 1200px - container set to 1170px
        -->
        
  
        <h2 class="hidden-xs">ask</h2>
                <h1 class="hidden-xs">MADAME ZORA</h1>
                   <p class="nymp hidden-xs">b</p>
                  
                
    <div class="col-lg-6"></div><!--end col 6 -->
    
        <img src="images/logo.png" class="hidden-lg hidden-md hidden-sm logo" alt="Logo"><!--logo for phones-->
            <div class="formation">
                <div class="col-lg-6 pull-right place">
             
                <form role="form" method="post" action="fortune.php">
        	    <div class="form-group neg-left">
            	<label for="animal">If you were an animal, you would be a:</label>
                <input type="text" id="animal" name="animal" class="form-control <?php 
				if(isset($error1) && $error1 == 1){ echo " bad"; } else{ echo ""; } ?>" value="<?php 
				if(isset($error) && $error != ""){ echo $_POST["animal"]; }
				?>">
                
                <label for="destination">A place you would like to go:</label>
                <input type="text" id="destination" name="destination" class="form-control <?php 
				if(isset($error2) && $error2 == 2){ echo " bad"; } else{ echo ""; } ?>" value="<?php 
				if(isset($error) && $error != ""){ echo $_POST["destination"]; }
				?>">
                
                <label for="food">Your favourite food:</label>
                <input type="text" id="food" name="food" class="form-control <?php 
				if(isset($error3) && $error3 == 3){ echo " bad"; } else{ echo ""; } ?>" value="<?php 
				if(isset($error) && $error != ""){ echo $_POST["food"]; }
				?>">
                <!-- the default for form-control inside of a form-group is a 100% (responsive) block form element -->
                </div><!--end of form-group-->
            
                <input type="hidden" name="control" value="3">
                <input type="submit" class="neg-left" value="SUBMIT">
                <!-- you can also give buttons the class active or disabled -->
                </form>
        
     
        
            
            <!-- pagination numbers -->
            <ul class="pagination">
            	<li><a href="zora.php">1</a></li>
                <li><a href="details.php">2</a></li>
                <li class="active"><a href="">3</a></li>
                <li><a href="fortune.php">4</a></li
            </ul>
       
    
     </div><!--end 6 col-->
   </div><!--end of formation-->
</div><!--end of container-->

<div class="footer"><p>© Kristelle MacSween</p></div>
</body>
</html>
<?php
// $_POST data validation code can go here to make sure data is ok for use.
if (!isset($_SESSION)) { session_start(); }
if (isset($_POST['control']) && $_POST['control'] == 1){
if (isset($_POST["name"]) &&  trim($_POST["name"]) != ""){
$_SESSION['name'] = htmlspecialchars(trim($_POST["name"]));//avoiding the user breaking my code by submitting a special character
$error1= 0;
}
else{
$error1 = 1;
}
if (isset($_POST["seek"]) &&  trim($_POST["seek"]) != ""){
$_SESSION['seek'] = htmlspecialchars(trim($_POST["seek"]));
$error2= 0;
}
else{
$error2 = 2;
}
if (isset($_POST["adj"]) &&  trim($_POST["adj"]) != ""){
$_SESSION['adj'] = htmlspecialchars(trim($_POST["adj"]));
$error3 = 0;
}
else{
$error3 = 3;
}
if($error1 == 1 OR $error2 == 2 OR $error3 == 3){
// return page 1
$error = 1;
include("zora.php");
exit();
}
}
elseif(isset($_SESSION['name']) && isset($_SESSION['adj']) && isset($_SESSION['seek'])){
}
else{
//return page1
include("zora.php");
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
<link rel="stylesheet" href="styles/style2.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>



</head>

<body>
 <div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="33.333"
  aria-valuemin="0" aria-valuemax="100" style="width:33.3333%">
  <span>PROGRESS: 33.3% YOUR FORTUNE AWAITS!</span>
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
                   
           
           <!-- <img src="images/zora_1.png" class="img-responsive" alt="Zora">
            </div>-->
                
    <div class="col-lg-6"></div><!--end col 6 -->
    
        <img src="images/logo.png" class="hidden-lg hidden-md hidden-sm logo img-responsive" alt="Logo"><!--logo for phones-->
            <div class="formation">
                <div class="col-lg-6 pull-right place">
                
             
                <form role="form" method="post" action="more.php">
        	    <div class="form-group neg-left">
            	<label for="enjoy">Something you enjoy doing:</label>
                <input type="text" id="enjoy" name="enjoy" class="form-control <?php 
				if(isset($error1) && $error1 == 1){ echo " bad"; } else{ echo ""; } ?>" value="<?php 
				if(isset($error) && $error != ""){ echo $_POST["enjoy"]; }
				?>">
                
                <label for="strength">You excel at:</label>
                <input type="text" id="strength" name="strength" class="form-control <?php 
				if(isset($error2) && $error2 == 2){ echo " bad"; } else{ echo ""; } ?>" value="<?php 
				if(isset($error) && $error != ""){ echo $_POST["strength"]; }
				?>">
                
                <label for="weakness">Your weakness:</label>
                <input type="text" id="weakness" name="weakness" class="form-control <?php 
				if(isset($error3) && $error3 == 3){ echo " bad"; } else{ echo ""; } ?>" value="<?php 
				if(isset($error) && $error != ""){ echo $_POST["weakness"]; }
				?>">
                <!-- the default for form-control inside of a form-group is a 100% (responsive) block form element -->
                </div><!--end of form-group-->
            
                <input type="hidden" name="control" value="2">
                <input type="submit" class="neg-left" value="SUBMIT">
                <!-- you can also give buttons the class active or disabled -->
                </form>
        
     
        
            
            <!-- pagination numbers -->
            <ul class="pagination">
            	<li><a href="zora.php">1</a></li>
                <li class="active"><a href="">2</a></li>
                <li><a href="more.php">3</a></li>
                <li><a href="fortune.php">4</a></li>
            </ul>
       
    
      </div><!--end 6 col-->
    </div><!--end of formation-->
</div><!--end of container-->

<div class="footer"><p>© Kristelle MacSween</p></div>
</body>
</html>

<?php
// $_POST data validation code can go here to make sure data is ok for use.
if (!isset($_SESSION)) { session_start(); }
if (isset($_POST['control']) && $_POST['control'] == 3){
if (isset($_POST["animal"]) &&  trim($_POST["animal"]) != ""){
$_SESSION['animal'] = htmlspecialchars(trim($_POST["animal"]));//avoiding the user breaking my code by submitting a special character
$error1= 0;
}
else{
$error1 = 1;
}
if (isset($_POST["destination"]) &&  trim($_POST["destination"]) != ""){
$_SESSION['destination'] = htmlspecialchars(trim($_POST["destination"]));
$error2= 0;
}
else{
$error2 = 2;
}
if (isset($_POST["food"]) &&  trim($_POST["food"]) != ""){
$_SESSION['food'] = htmlspecialchars(trim($_POST["food"]));
$error3 = 0;
}
else{
$error3 = 3;
}
if($error1 == 1 OR $error2 == 2 OR $error3 == 3){
// return to page 3
$error = 1;
include("more.php");
exit();
}
}
elseif(isset($_SESSION['animal']) && isset($_SESSION['food']) && isset($_SESSION['destination'])){
}
else{
//return to page 3
include("more.php");
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
<link rel="stylesheet" href="styles/style4.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>



</head>

<body>
<div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100"
  aria-valuemin="0" aria-valuemax="100" style="width:100%">
  <span>100% Yay!</span>
  </div>
  </div>      


	<div class="container">
    	<!-- container is a fixed-width, responsive container for your site, the breakpoints are as follows:
        x-small devices / phones: <768px - container 100% width
        small devices / tablets: >= 768px - container set to 750px
        medium devices / desktops: >= 992px - container set to 970px
        large devices / desktops: > 1200px - container set to 1170px
        -->
       <img src="images/logo.png" class="hidden-lg hidden-md hidden-sm logo" alt="Logo"><!--logo for phones--> 
  
        <h2 class="hidden-xs">ask</h2>
                <h1 class="hidden-xs">MADAME ZORA</h1>
                   <p class="nymp hidden-xs">b</p>
                   
                
    <div class="col-lg-6"></div><!--end col 6 -->
    
       
            
        <div class="col-lg-6">
             
               
           <div class="formation"> 
           <div class="fortune img-rounded"> 
            
             <p><mark class="fancy"><?php echo $_SESSION["name"];?>,</mark> you are <?php echo $_SESSION["adj"];?> consider yourself fortunate. When it comes to <?php echo $_SESSION["strength"];?>, the Gods have indeed blessed you!</p>
             
             <p> Reward your efforts from time to time. You should <?php echo $_SESSION["enjoy"];?>, eat more <?php echo $_SESSION["food"];?> or go to <?php echo $_SESSION["destination"];?>. It would be well deserved, just do it!</p>
             
             <p>If you find yourself struggling with <?php echo $_SESSION["weakness"];?>, take your time. The best answer is not always the obvious one. Let it marinate. Drink a cup of tea. Read the Tao Te Ching.</p>
             
             <p>If it is <?php echo $_SESSION["seek"];?> that you desire, then rise to the challenge! Unleash your inner <?php echo $_SESSION["animal"];?> and see yourself truly elevated!</p>
             
             </div><!--end of fortune-->
             
             <!-- pagination numbers -->
            <ul class="pagination">
            	<li><a href="zora.php">1</a></li>
                <li><a href="details.php">2</a></li>
                <li><a href="more.php">3</a></li>
                <li class="active"><a href="">4</a></li>
            </ul>
               
            </div><!--end of formation-->
           
           </div><!--end of col 6-->

        

</div><!--end of container-->
<div class="footer"><p>© Kristelle MacSween</p></div>
</body>
</html>
<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>
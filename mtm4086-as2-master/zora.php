<?php
// $_POST data validation code can go here to make sure data is ok for use.
if (!isset($_SESSION)) { session_start(); }
?>
<!doctype html>
<html lang="en-ca">
<head>
<meta charset="utf-8">
<title>Ask Madame Zora</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="styles/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>

<body>

<div class="progress">
<div class="progress-bar progress-bar-info" role="progressbar"
 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
<span>PROGRESS: 0% YOUR FORTUNE AWAITS!</span>
</div>
</div>      


	<div class="container">
    	<!-- container is a fixed-width, responsive container for your site, the breakpoints are as follows:
        x-small devices / phones: <768px - container 100% width
        small devices / tablets: >= 768px - container set to 750px
        medium devices / desktops: >= 992px - container set to 970px
        large devices / desktops: > 1200px - container set to 1170px
        -->
        
        <img src="images/logo.png" class="hidden-lg hidden-md hidden-sm logo img-responsive" alt="Logo"><!--logo for phones-->
        <h2 class="hidden-xs">ask</h2>
                <h1 class="hidden-xs">MADAME ZORA</h1>
                   <p class="nymp hidden-xs">b</p>
                   
           
           
                
        <div class="col-lg-8"></div><!--end col 8 -->
           <div class="formation">
                <div class="col-lg-4 place">
             
                <form role="form" method="post" action="details.php">
        	    <div class="form-group">
            	<label for="name">First Name:</label>
                <input type="text" id="name" name="name" class="form-control capMe <?php 
				if(isset($error1) && $error1 == 1){ echo " bad"; } else{ echo ""; } ?>" value="<?php 
				if(isset($error) && $error != ""){ echo $_POST["name"]; }
				?>">
                
                <label for="seek">What you seek:</label>
                <input type="text" id="seek" name="seek" class="form-control <?php 
				if(isset($error2) && $error2 == 2){ echo "bad"; } else{ echo "form-control"; } ?>" value="<?php 
				if(isset($error) && $error != ""){ echo $_POST["seek"]; }
				?>">
                
                <label for="adj">Adjective to describe yourself:</label>
                <input type="text" id="adj" name="adj" class="form-control <?php 
				if(isset($error3) && $error3 == 3){ echo "bad"; } else{ echo "form-control";} ?>" value="<?php 
				if(isset($error) && $error != ""){ echo $_POST["adj"]; }
				?>">
               
                </div><!--end of form-group-->
            
                <input type="hidden" name="control" value="1">
                <input type="submit" class="neg-left" value="SUBMIT">
                <!-- you can also give buttons the class active or disabled -->
                </form>
        
     
        
            
            <!-- pagination numbers -->
            <ul class="pagination">
            	<li class="active"><a href="">1</a></li>
                <li><a href="details.php">2</a></li>
                <li><a href="more.php">3</a></li>
                <li><a href="fortune.php">4</a></li>
            </ul>
       
        </div><!--end 4 col-->   
    </div><!--end of formation-->
</div><!--end of container-->

<div class="footer"><p>© Kristelle MacSween</p></div>
</body>
</html>

<?php
 
 session_start();

 if(isset($_POST['fsong'])) {

 	 $_SESSION['favsong']      =  $_POST['fsong'];
 }

  if(isset($_POST['fdish'])) {

 	 $_SESSION['favdish']      =  $_POST['fdish'];
 }
 if(isset($_POST['fsong'])) {

 	 $_SESSION['favdrink']      =  $_POST['fdrink'];
 }


 if(isset($_SESSION['randTranspo'])) {

 	$rtranspo=$_SESSION['randTranspo'];
 }

  if(isset($_SESSION['randDay'])) {

 	$rday=$_SESSION['randDay'];
 }

 if(isset($_SESSION['randMonth'])) {

 	$rmonth=$_SESSION['randMonth'];
 }

 if(isset($_SESSION['randWord'])) {

 	$rword=$_SESSION['randWord'];
 }

 

?>



	<form class="form-horizontal" role="form" id="randomInfo">

		<div class="form-group">
            	
            	<label for ="rtranspo" class="control-label col-sm-5">Random Means Transportation: </label>
                <div class="col-sm-7">
                	<input type="text" id="rtranspo" value="<?php  if(isset($rtranspo)) {echo $rtranspo;} ?>" name="fsong" class="form-control">
                </div>
        </div>
        <div class="form-group">
            	
            	<label for ="rday" class="control-label col-sm-5">Random Day: </label>
                <div class="col-sm-7">
                	<input type="number" min="1" max="30" id="rday" value="<?php  if(isset($rday)) {echo $rday;} ?>" name="rday" class="form-control">
                </div>
        </div>
        <div class="form-group">
            	
            	<label for ="rmonth" class="control-label col-sm-5">Random Month: </label>
                <div class="col-sm-7">
                	<input type="text" id="rmonth" value="<?php  if(isset($rmonth)) {echo $rmonth;} ?>" name="rmonth" class="form-control">
                </div>
        </div>
		<div class="form-group">
            	
            	<label for ="rword" class="control-label col-sm-5">Random Word: </label>
                <div class="col-sm-7">
                	<input type="text" id="rword" value="<?php  if(isset($rword)) {echo $rword;} ?>" name="rword" class="form-control">
                </div>
        </div>
      
	    <ul class="pager">
					  
					    <li class="pull-right next">
					    	<button class="btn btn-custom btn-default" name="ranNext" id="ranNext" >Next</button>
					    </li>
			  		</ul>
		
    </form>


	

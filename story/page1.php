<?php
 
 session_start();

 if(isset($_SESSION['fullname'])) {

 	$fname=$_SESSION['fullname'];
 }

  if(isset($_SESSION['compname'])) {

 	$cname=$_SESSION['compname'];
 }

 if(isset($_SESSION['comppos'])) {

 	$cpos=$_SESSION['comppos'];
 }

  if(isset($_SESSION['holseas'])) {

 	$hseas=$_SESSION['holseas'];
 }
 

?>

    <form class="form-horizontal" role="form" id="subjectInfo">

    	<div class="form-group">
            	
            	<label for ="fname" class="control-label col-sm-5">Full Name: </label>
                <div class="col-sm-7">
                	<input type="text" id="fname" value="<?php  if(isset($fname)) {echo $fname;} ?>" name="fname" class="form-control">
                </div>
        </div>
        <div class="form-group">
            	
            	<label for ="cname" class="control-label col-sm-5">Company Name: </label>
                <div class="col-sm-7">
                	<input type="text" id="cname" value="<?php  if(isset($cname)) {echo $cname;} ?>" name="cname" class="form-control">
                </div>
        </div>
        <div class="form-group">
            	
            	<label for ="cpos" class="control-label col-sm-5">Your Postion in Comapny: </label>
                <div class="col-sm-7">
                	<input type="text" id="cpos" value="<?php  if(isset($cpos)) {echo $cpos;} ?>" name="cpos" class="form-control">
                </div>
        </div>
        <div class="form-group">
            	
            	<label for ="hseas" class="control-label col-sm-5">Holiday Name: </label>
                <div class="col-sm-7">
                	<input type="text" id="hseas" value="<?php  if(isset($hseas)) {echo $hseas;} ?>" name="hseas" class="form-control">
                </div>
        </div>
		<ul class="pager">
		    
		    <li class="pull-right next">
		    	<button class="btn btn-custom btn-default" name="subNext" id="subNext" >Next</button>
		    </li>
  		</ul>
		
    </form>


	
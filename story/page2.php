<?php
 
 session_start();

 if(isset($_POST['fname'])) {

 	 $_SESSION['fullname']      =  $_POST['fname'];
 } 
 if(isset($_POST['cname'])) {

 	 $_SESSION['compname']      =  $_POST['cname'];
 } 
 if(isset($_POST['cpos'])) {

 	 $_SESSION['comppos']      =  $_POST['cpos'];
 }

  if(isset($_POST['hseas'])) {

 	 $_SESSION['holseas']      =  $_POST['hseas'];
 }

 if(isset($_SESSION['favsong'])) {

 	$fsong=$_SESSION['favsong'];
 }

  if(isset($_SESSION['favdish'])) {

 	$fdish=$_SESSION['favdish'];
 }

 if(isset($_SESSION['favdrink'])) {

 	$fdrink=$_SESSION['favdrink'];
 }

 

?>



    <form class="form-horizontal" role="form" id="personalInfo">

    	<div class="form-group">
            	
            	<label for ="fsong" class="control-label col-sm-5">Favourite Song: </label>
                <div class="col-sm-7">
                	<input type="text" id="fsong" value="<?php  if(isset($fsong)) {echo $fsong;} ?>" name="fsong" class="form-control">
                </div>
        </div>
        <div class="form-group">
            	
            	<label for ="fdish" class="control-label col-sm-5">Favoirite Dish: </label>
                <div class="col-sm-7">
                	<input type="text" id="fdish" value="<?php  if(isset($fdish)) {echo $fdish;} ?>" name="fdish" class="form-control">
                </div>
        </div>
        <div class="form-group">
            	
            	<label for ="fdrink" class="control-label col-sm-5">Favoirite Drink: </label>
                <div class="col-sm-7">
                	<input type="text" id="fdrink" value="<?php  if(isset($fdrink)) {echo $fdrink;} ?>" name="fdrink" class="form-control">
                </div>
        </div>

		<ul class="pager">
				    
				    <li class="pull-right next">
				    	<button class="btn btn-custom btn-default" name="perNext" id="perNext" >Next</button>
				    </li>
		  		</ul>
		
    </form>


	
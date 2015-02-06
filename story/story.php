<?php
 
 session_start();

  if(isset($_POST['rword'])) {

 	 $_SESSION['randWord']      =  $_POST['rword'];
 } 
 if(isset($_POST['rmonth'])) {

 	 $_SESSION['randMonth']      =  $_POST['rmonth'];
 } 
 if(isset($_POST['rday'])) {

 	 $_SESSION['randDay']      =  $_POST['rday'];
 }

   if(isset($_POST['rtranspo'])) {

 	 $_SESSION['randTranspo']      =  $_POST['rtranspo'];
 }


  if(isset($_POST['hseas'])) {

 	 $_SESSION['holseas']  =  $_POST['hseas'];
 }

 if(isset($_SESSION['fullname'])) {

 	$fullname=$_SESSION['fullname'];
 }

  if(isset($_SESSION['compname'])) {

 	$company=$_SESSION['compname'];
 }

 if(isset($_SESSION['comppos'])) {

 	$position=$_SESSION['comppos'];
 }

if(isset($_SESSION['favsong'])) {

 	$song=$_SESSION['favsong'];
 }

  if(isset($_SESSION['favdish'])) {

 	$dish=$_SESSION['favdish'];
 }

 if(isset($_SESSION['favdrink'])) {

 	$drink=$_SESSION['favdrink'];
 }

  if(isset($_SESSION['randTranspo'])) {

 	$transportation=$_SESSION['randTranspo'];
 }

  if(isset($_SESSION['randDay'])) {

 	$day=$_SESSION['randDay'];
 }

 if(isset($_SESSION['randMonth'])) {

 	$month=$_SESSION['randMonth'];
 }

 if(isset($_SESSION['randWord'])) {

 	$word=$_SESSION['randWord'];
 }

 if(isset($_SESSION['holseas'])) {

 	$holiday=$_SESSION['holseas'];
 }

?>

 <div class="col-sm-12" id="memo">
	<p>To: All Employees</p> 
	<p><b>From:</b> <em><?php echo $fullname ?></em>, <em><?php echo $position ?></em></p>
	<p><b>Subject:</b> Office conduct during the <strong><?php echo $holiday ?> </strong>season Effective immediately, employees should keep in mind the following guidelines in compliance with <strong><?php echo $company ?></strong>. </p>
	<p>1. Playing <strong><?php echo $song ?></strong> on the push-button phone is forbidden (it runs up an incredible long distance bill)</p> 
	<p>2. Work requests are not to be filed under "<strong><?php echo $word ?></strong>" </p>
	<p>3. Company <strong><?php echo $transportation ?></strong> are not to be used to go over the river and through the woods to Grandma's House. </p>
	<p>4. All <strong><?php echo $dish ?></strong> is to be eaten BEFORE <strong><?php echo $day ?></strong> <strong><?php echo $month ?></strong>. </p>
	<p>5. <strong><?php echo $drink ?></strong> will NOT be dispensed in vending machines. </p>
	<p> In spite of all this, the staff is encouraged to have a Happy Holiday. </p>
	<p>Best, </p>
	<p><strong><?php echo $fullname ?></strong></p>
</div>
<button class="btn btn-custom btn-default" id="endBtn">New Memo</button>
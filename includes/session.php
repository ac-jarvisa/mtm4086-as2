<?php
	//declare session variable
	session_start();
	
	//if the session variable 'progress' isn't set, there are two options (see below)...
	if(!isset($_SESSION['progress'])){
		
		$s = $_SERVER['PHP_SELF'];
		$pgName = substr($s,strrpos($s,'/')+1);
		
		//either this is the user's first visit to the site, in which case they arrived at index.php and we want to SET the session variable 'progress'...
		if($pgName == "index.php"){
			
			$_SESSION['progress'] = "";
		
		//or they typed in the url for the form page without visiting index.php, in which case we need to redirect them back there	
		} else {
			
			$host  = $_SERVER['HTTP_HOST'];
			$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			$extra = 'index.php';
	
			header("Location: http://$host$uri/$extra");
			die();
		
		}
	}
?>
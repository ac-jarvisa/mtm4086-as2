<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- you can also add inside the content attribute "maximum-scale=1.0, user-scalable=no", which will disable the zoom functions on your site (making it feel more like a native app) -->
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<title>Hate Memo Generator</title>
</head>

<body>
<div id="theMain" class="container-fluid">
	<header><h1 class="text-center">Hate Memo Generator</h1></header>
	<div id="myProgress" class="progress">
  <div class="col-sm-12 progress-bar progress-bar-custom progress-bar-striped" role="progressbar"
  aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width:2%">
    <span id='progInd'>2%</span> 
  </div>
  </div>
  <div id="heads" class="col-sm-3">
  <ul id="pageChange" class="col-sm-2 pagination">
			 
				 <li data-num='1' data-page='page1' class="active"><a href="#">1</a><p>Subject Information</p></li>
	   			 <li data-num='2' data-page='page2' class="disabled"><a href="#">2</a><p>Target Information</p></li>
	   			 <li data-num='3' data-page='page3' class="disabled"><a href="#">3</a><p>Random Information</p></li>
			   
	  </ul>
	
  </div>
  	
	<div class="col-sm-9 container-fluid center-block" id="here">
		<?php include_once 'story/start.php'; ?>
	</div>
	<div id="loader" class="col-sm-9 container-fluid" >
    <div id="bar1"></div>
    <div id="bar2"></div>
    <div id="bar3"></div>
    <div id="bar4"></div>
    <div id="bar5"></div>
    <div id="bar6"></div>
    <div id="bar7"></div>
    <div id="bar8"></div>
    <div id="bar9"></div>
    <div id="bar10"></div>
  </div>
</div>

	
</div>
<div id="footer">The sample <a href="http://www.make4fun.com/stories/Clean-jokes/931-Office-Holiday-Memo">Memo</a> taken from Make4fun.com</div>
	<script src="js/stuff.js"></script>
</body>
</html>

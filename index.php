<?php 

session_start()




?>

<?php 

$whatPage = $_GET['pg'];

if ($whatPage == 3) {


    if( empty($_SESSION['wje']) || empty($_SESSION['desc']) || empty($_SESSION['yj']) || empty($_SESSION['ftyciaf']) || empty($_SESSION['iow']) ){

    header("location:index.php");
    

    }else {

      echo "Thank You";   
    }

}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Git Yourself Up By Your Bootstraps</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


</head>



<body>
	<div class="container-fluid"> 
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
    	
        
        <hr>
     
     <?php   


     $pageDisplay = $_GET['pg'];

     switch ($pageDisplay) {
case 1:
 
//<!--Page 1!!!!!!! -->

    echo '<form role="form" action="index.php?pg=2" method="post">';
    echo '<div class="form-group">';
    echo '<label for="wje">Worst Job Ever</label><input type="text" id="wje" name="wje" class="form-control">';
    echo '<hr>';
    echo '<label for="desc">What Makes it the worst job?</label><input type="text" id="desc" name="desc" class="form-control">';
    echo '<hr>';
    echo '<label for="yj">Your Job</label><input type="text" id="yj" name="yj" class="form-control">';
    echo '<hr>';
    echo '<input type="submit" name="btnSubmit1" class="btn btn-danger" value="Next">';
    echo '<hr>';
    echo '</div>';
    echo '</form>';
        
break;


case 2:
//<!--Page 2!!!!!!! -->

    echo '<form role="form" action="index.php?pg=3" method="post">';
    echo '<div class="form-group">';
   echo ' <label for="ftyciaf">First Thing you carry out in a fire</label><input type="text" id="ftyciaf" name="ftyciaf" class="form-control">';
    echo '<hr>';
   echo ' <label for="iow">In one word - First Thing you do if you win $1,000,000</label><input type="text" id="iow" name="iow" class="form-control">';
    echo '<hr>';
    echo '<input type="submit" name="btnSubmit2" class="btn btn-danger" value="Submit">';
    echo '<hr>';
    echo '</div>';
    echo '</form>';

break;

case 3:
//<!--Page 3!!!!!!! -->



        

    echo '<div id="finalo">';

    echo '<p>
        A '.$_SESSION['wje'].', a lawyer, a little boy and a '.$_SESSION['yj'].' were out for a Sunday afternoon flight on a small private plane.</br>
        Suddenly, the plane developed engine trouble. The plane started to go down. Finally, the pilot grabbed a '.$_SESSION['ftyciaf'].' and yelled to the passengers that they better '.$_SESSION['iow'].', and he himself bailed out.</br>
        Unfortunately, there were only three '.$_SESSION['ftyciaf'].'s remaining. The doctor grabbed one and said “I’m a doctor, '.$_SESSION['desc'].', so I must live,” and jumped out. The lawyer then said, “I’m a lawyer and lawyers are the smartest people in the world. I deserve to live.” He also grabbed a '.$_SESSION['ftyciaf'].' and '.$_SESSION['iow'].'ed.</br>
        The '.$_SESSION['yj'].' looked at the little boy and said, “My son, I’ve lived a long and full life. You are young and have your whole life ahead of you. Take the last '.$_SESSION['ftyciaf'].' and live in peace.</br>
        The little boy handed the '.$_SESSION['ftyciaf'].' back to the priest and said, “Not to worry Father. The smartest man in the world just took off with my lunch box.”</p>';

    echo '</div>';
    echo '<form role="form" action="index.php" method="post">';
    echo '<input type="submit" name="btnSubmit3" class="btn btn-danger" value="Restart">';
    echo '<hr>';
    echo '</form>';    

break;

default:

//<!--Home!!!!!!! -->       
    echo '<div class="jumbotron">';
        echo '<div class="container">';
            echo '<h1>Hello, world!</h1>';
            echo '<p>Lorem ipsum</p>';
            echo '<p><a class="btn btn-primary btn-lg" href="index.php?pg=1" role="button">Learn more</a></p>';
        echo '</div>';
    echo '</div>';





}

if(isset($_POST['btnSubmit1'])){
            $_SESSION['wje'] = $_POST['wje'];
            $_SESSION['desc'] = $_POST['desc'];
            $_SESSION['yj'] = $_POST['yj'];


        }

if(isset($_POST['btnSubmit2'])){
            $_SESSION['ftyciaf'] = $_POST['ftyciaf'];
            $_SESSION['iow'] = $_POST['iow'];
            

        }
        
    ?>


     
     <footer>

       

        <div class="progress" style="display: <?php if (empty($whatPage)) {    
          echo "none";

        }?>">
        <!-- progress-bar-danger = red, -warning = yellow, -info = light-blue, -success = green, -striped = any colour strpied, and the class active will make it animated -->
        <?php


            /* set a variable for the percentage of the progress...*/
            if(isset($_GET['pg'])){
                $progress = round($_GET['pg']*33.3);
            }else{
                $progress = 33; 
            }
        
         ?>
        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $progress; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $progress; ?>%">
                <!-- label for the progress bar -->
                <span><?php echo $progress; ?>%</span>
        </div>
            
            <!-- you can stack progress bars!
            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width:33%">
                <span>33%</span>
            </div>
            -->
        </div>
        
        <hr>
        	
        	
        </footer>
    
    </div>
    

</body>
</html>

<?php
session_start();

 if( $_GET['pg']==2)
 {
         if ( !empty($_POST['name1']) && !empty($_POST['enemy']) && !empty($_POST['body']))
            {
                $_SESSION['name1'] = $_POST['name1'];
                $_SESSION['enemy'] = $_POST['enemy'];
                $_SESSION['body'] = $_POST['body'];
            }
             else
             {
                /*$_SESSION['error'] = true;*/
                  header('Location:' . $_SEVER['PHP_SELF'] . '?pg=1');
             }           
 }

 if( $_GET['pg']==3)
 {
         if ( !empty($_POST['action1']) && !empty($_POST['sound']) && !empty($_POST['action2']))
            {
                $_SESSION['action1'] = $_POST['action1'];
                $_SESSION['sound'] = $_POST['sound'];
                $_SESSION['action2'] = $_POST['action2'];
            }
             else
             {
                /*$_SESSION['error'] = true;*/
                  header('Location:' . $_SEVER['PHP_SELF'] . '?pg=1');
             }           
 }

 if( $_GET['pg']==4)
 {
         if ( !empty($_POST['action3']) && !empty($_POST['name2']) && !empty($_POST['heavy']))
            {
                $_SESSION['action3'] = $_POST['action3'];
                $_SESSION['name2'] = $_POST['name2'];
                $_SESSION['heavy'] = $_POST['heavy'];
            }
             else
             {
                /*$_SESSION['error'] = true;*/
                  header('Location:' . $_SEVER['PHP_SELF'] . '?pg=1');
             }           
 }
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>MAJOR BOOTSTRAP!</title>
    <link href='http://fonts.googleapis.com/css?family=Montserrat+Subrayada|Oxygen' rel='stylesheet' type='text/css'>
	
<link href='http://fonts.googleapis.com/css?family=Imprima' rel='stylesheet' type='text/css'>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    
    <link href="styles/style.css" rel="stylesheet" />
</head>
    
<body>
    <div class="background"></div>
    <div class="container-fluid">
        
        <div class="row">
                <div class="col-lg-3"></div>
                    <div class="jumbotron col-lg-6">
                        <h1>MAJOR BOOTSTRAP!</h1>
                        <p>You are a soldier, deal with it.</p>
                    </div>
                <div class="col-lg-3"></div>
        </div>
        
         <div class="row">
                 <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            
                            <?php

                                    if( $_GET['pg']==2)
                                {                                
                                    echo '<div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;">
    33%
                                    </div>
                            </div>
                            <form action=" ' . $_SEVER['PHP_SELF'] . '?pg=3' . ' " method="post">
                                    <label>Action (past tense)<input type="text" placeholder="ex. ate" name="action1"></label>
        <label>Sound Intensity Descriptor<input type="text" placeholder="ex. softly" name="sound"></label>
        <label>Action (past tense)<input type="text" placeholder="ex. laughed" name="action2"></label>
                                <input type="submit"  class="btn btn-primary" name="next" id="next" value="Next"/>
                                        </form>';
                                }
                                    else if( $_GET['pg']==3)
                                {
                                    echo '<div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
    66%
                                    </div>
                            </div>
                            <form action=" ' . $_SEVER['PHP_SELF'] . '?pg=4' . ' " method="post">
                                    <label>Current Action<input type="text" placeholder="ex. running" name="action3"></label>
        <label>First Name<input type="text" placeholder="ex. Joe" name="name2"></label>
        <label>Something Heavy (plural)<input type="text" placeholder="ex. bowling balls" name="heavy"></label>
                                <input type="submit"  class="btn btn-success" name="finish" id="finish" value="Finish"/>
                                        </form>';
                                }
                                    else if( $_GET['pg']==4)
                                {
                                        echo '<div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
    100%
                                    </div>
                            </div>
                            <form action=" ' . $_SEVER['PHP_SELF'] . '?pg=1' . ' " method="post"> ';
                                   echo "<div>" . $_SESSION['name1'] . " ran ahead to see if there were any " . $_SESSION['enemy'] . " around the corner. A shot through the " . $_SESSION['body'] . " was the result of this risky move. We " . $_SESSION['action1'] . " as " . $_SESSION['name1'] . " collapsed " . $_SESSION['sound'] . ". Then gathering our courage we " .  $_SESSION['action2'] . " " . $_SESSION['action3'] . ". We advanced preparing for the worst and hoping to avenge our friend's death. " . $_SESSION['name2'] . " spotted the enemy and carefully lined up a shot. It was a trap however, the next thing we knew " . $_SESSION['heavy'] . " were raining from above. Everything went dark.</div>

<div>The End.</div>
                                <input type='submit'  class='btn btn-info' name='replay' id='replay' value='Replay'/>
                                        </form>";
                                }
                                    else
                                {
                                        
                                session_unset();
                                session_destroy();
                                
                                    echo '<div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width: 7%;">
    0%
                                    </div>
                            </div>
                            <form action=" ' . $_SERVER['PHP_SELF'] . '?pg=2' . ' " method="post">
        <label>First Name<input type="text" placeholder="ex. Heather" name="name1"></label>
        <label>An Enemy (plural)<input type="text" placeholder="ex. bullies" name="enemy"></label>
        <label>Body Part or Area<input type="text" placeholder="ex. torso" name="body"></label>
                                <input type="submit" class="btn btn-primary" name="next" id="next" value="Next"/>
                                </form>';   
                                }
                                if ($_SESSION['error'] == true)
                                {
                                    echo "Fill In All Fields Soldier!";
                                   
                                }
                                      
                                ?>
                        </div>
                    <div class="col-sm-3"></div>
        </div>
        
        
    
    </div>
    
</body>
</html>

<?php
session_write_close();
?>
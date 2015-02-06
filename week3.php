<?php
    session_start()
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>I cry every time stories</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <div class="container">




        <h1>Make a Beautiful Tear Jerking Story!</h1>
        <hr>

        <div class="progress">


            <?php

                if(isset($_GET['pg'])){
                    $progress = round($_GET['pg']*20);
                }else{
                    $progress = 0;
                }
            ?>
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $progress; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $progress; ?>%">

                <span><?php echo $progress; ?>%</span>
            </div>

        </div>
        <div>
            <?php
            if(isset($_GET['pg'])){
                $whatStep = $_GET['pg'];

                if($whatStep == 1){
                    echo '<div class="col-md-3"></div>';
                    echo '<div class="col-md-6 storyFin">';

                    echo '<form role="form" action="week3.php?pg=2" method="post" class="form-horizontal">';
                    echo '<label for="adjective1"> An Adjective</label><input type="text" name="adjective1" id="adjective1" class="form-control">';
                    echo '<label for="animal2">An Animal</label><input type="text" name="animal2" id="animal2" class="form-control">';
                    echo '<label for="place3">A Location</label><input type="text" name="place3" id="place3" class="form-control">';
                    echo '<input type="submit" name="btnSub1" class="form-control topMar" value="Next Step! >>">';
                    echo '</form>';
                    echo '</div>';
                    echo '<div class="col-md-3"></div>';
                }else if($whatStep ==2){
                    echo '<div class="col-md-3"></div>';
                    echo '<div class="col-md-6 storyFin">';

                    echo '<form role="form" action="week3.php?pg=3" method="post">';
                    echo '<label for="food4">A Food</label><input type="text" name="food4" id="food4" class="form-control">';
                    echo '<label for="petname5">A Pet Name for your Lover</label><input type="text" name="petname5" id="petname5" class="form-control">';
                    echo '<label for="pnoun6">A Noun</label><input type="text" name="pnoun6" id="pnoun6" class="form-control">';
                    echo '<label for="pname7">A Name</label><input type="text" name="pname7" id="pname7" class="form-control">';
                    echo '<input type="submit" name="btnSub2" class="form-control topMar" value="Next Step! >>">';
                    echo '</form>';
                    echo '</div>';
                    echo '<div class="col-md-3"></div>';


                }else if($whatStep ==3){
                    echo '<div class="col-md-3"></div>';
                    echo '<div class="col-md-6 storyFin">';

                    echo '<form role="form" action="week3.php?pg=4" method="post">';
                    echo '<label for="adjective8">An Adjective</label><input type="text" name="adjective8" id="adjective8" class="form-control">';
                    echo '<label for="noun9">A Noun</label><input type="text" name="noun9" id="noun9" class="form-control">';
                    echo '<label for="noun10">A Noun</label><input type="text" name="noun10" id="noun10" class="form-control">';
                    echo '<label for="state11">An Exclamation Statement</label><input type="text" name="state11" id="state11" class="form-control">';
                    echo '<input type="submit" name="btnSub3" class="form-control topMar" value="Next Step! >>">';
                    echo '</form>';
                    echo '</div>';
                    echo '<div class="col-md-3"></div>';

                }else if($whatStep ==4){

                    echo '<div>';
                    echo 'Create your story!';
                    echo '<form role="form" action="week3.php?pg=5" method="post">';
                    echo '<input type="submit" name="btnSub4" class="form-control topMar" value="Create my Tale! >>">';
                    echo '</form>';
                    echo '</div>';


                }else{
                    echo '<div class="col-md-3"></div>';
                    echo '<div class="col-md-6 storyFin">';


                    echo "There once was a ".$_SESSION['adjective1']." ".$_SESSION['animal2']." who was going to throw a party. They wanted to invite all of their friends to ".$_SESSION['place3']." to eat ".$_SESSION['food4'].". The ".$_SESSION['animal2']." sent a text to all of its friends on their contact list.  The text read: <br>
<code>Hey ". $_SESSION['petname5'] ."s, ther is a prty at ".$_SESSION['place3']." tmrw and ur inv! Bring as many ".  $_SESSION['pnoun6'] ." as u went. </code><br>
The problem was that no one could understand the ".$_SESSION['animal2']."’s text! When ".$_SESSION['animal2']."’s good friend ". $_SESSION['pname7'] ." saw the text they deleted it instantly.<br>
On the day of the party the sky was ". $_SESSION['adjective8'] ." and the sun was shining on ".$_SESSION['place3'].". But none of the ".$_SESSION['animal2']."’s friends were there. The ".$_SESSION['animal2']." sat alone with their ".$_SESSION['noun9']." and started to sob. All of a sudden the ".$_SESSION['animal2']."’s friends popped out behind the ". $_SESSION['noun10'] ." and yelled ". $_SESSION['state11'] ."
";
                    echo '<form role="form" action="week3.php?pg=1" method="post">';
                    echo '<input type="submit" name="btnSub4" class="form-control" value="Make a New Tale">';
                    echo '</form>';
                    echo '</div>';
                    echo '<div class="col-md-3"></div>';
                }
            }

            ?>

        </div>

        <div>

        <?php
        if(isset($_POST['btnSub1'])){
            $_SESSION['adjective1'] = $_POST['adjective1'];
            $_SESSION['animal2'] = $_POST['animal2'];
            $_SESSION['place3'] = $_POST['place3'];


        }

        if(isset($_POST['btnSub2'])){
            $_SESSION['food4'] = $_POST['food4'];
            $_SESSION['petname5'] = $_POST['petname5'];
            $_SESSION['pnoun6'] = $_POST['pnoun6'];
            $_SESSION['pname7'] = $_POST['pname7'];

        }

        if(isset($_POST['btnSub3'])){
            $_SESSION['adjective8'] = $_POST['adjective8'];
            $_SESSION['noun9'] = $_POST['noun9'];
            $_SESSION['noun10'] = $_POST['noun10'];
            $_SESSION['state11'] = $_POST['state11'];

        }

        ?>





        </div>
        <hr>

    <div class="start">
        <?php

        echo '<form role="form" action="week3.php?pg=1" method="post">';
        echo '<input type="submit" name="btnSub4" class="form-control" value="Create a Story!">';
        echo '</form>';
        ?>
    </div>
    </div>

    <footer class="topMar">
        <div class="col-md-6">
            I know, white text on black background but I liked the pattern
        </div>


        <div class="col-md-3">

            .
        </div>
        <div class="col-md-3"></div>
    </footer>

    <script>
        //active and disabled go no where
        $(".active, .disabled").each(function(){
            $(this).on("click", function(){
                return false;
            })
        })

        $('.start').on(click, function(){
            $(this).hide();
        })
    </script>

</body>
</html>
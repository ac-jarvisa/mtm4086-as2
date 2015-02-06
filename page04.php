<?php
session_start();

if($_SESSION["pg3Comp"] == false ){
    header("Location: page03.php");
}

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>The Story - Final Story</title>

    <link href="style/style.css" rel="stylesheet">

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container">

        <h1>The Best Story Ever</h1>

        <h3>Here is The Best Story Ever</h3>

        <div class="story">

            <?php
            /*
            echo $_SESSION['character'];
            echo $_SESSION['specItem'];
            echo $_SESSION['villain'];
            echo $_SESSION['specAdj'];
            echo $_SESSION['location'];
            echo $_SESSION['verb1'];
            echo $_SESSION['emotion'];
            echo $_SESSION['verb2'];
            echo $_SESSION['noun2'] . "<br>";
            */

            //the great story with all the variables put into the story -- its hard to read

            echo "There once was someone named " . $_SESSION['character'] . ". " . $_SESSION['character'] . " had a " . $_SESSION['specAdj'] ." " . $_SESSION['specItem'] .". Someone else named " . $_SESSION['villain'] . " wanted " . $_SESSION['character'] . "’s " . $_SESSION['specItem'] .". One day when both " . $_SESSION['character'] . " and " . $_SESSION['villain'] . " were at the " . $_SESSION['location'] . ", " . $_SESSION['villain'] . " decided to take " . $_SESSION['character'] . "’s " . $_SESSION['specItem'] . ". So " . $_SESSION['villain'] . " " . $_SESSION['verb1'] . " " . $_SESSION['character'] . " and took the " . $_SESSION['specItem'] . ". " . $_SESSION['character'] . " full of " . $_SESSION['emotion'] . ", " . $_SESSION['character'] .  " " . $_SESSION['verb2'] . " " . $_SESSION['villain'] . " in front of a " . $_SESSION['noun2'] . " to get the " . $_SESSION['specItem'] ." back. It worked and " . $_SESSION['character'] . " had the " . $_SESSION['specItem'] . " back. The end. "
            ?>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                You're Done
            </div>
        </div>


    </div>

</body>

<?php session_destroy(); ?>

</html>
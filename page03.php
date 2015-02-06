<?php
session_start();

if($_SESSION["pg2Comp"] == false ){
    header("Location: page02.php");
}

if (isset($_POST['nextPage3'])) {

    //make variables default value of bob if not given a value
    $emot = trim($_POST['emotion']);
    if($emot == ""){
        $emot= "bob";
        $_SESSION['emotion'] =  $emot;
    } else {
        $_SESSION['emotion'] =  $emot;
    }

    $verb = trim($_POST['verb2']);
    if($verb == ""){
        $verb= "bob";
        $_SESSION['verb2'] =  $verb;
    } else {
        $_SESSION['verb2'] =  $verb;
    }

    $noun = trim($_POST['noun2']);
    if($noun == ""){
        $noun= "bob";
        $_SESSION['noun2'] =  $noun;
    } else {
        $_SESSION['noun2'] =  $noun;
    }


    //mark the page as completed
    $_SESSION["pg3Comp"] = true;

    //goto next page
    if($_SESSION["pg3Comp"] == true){
        header("Location: page04.php");
    }


    return false;

}


?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>The Story - Page 03</title>

    <link href="style/style.css" rel="stylesheet">

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container">

        <h1>The Best Story Ever</h1>

        <form class="form-horizontal" role="form"  method="post">

            <div class="form-group">
                <label for="email" class="control-label col-sm-3">Emotion: </label>
                <div class="col-sm-9">
                    <input type="text" id="emotion" name="emotion" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="address" class="control-label col-sm-3">Verb: </label>
                <div class="col-sm-9">
                    <input type="text" id="verb2" name="verb2" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="address" class="control-label col-sm-3">Noun: </label>
                <div class="col-sm-9">
                    <input type="text" id="noun2" name="noun2" class="form-control">
                </div>
            </div>

            <div class="input-group">
                <input type="submit" class="btn btn-danger" value="Finalize Story" id="nextPage3" name="nextPage3">
            </div>

        </form>

        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                75%
            </div>
        </div>

        
    </div>
</body>

</html>
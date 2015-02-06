<?php
session_start();

//bools to check if pages completed
$_SESSION["pg1Comp"] = false;
$_SESSION["pg2Comp"] = false;
$_SESSION["pg3Comp"] = false;


if (isset($_POST['nextPage'])) {

    //make variables default value of bob if not given a value
    $name = trim($_POST['charName']);
    if($name == ""){
        $name = "bob";
        $_SESSION['character'] =  $name;
    } else {
        $_SESSION['character'] =  $name;
    }

    $sItem = trim($_POST['specItem']);
    if($sItem == ""){
        $sItem = "bob";
        $_SESSION['specItem'] =  $sItem;
    } else {
        $_SESSION['specItem'] =  $sItem;
    }

    $villain = trim($_POST['villain']);
    if($villain == ""){
        $villain = "bob";
        $_SESSION['villain'] =  $villain;
    } else {
        $_SESSION['villain'] =  $villain;
    }


    //mark the page as completed
    $_SESSION["pg1Comp"] = true;

    //goto next page
    if($_SESSION["pg1Comp"] == true){
        header("Location: page02.php");
    }

    return false;

}
?>

<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>The Story - Page 01</title>

    <link href="style/style.css" rel="stylesheet">

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container">

        <h1>The Best Story Ever</h1>

        <h4>Help us write the best story ever! Just fill in the blanks and in four pages we will have the best story ever!</h4>

        <form class="form-horizontal" role="form" method="post">

            <div class="form-group">
                <label for="charName" class="control-label col-sm-3">Character Name: </label>
                <div class="col-sm-9">
                    <input type="text" id="charName" name="charName" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="address" class="control-label col-sm-3">Special Item: </label>
                <div class="col-sm-9">
                    <input type="text" id="specItem" name="specItem" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="address" class="control-label col-sm-3">Villain: </label>
                <div class="col-sm-9">
                    <input type="text" id="villain" name="villain" class="form-control">
                </div>
            </div>

            <div class="input-group">
                <input type="submit" class="btn btn-danger" value="Next Page" id="nextPage" name="nextPage">
            </div>

        </form>

        <h3>Progress</h3>

        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%">
                25%
            </div>
        </div>

        <h6>If you don't fill in the spaces, it will default to "bob". So please fill it in. We are not going to have the best story ever if it's full of bob</h6>


    </div>

</body>
</html>
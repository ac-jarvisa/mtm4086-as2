<?php
session_start();

if($_SESSION["pg1Comp"] == false){
    header("Location: page01.php");
}

if (isset($_POST['nextPage2'])) {

    //make variables default value of bob if not given a value
    $sAdj = trim($_POST['adj1']);
    if($sAdj == ""){
        $sAdj= "bob";
        $_SESSION['specAdj'] =  $sAdj;
    } else {
        $_SESSION['specAdj'] =  $sAdj;
    }

    $location = trim($_POST['location']);
    if($location == ""){
        $location = "bob";
        $_SESSION['location'] =  $location;
    } else {
        $_SESSION['location'] =  $location;
    }

    $verb1 = trim($_POST['verb1']);
    if($verb1 == ""){
        $verb1 = "bob";
        $_SESSION['verb1'] =  $verb1;
    } else {
        $_SESSION['verb1'] =  $verb1;
    }


    //mark the page as completed
    $_SESSION["pg2Comp"] = true;

    //goto next page
    if($_SESSION["pg2Comp"] == true){
        header("Location: page03.php");
    }


    return false;

}

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>The Story - Page 02</title>

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
                <label for="email" class="control-label col-sm-3">Adjective for Special Item: </label>
                <div class="col-sm-9">
                    <input type="text" id="adj1" name="adj1" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="address" class="control-label col-sm-3">Location: </label>
                <div class="col-sm-9">
                    <input type="text" id="location" name="location" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="address" class="control-label col-sm-3">Verb: </label>
                <div class="col-sm-9">
                    <input type="text" id="verb1" name="verb1" class="form-control">
                </div>
            </div>

            <div class="input-group">
                <input type="submit" class="btn btn-danger" value="Next Page" id="nextPage2" name="nextPage2">
            </div>

        </form>

        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                50%
            </div>
        </div>

    </div>
</body>

</html>
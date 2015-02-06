<!--make an if isset statement to got through the different stages one two and three carrying the variables through the post variable and use session variable to hold all of them for the user when the close it and kill it with the log out button-->


<!doctype html>
<head>
    <meta charset="utf-8">
    <title>Assignment 2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>


<div class="container-fluid"> <!-- container-fluid is a 100% width elastic container -->

    <nav class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <ul class="nav nav-pills nav-justified">
                <?php
                /* this php loop creates the nav links, and figures out what page we are on based on the 'pg' in the query string, giving that link the 'active' state */


                $page1 = '
    <form role="form" method="post" action="' . $_SERVER["PHP_SELF"] . '?pg=2 ">
        	<div class="form-group">
            	<label for="name">Your Name</label>
                <input type="text" id="name" name="name" class="form-control" value="Ben">
                <!-- the default for form-control inside of a form-group is a 100% (responsive) block form element -->
            </div>

            <div class="form-group">
            	<label for="friend">A Friend</label>
                <input type="text" id="friend" name="friend" class="form-control" value="Jared">
                <!-- the default for form-control inside of a form-group is a 100% (responsive) block form element -->
            </div>

            <div class="form-group">
            	<label for="tool">A tool</label>
                <input type="text" id="tool" name="tool" class="form-control" value="Hammer">
                <!-- the default for form-control inside of a form-group is a 100% (responsive) block form element -->
            </div>

          <input type="submit" class="btn btn-danger" value="Next">
            <!-- you can also give buttons the class active or disabled -->
        </form>
';
                $page2 = '
            <form role="form" method="post" action="' . $_SERVER["PHP_SELF"] . '?pg=3 ">
        	<div class="form-group">
            	<label for="animal">An Animal</label>
                <input type="text" id="animal" name="animal" class="form-control" value="cat">

            </div>

            <div class="form-group">
            	<label for="fruit">A fruit</label>
                <input type="text" id="fruit" name="fruit" class="form-control" value="strawberries">

            </div>

            <div class="form-group">
            	<label for="verb">A Verb</label>
                <input type="text" id="verb" name="verb" class="form-control" value="run">

            </div>

          <input type="submit" class="btn btn-danger" value="Next">

        </form>
';



                $page3 = '
        <form role="form" method="post" action="' . $_SERVER["PHP_SELF"] . '?pg=4 ">
        	<div class="form-group">
            	<label for="where">Where
            	</label>
                <input type="text" id="where" name="where" class="form-control" value="Ottawa">
                <!-- the default for form-control inside of a form-group is a 100% (responsive) block form element -->
            </div>

            <div class="form-group">
            	<label for="name">A time</label>
                <input type="text" id="time" name="time" class="form-control" value="1030">
                <!-- the default for form-control inside of a form-group is a 100% (responsive) block form element -->
            </div>

            <div class="form-group">
            	<label for="name">A mythical creature</label>
                <input type="text" id="creature" name="creature" class="form-control" value="Dragon">
                <!-- the default for form-control inside of a form-group is a 100% (responsive) block form element -->
            </div>

          <input type="submit" class="btn btn-danger" value="Submit!">
            <!-- you can also give buttons the class active or disabled -->
        </form>
';
            $page4 = '';



                ?>


            </ul>
        </div>
        <div class="col-lg-3"></div>
    </nav>

    <hr>






    <hr>
    <?php


    if(isset($_GET['pg'])){





        if($_GET['pg']== 1  ){
            echo $page1;
           // this needs to be appear at the bottom of the page so that the user can click to the next "Page"   echo '><a href="' . $_SERVER["PHP_SELF"] . '?pg=' . 2 . '">Page' . 2 . '</a></li>';


        }

        if($_GET['pg']==  2  ){

            session_start();
            $name = $_POST['name'];
            $friend = $_POST['friend'];
            $tool = $_POST['tool'];
        // so i ad to put them into variables so it doesnt try and grab the post


            $_SESSION['name'] = $name;
            $_SESSION['friend'] = $friend;
            $_SESSION['tool'] = $tool;

        // and this seems dumb but OR statements where not working

            if($_SESSION['name'] == ""){
                header("location:form.php?pg=1");

            }
            if($_SESSION['friend'] == ""){
                header("location:form.php?pg=1");

            }
            if($_SESSION['tool'] == ""){
                header("location:form.php?pg=1");

            }



            echo $page2;




        }
        if($_GET['pg']== 3  ){

            session_start();
            $animal = $_POST['animal'];
            $fruit= $_POST['fruit'];
            $verb = $_POST['verb'];

            $_SESSION['animal'] = $animal;
            $_SESSION['fruit'] = $fruit;
            $_SESSION['verb'] = $verb;



            if($_SESSION['animal'] == ""){
                header("location:form.php?pg=1");

            }
            if($_SESSION['fruit'] == ""){
                header("location:form.php?pg=1");

            }
            if($_SESSION['verb'] == ""){
                header("location:form.php?pg=1");

            }







            echo $page3;
            //$_SESSION['name'];
           // echo $_SESSION['name'];
        }
        if($_GET['pg']== 4  ){

            session_start();



            $where = $_POST['where'];
            $time = $_POST['time'];
            $creature = $_POST['creature'];

            $_SESSION['where'] = $where;
            $_SESSION['time'] = $time;
            $_SESSION['creature'] = $creature;



            if($_SESSION['where'] == ""){
                header("location:form.php?pg=1");

            }
            if($_SESSION['time'] == ""){
                header("location:form.php?pg=1");

            }
            if($_SESSION['creature'] == ""){
                header("location:form.php?pg=1");

            }





            echo $_SESSION['name'];
            echo $_SESSION['friend'];
            echo $_SESSION['tool'] ;


            echo $_SESSION['animal'];
            echo $_SESSION['fruit'];
            echo $_SESSION['verb'] ;



            echo $_SESSION['where'];
            echo $_SESSION['time'];
            echo $_SESSION['creature'];


            echo $page4;


        }

    }else{
        header("location:form.php?pg=1");




    }



    ?>

    <?php


    ?>

</div>

</div>

</body>

</html>
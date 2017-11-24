<?php
 require_once('db_core.php');
if(!isset($REG_TOKEN))
{
    $REG_TOKEN = 'login_form.php';
}

function displayMenu()
{
    //Display Menu Code ?>

    <nav class="navbar fixed-top menu">
        <div class="container-fluid">
            <div>
                <a class="blue_hyperlink" style="border:none;" href="http://localhost/Fabric" target="_self" class="nav-brand">
                    <span class="titletext_fabric">fabric
                    </span></a>
            </div>

            <form class="search_box_form" align="left" type="search">
                <input type="text" id="search_box" placeholder="Search">
            </form>
            <div>
                <ul class="menu_ul">
                    <li class="menu_item">
                        <a class="hyperlink" target="_self" href="<?php echo $_SESSION['user_un']?>">Profile</a></li>
                    <li class="menu_item">
                        <a class="hyperlink" href="logout.php" target="_self">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php }?>


    <!DOCTYPE html>

    <!--Created by Aravind on 10 Oct 2017-->
    <html lang="en">

    <head>
        <base target="_blank">
        <link rel="icon" href="images/needle.png">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>Fabric</title>
        <link rel="stylesheet" href="styles.css" type="text/css">


        <!----------------GOOGLE FONTS----------------------->
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
        <link rel="stylesheet" href="frameworks/animate.min.css">


        <!--SMOOTH SCROLL-->
        <script src="frameworks/TweenMax.min.js"></script>
        <script src="frameworks/ScrollToPlugin.min.js"></script>

        <!----------------BOOTSTRAP CSS----------------------->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>

    <body>
        <!--Insert searchbox menu when user is signed in-->
        <?php
                if(isLoggedIn())
                {
                   displayMenu();
                }
                else
                {
                      echo"<nav class='navbar menu nav-brand' style='border:none;'>
                <span class='titletext_fabric blue_hyperlink'>fabric</span>
                    </nav>";
                }
                ?>

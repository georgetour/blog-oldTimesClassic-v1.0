<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Old Times Classic games</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script async src="scripts/jquery-2.2.4.min.js"></script>

    <link href="bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="bootstrap.min.js">
    <script async src="scripts/index.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href="mainStylesheet.css" type="text/css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-inverse topBar">
    <div class="">
        <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><img class="logo" src="images/oldtimesclassicLogo.png"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">

            <ul class=" nav navbar-nav">
                <li><a class="menuBarLinks " href="recent.php">Recent</a></a></li>
                <li><a class="menuBarLinks" href="index.php">Most Popular</a></a></li>
                <li class="dropdown">
                    <a class="  dropdown-toggle" data-toggle="dropdown"  href="#">
                        by Genre
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="menuBarLinks" href="action.php">Action</a></li>
                        <li><a class="menuBarLinks" href="adventure.php">Adventure</a></li>
                        <li><a class="menuBarLinks" href="arcade.php">Arcade</a></li>
                        <li><a class="menuBarLinks" href="beatemup.php">Beat' Em Up</a></li>
                        <li><a class="menuBarLinks" href="platform.php">Platform</a></li>
                        <li><a class="menuBarLinks" href="rpg.php">RPG</a></li>
                        <li><a class="menuBarLinks" href="simulation.php">Simulation</a></li>
                        <li><a class="menuBarLinks" href="sports.php">Sports</a></li>
                        <li><a class="menuBarLinks" href="strategy.php">Strategy</a></li>
                    </ul>

                </li>
                <li> <a class="menuBarLinks " href="suggestagame.php">Suggest a game</a></li>
                <li> <a class="menuBarLinks " href="about.php">About</a></li>
                <li><a class="menuBarLinks " href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>

</nav><!--End top menu bar-->


<div class="container"><!--Main container below the navbar-->
    <h2 class="mainHeader">Old times classic games are games that YOU MUST definitely try.</h2>
    <div class="imageRow col-lg-12 col-md-12 col-xs-12  col-sm-12 ">
        <div class="">
            <img class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="imageSlide" src="">
        </div>

        <aside class=" col-lg-6 col-md-6 col-xs-12  col-sm-12 ">

            <h3 class="welcome">Welcome to old times classic games .</h3>
            <p>Here you will find games that are old times classic and unique .</p>
            <p>You must definetely try some of them if you like playing games.</p>
            <p>If you think a game isn't in our list, please Suggest a game and it will be added with your nickname.</p>

           <div>You have subscribed !Thank you!</div>
            <div><a href="index.php">Back to main page</a></div>


        </aside>

    </div>

</div>



<?php include "footer.php" ?>



</body>
</html>
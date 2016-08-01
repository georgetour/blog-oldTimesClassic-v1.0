<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simulation games</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script async src="scripts/jquery-2.2.4.min.js"></script>

    <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <script async src="scripts/index.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href="stylesheets/recentStylesheet.css" type="text/css" rel="stylesheet">


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
    <h2 class="mainHeader">Old times classic simulation games.</h2>
    <p class="genreDescirption">A simulation game is one that tries to simulate something from real life like flying a plane,
        managing a hospital or driving a racing car.
    </p>
    <div class="imageRow col-lg-12 col-md-12 col-xs-12  col-sm-12">
        <div class="col-lg-6 col-md-6 col-xs-12  col-sm-12  ">
            <img class=" imagesMaxheight img-responsive center-block  "  src="images/gameCovers/microsoft-flight-simulator-windows-95-windows.jpg">
        </div>

        <aside class="col-lg-6 col-md-6 col-xs-12  col-sm-12 testBorder">

            <h3 class="descriptionHeader  ">
                Microsoft flight Simulator
            </h3>
            <p>Release Date: 1982</p>
            <p>Type : Simulator</p>
            <p>Suggested by : George Toutsinakis</p>
            <p>Description:</p>

            <p>Microsoft flight simulator has a long history from back 1982. </p>
            <p>As the title says you try to  fly a plane.Though we have played versions after 1995, it's really a simulator.  </p>
            <p> I recommend this game to be played with flight sticks and whatever else you can have to make it more realistic. </p>
            <p>A historic simulation game that's an old Times Classic.  </p>

        </aside>

    </div>

    <div class="imageRow col-lg-12 col-md-12 col-xs-12  col-sm-12">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <img class="  imagesMaxheight img-responsive center-block" src="images/gameCovers/Theme_hospital.jpg">
        </div>

        <aside class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 testBorder">

            <h3 class="descriptionHeader">
                Theme Hospital
            </h3>
            <p>Release Date:  1997</p>
            <p>Type :Simulation</p>
            <p>Suggested by : George Tourtsinakis</p>
            <p>Description:</p>

            <p>Run, you patients need you else they will die.A dark humor approach to run a real hospital.  </p>
            <p> It was really nice and different playing this game back then .  </p>
            <p>Sometimes dark humor can fit some circumstances.</p>
            <p>It deserves being an old Times Classic title. </p>


        </aside>
    </div>
</div>


<?php include "footer.php" ?>




</body>
</html>
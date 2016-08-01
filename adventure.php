<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adventure Games</title>
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
    <h2 class="mainHeader">Old times classic adventure games.</h2>
    <p class="genreDescirption">In an adventure game you try to solve puzzles,riddles and strange mysteries so you can proceed.A lot of times it's confused
        with action but in an adventure game most of the times you are a simple human, not a die hard machine.
    </p>
    <div class="imageRow col-lg-12 col-md-12 col-xs-12  col-sm-12">
        <div class=" ">
            <img class="col-lg-6 col-md-6 col-sm-12 col-xs-12 imagesMaxheight "  src="images/gameCovers/the-secret-of-monkey-island.jpg">
        </div>

        <aside class="col-lg-6 col-md-6 col-xs-12  col-sm-12 testBorder">

            <h3 class="descriptionHeader  ">
                The secret of the Monkey Island
            </h3>
            <p>Release Date: 1990</p>
            <p>Type : Adventure</p>
            <p>Suggested by : George Toutsinakis</p>
            <p>Description:</p>

            <p>The secret of the monkey island has great pirate plot and humor.   </p>
            <p>The graphics were  really great for its age and the story also. </p>
            <p>Something different that deserves being an old Times Classic. </p>


        </aside>

    </div>

    <div class="imageRow col-lg-12 col-md-12 col-xs-12  col-sm-12">
        <div class="">
            <img class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 imagesMaxheight" src="images/gameCovers/myst-box-art.jpg">
        </div>

        <aside class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 testBorder">

            <h3 class="descriptionHeader">
                Myst
            </h3>
            <p>Release Date:  1993</p>
            <p>Type : Adventure</p>
            <p>Suggested by : George Tourtsinakis</p>
            <p>Description:</p>

            <p>When I played myst back then I said this isn't a game, it 's a movie or something.</p>
            <p>Amazing story and graphics that I think it 's one of the fathers of adventure games. </p>
            <p>Even if you don't like adventure games you should really try this old Times Classic title. </p>


        </aside>

    </div>



</div>




<?php include "footer.php" ?>




</body>
</html>
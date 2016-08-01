<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sports games</title>
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
    <h2 class="mainHeader">Old times classic sport games.</h2>
    <p class="genreDescirption">Sport games don't need description.Basketball,football,soccer and whatever else that requires
        physical ability and skills is considered that.
    </p>


    <div class="imageRow col-lg-12 col-md-12 col-xs-12  col-sm-12">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <img class="  imagesMaxheight img-responsive center-block" src="images/gameCovers/tekhan_world_cup.gif">
        </div>

        <aside class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 testBorder">

            <h3 class="descriptionHeader">
                Tehkan World Cup
            </h3>
            <p>Release Date:  1985</p>
            <p>Type :Sports</p>
            <p>Suggested by : George Tourtsinakis</p>
            <p>Description:</p>

            <p>Oh man this game took a lot of my coins .  </p>
            <p> Fantastic two player or single player game that evolved through years and gave us amazing sequels.  </p>
            <p>I miss games like Tehkan world cup.</p>
            <p>Of course it has a place as an old Times Classic. </p>


        </aside>
    </div>

    <div class="imageRow col-lg-12 col-md-12 col-xs-12  col-sm-12">
        <div class="col-lg-6 col-md-6 col-xs-12  col-sm-12  ">
            <img class=" imagesMaxheight img-responsive center-block  "  src="images/gameCovers/Nba-live-95.jpg">
        </div>

        <aside class="col-lg-6 col-md-6 col-xs-12  col-sm-12 testBorder">

            <h3 class="descriptionHeader  ">
                NBA live 95
            </h3>
            <p>Release Date: 1994</p>
            <p>Type : Sports</p>
            <p>Suggested by : George Toutsinakis</p>
            <p>Description:</p>

            <p>NBA live 95 had really unique and stylish gameplay . </p>
            <p>I remember seeing small tournaments and a lot of people playing it.  </p>
            <p> Even if you don;t like basketball you can try this title to see what we mean by gameplay. </p>
            <p>Unforgettable old Times Classic game.   </p>

        </aside>

    </div>



</div>



<?php include "footer.php" ?>




</body>
</html>
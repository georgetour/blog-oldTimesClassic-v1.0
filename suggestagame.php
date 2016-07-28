<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Suggest a game</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script async src="scripts/jquery-2.2.4.min.js"></script>

    <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <script async src="scripts/index.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href="stylesheets/suggestAgameStylesheet.css" type="text/css" rel="stylesheet">


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
            <a class="navbar-brand" href="index.html"><img class="logo" src="images/oldtimesclassicLogo.png"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">

            <ul class=" nav navbar-nav">
                <li><a class="menuBarLinks " href="recent.html">Recent</a></a></li>
                <li><a class="menuBarLinks" href="index.html">Most Popular</a></a></li>
                <li class="dropdown">
                    <a class="  dropdown-toggle" data-toggle="dropdown"  href="#">
                        by Genre
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="menuBarLinks" href="action.html">Action</a></li>
                        <li><a class="menuBarLinks" href="adventure.html">Adventure</a></li>
                        <li><a class="menuBarLinks" href="arcade.html">Arcade</a></li>
                        <li><a class="menuBarLinks" href="beatemup.html">Beat' Em Up</a></li>
                        <li><a class="menuBarLinks" href="platform.html">Platform</a></li>
                        <li><a class="menuBarLinks" href="rpg.html">RPG</a></li>
                        <li><a class="menuBarLinks" href="simulation.html">Simulation</a></li>
                        <li><a class="menuBarLinks" href="sports.html">Sports</a></li>
                        <li><a class="menuBarLinks" href="strategy.html">Strategy</a></li>
                    </ul>

                </li>
                <li> <a class="menuBarLinks " href="suggestagame.php">Suggest a game</a></li>
                <li> <a class="menuBarLinks " href="about.html">About</a></li>
                <li><a class="menuBarLinks " href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>

</nav><!--End top menu bar-->

<div class="container"><!--Main container below the navbar-->
    <h2 class="mainHeader">This is <strong>YOUR</strong> SECTION! Suggest a game !</h2>
    <p class="genreDescirption">
        We have heard many games that we didn't know from friends and others so if you think
        a game must be an old Times Classic bring it on.
    </p>
    <div class="row ">
        <form class=" col-lg-12 col-md-12 col-xs-12  col-sm-12" role="form">
            <div class="  col-lg-6 col-md-6 col-md-12 col-xs-12 ">

                <div class="formRow ">
                <label  class=" ">Game Title : </label>
                <input class="formField"  placeholder="ex Pac-man" type="text">
                </div>

                <div class=" formRow">
                    <label  class="">Release Date : </label>
                <input class="formField"  placeholder="ex 1995" type="text">
                </div>
                <div class=" formRow ">
                    <label  class="">Type : </label>
                    <input class="formField"  placeholder="ex Sports" type="text">
                </div>
                <div class=" formRow ">
                    <label  class=" descriptionLabel">Suggested By : </label>
                    <input class="formField "  placeholder="full name or nickname" type="text">


                </div>

                <div class=" formRow  ">
                    <label  class="descriptionLabel">Email : </label>
                    <input class="formField"  placeholder="News and your game" type="text">
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-md-12 col-xs-12">
                <div class="   descriptionLabel">
                    <label  class=" ">Description :</label>
                    <textarea class="formField formDescription"  placeholder="Be short like our descriptions" type="text" rows="5"></textarea>

                </div>
                <div>Captcha</div>
                <div><input class="submitButton" type="submit" value="Suggest a game!"></div>
            </div>

        </form>

    </div>


</div>






<footer class="footerContainer">

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 ">
        <div class="col-lg-3 col-md-3 col-xs-12  col-sm-12   ">
            <div class=" signature col-lg-3 col-md-3 col-xs-4 col-sm-4 ">
                <a  href="about.html">About</a>
            </div>
            <div class="signature col-lg-3 col-md-3  col-xs-4 col-sm-4 ">
                <a  href="contact.html">Contact</a>
            </div>
            <div class="signature col-lg-3 col-md-3 col-xs-4 col-sm-4 ">
                <a  href="privacy.html">Privacy</a>
            </div>
        </div>

        <div class="copyrights col-lg-9 col-md-9 col-xs-12  col-sm-12 ">
            <a href="copyright.html">Copyrights© 2016 <span class="signatureText">George Tourtsinakis</span></a>
        </div>
    </div>

</footer>




</body>
</html>
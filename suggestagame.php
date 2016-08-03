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
    <script async src="scripts/suggestAgame.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href="stylesheets/suggestAgameStylesheet.css" type="text/css" rel="stylesheet">


</head>
<body>

<?php include 'navbar.php'?>

<div class="container"><!--Main container below the navbar-->
    <h2 class="mainHeader">This is <strong>YOUR</strong> SECTION! Suggest a game !</h2>
    <p class="genreDescirption">
        We have heard many games that we didn't know from friends and others so if you think
        a game must be an old Times Classic bring it on.
    </p>
    <div class="row ">
        <form id="suggestAgameForm" class=" col-lg-12 col-md-12 col-xs-12  col-sm-12" method="post" action="suggestAgameToDB.php">
            <div class="  col-lg-6 col-md-6 col-md-12 col-xs-12 ">

                <div class="formRow ">
                <label  class=" ">Game Title : </label>
                <input id="gameTitle" class="form-control"  placeholder="ex Pac-man" type="text" name="gameTitle"maxlength="25" required>
                </div>

                <div class=" formRow">
                    <label  class="">Release Date : </label>

                    <select class="form-control" id="sel1" name="genreSelect">
                        <option value="1980">< 1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>

                    </select>

                </div>
                <div class=" formRow ">
                    <div class="">
                        <label for="sel1">Select list:</label>
                        <select class="form-control" id="sel1" name="genreSelect">
                            <option value="Action">Action</option>
                            <option value="Adventure">Adventure</option>
                            <option value="Arcade">Arcade</option>
                            <option value="Beat'Em Up">Beat'Em Up</option>
                            <option value="Platform">Platform</option>
                            <option value="RPG">RPG</option>
                            <option value="Simulation">Simulation</option>
                            <option value="Sports">Sports</option>
                            <option value="Strategy">Strategy</option>

                        </select>
                    </div>

                </div>
                <div class=" formRow ">
                    <label  class=" descriptionLabel">Suggested By : </label>
                    <input id="suggestedBy" class="form-control "  placeholder="full name or nickname" type="text" name="suggestedBy" maxlength="50" required >


                </div>

                <div class=" formRow  ">
                    <label  class="descriptionLabel">Email : </label>
                    <input id="email" class="form-control"  placeholder="Your email" type="email" name="email" required>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-md-12 col-xs-12">
                <div class="formRow">
                    <label  class="des ">Description :</label>
                    <textarea id="description" class="form-control "  placeholder="Be short like our descriptions" type="text" rows="5" name="description" required></textarea>

                </div>
                <div>Captcha</div>
                <div><input name="suggestAgameSubmit" class="submitButton" type="submit" value="Suggest a game!"></div>
                <div id="error">bee</div>
            </div>

        </form>

    </div>


</div>


<?php include "footer.php" ?>




</body>
</html>
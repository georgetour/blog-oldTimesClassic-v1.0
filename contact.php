<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script async src="scripts/jquery-2.2.4.min.js"></script>

    <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <script async src="scripts/contact.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href="stylesheets/suggestAgameStylesheet.css" type="text/css" rel="stylesheet">


</head>
<body>

<?php include 'navbar.php'?>

<div class="container"><!--Main container below the navbar-->
    <h2 class="mainHeader">Contact Me</h2>
    <p class="genreDescirption">
       If you would like to contact me for anything related to this site send me an email at <cite>hello@oldtimesclassic.com</cite>
        or fill the form below.
    </p>

        <form id="contact" class=" col-lg-4 col-md-4 col-xs-12  col-sm-12" method="post" action="contactFormToEmail.php">


                <div class="formRow ">
                    <label  class=" ">Subject : </label>
                    <input id="gameTitle" class="form-control" pattern=".{5,}" placeholder="I love this site(min 5 chars)" type="text" name="emailSubject"maxlength="25" required>
                </div>

                <div class=" formRow  ">
                    <label  class="descriptionLabel">Email : </label>
                    <input id="email" class="form-control"  placeholder="Your email" type="email" name="email" required>
                </div>



                <div class="formRow">
                    <label  class="des ">Message :</label>
                    <textarea id="description"  class="form-control "   type="text" rows="5" name="description" required></textarea>

                </div>

                
                <div><input name="makeContact" class="submitButton" type="submit" value="Make Contact"></div>
            <div id="error">Error to display</div>
           

        </form>




</div><!--End container -->


<?php include "footer.php" ?>




</body>
</html>
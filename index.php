<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Old Times Classic games</title>
    <link href="mainStylesheet.css" type="text/css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script async src="scripts/index.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>

<body>

<?php include 'navbar.php'?>

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

            <form id="subscribeForm" method="post" class="subscribeForm" action="subscriberToDB.php">
                <p>
                <p>Subscribe to receive news for old times classic games.</p>
                <label>Subscribe Field:</label>
                <input id="email" class="subsrcibeField" type="email" required placeholder="Your Email" name="email">
                <button id="subscribeButton" type="submit" class="subscribeButton" name="subscribeSubmit"  >Subscribe</button>
                </p>
                <p class="subscribePrivacy">Remember that we respect your privacy so read below about subscribing.</p>
            </form>
            <div id="error" class="errorMessage">Please enter valid email</div>

        </aside>

    </div>

</div>



<?php include "footer.php" ?>



</body>
</html>
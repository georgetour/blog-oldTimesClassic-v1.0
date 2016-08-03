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
    <script async src="scripts/suggestAgame.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href="stylesheets/suggestAgameStylesheet.css" type="text/css" rel="stylesheet">


</head>
<body>

<?php include 'navbar.php'?>

<div class="container"><!--Main container below the navbar-->
    
    <?php include 'contactFormToEmail.php'?>
    <h1>
        <?php echo $formSubmitted?>
    </h1>
    <div > 
        <?php echo $error_message?>  
    </div>
    <div><a href="contact.php">Back to form</a></div>
    <div><a href="index.php">Back to Main Page</a></div>



</div><!--End container -->


<?php include "footer.php" ?>




</body>
</html>
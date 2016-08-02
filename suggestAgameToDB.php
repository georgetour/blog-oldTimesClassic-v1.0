<?php

include 'suggestedAgame.php';

$pass = '';
$user = 'root';
$db_host = 'localhost';
$db = 'games';

//flag variable
$flag = 0;

//Protect sql injection
function protect($string){
    global $connectToDB ;
    return mysqli_real_escape_string($connectToDB,$string);

}

if(isset($_POST['suggestAgameSubmit'])){

    //Store variables from form
    $gameTitle = $_POST['gameTitle'];
    $releaseDate = $_POST['releaseDate'];
    $genre = $_POST['genreSelect'];
    $suggestedBy = $_POST['suggestedBy'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    $dateAdded = date('d-m-Y');


    // mail($to,$subject,$message,$from);

    //Store the connection to a variable
    $connectToDB = mysqli_connect($db_host,$user,$pass,$db)OR die ('Some Problem with the database' .mysqli_connect_error());

    if(!$connectToDB){
        die ('Some Problem with the database' .mysqli_connect_error());
    }

    if(!empty($gameTitle)){
        $gameTitle = protect($gameTitle);
        $flag = 1;
    }

    if(!empty($releaseDate)){
        $releaseDate = protect($releaseDate);
        $flag = 1;
    }

    if(!empty($genre)){
        $genre = protect($genre);
        $flag = 1;
    }

    if(!empty($suggestedBy)){
        $suggestedBy = protect($suggestedBy);
        $flag = 1;
    }

    if(!empty($email)){
        $email = protect($email);
        $flag = 1;
    }
    if(!empty($description)){
        $description = protect($description);
        $flag = 1;
    }

    if(!empty($dateAdded)){

        $dateAdded = protect($dateAdded);
    }

    else{
        $flag =0;
        die('Empty field detected'.mysqli_error($connectToDB));
    }
    //Create the query for the database with .= you continue the line
    $query = "INSERT INTO game(gameTitle,releaseDate,genre,suggestedBy,email,dateAdded,description)";
    $query .= "VALUES('$gameTitle','$releaseDate','$genre','$suggestedBy','$email','$dateAdded','$description')";

    mysqli_query($connectToDB,$query)OR die("Inserting failed". mysqli_error($connectToDB));

    //close connection
    mysqli_close($connectToDB);


}







?>


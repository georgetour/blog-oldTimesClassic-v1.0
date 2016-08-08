<?php

include 'createSubscribersDB.php';
include 'subscribed.php';

//Variables to use so we can connect to db
$pass = '';
$user = 'root';
$db_host = 'localhost';
$db = 'subscribers';


//A function to protect database from sqli injection
function protect($string){
    global  $connectToDB;
    return mysqli_real_escape_string($connectToDB,trim($string));
}


//Check if submit have been pressed
if(isset($_POST['subscribeSubmit'])){
    //Store the email from post to a variable
    $email = $_POST['email'];


//Variables to use so we send email to us and the subscriber
    $to = "subscribed@oldtimesclassic.com";
    $subject ="We have one more subscriber!";
    $message = "User". $email . "has subscribed " ;
    $from = 'From:'.$email;

    //We need email server for this to run
   // mail($to,$subject,$message,$from);

    //Store the connection to a variable
    $connectToDB = mysqli_connect($db_host,$user,$pass,$db)OR die ('Some Problem with the database' .mysqli_connect_error());

    //If email is not empty make it protected
    if(!empty($email)){
        $protectedEmail = protect($email);


    }
    else{
       die('Empty field detected'.mysqli_error($connectToDB));
    }


    //Create the query for the database with .= you continue the line
    $query = "INSERT INTO subscriber(email)";
    $query .= "VALUES('$protectedEmail')";

    mysqli_query($connectToDB,$query);

    //close connection to db
    mysqli_close($connectToDB);
    



}





?>
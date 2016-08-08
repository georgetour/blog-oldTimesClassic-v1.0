<?php

//variables to use so we connect to mysql server
$pass = '';
$user = 'root';
$db_host = 'localhost';


//Open the connection to mysql server
$dbc = mysqli_connect($db_host,$user,$pass)OR die('Something wrong with the DB'.mysqli_connect_error());

//Query to pass in DB
$query = 'CREATE DATABASE subscribers';


//First parameter the DB to connect second parameter the  query we want to pass
mysqli_query($dbc,$query);


//Let's store the string for the table query
$tableQuery = 'CREATE TABLE subscriber(
               id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
               email VARCHAR(250) 
                

)';

//Variale for the new database
$db = 'subscribers';

//Variable for the new connection
$connectToGamesDB = mysqli_connect($db_host,$user,$pass,$db)OR die('Database failure connection '.mysqli_connect_error());

//Create the table for the games DB
mysqli_query($connectToGamesDB,$tableQuery);

?>


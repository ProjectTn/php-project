<?php

//connection file mta3 el admin w front end
$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "online_rest";  //database

// asna3 connection 
$db = mysqli_connect($servername, $username, $password, $dbname); 
// VERIFI 
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>
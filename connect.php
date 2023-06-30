<?php
$servername = "127.0.0.1";
$username = "Agamista";
$password = "Agamista135$";
$database = "TrackTok" ;

$connection = new mysqli($servername, $username, $password );

 if(!$connection){
  die("Database Connection Failed" . mysqli_error($connection));
 }
 
$select_db = mysqli_select_db($connection, $database );
if(!$select_db){
 die("Database Selection Failed" . mysqli_error($connection));
}
?>

 
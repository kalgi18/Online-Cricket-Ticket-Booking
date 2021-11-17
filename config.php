<?php

session_start();

define('DBSERVER', 'localhost');
define('DBUSERNAME', 'root');
define('DBPASSWORD', 'Kmysql#1804');
define('DBNAME', 'cricket_ticket_booking_system');

//connect to mysql database
$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

//check db connection
if($db == false){
    die("Cannot connect to database. ".mysqli_connect_error());
}

//check if user is already logged in
if(isset($_SESSION["userid"]) && $_SESSION["userid"]===true){
    header("location: index2.php");
    exit;
}

?>
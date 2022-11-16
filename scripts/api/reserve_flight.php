<?php

session_start();

if(!isset($_SESSION["token"])) {
    header('location: ../../personal.php');
    
    die();
}

require_once 'token.php';
require_once 'database.php';

$token_data = token_decode($_SESSION["token"]);
$user_id = $token_data["userid"];

$flight_id = $_GET["flightid"];

$reserved_flights = mysqli_query($database, "SELECT * FROM `ReservedFlights` WHERE `user_id` = '$user_id' AND `flight_id` = '$flight_id'");
if(mysqli_num_rows($reserved_flights) > 0) {
    echo "Already reserved.";
    header('location: ../../personal.php');

    die();
}

mysqli_query($database, "INSERT INTO `ReservedFlights` (`id`, `user_id`, `flight_id`) VALUES (NULL, '$user_id', '$flight_id')");

header('location: ../../personal.php');

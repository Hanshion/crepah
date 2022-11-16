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

mysqli_query($database, "DELETE FROM `ReservedFlights` WHERE `ReservedFlights`.`flight_id` = $flight_id AND `ReservedFlights`.`user_id` = $user_id");

header('location: ../../personal.php');

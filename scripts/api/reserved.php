<?php

session_start();

if(!isset($_SESSION["token"])) {
    die();
}

require_once 'token.php';
require_once 'database.php';

$token_data = token_decode($_SESSION["token"]);
$user_id = $token_data["userid"];

$reserved_flights = mysqli_query($database, "SELECT * FROM `ReservedFlights` WHERE `user_id` = '$user_id'");

$flights_array = array();

while($reserved_flight = $reserved_flights->fetch_assoc()) {
    $flight_id = $reserved_flight["flight_id"];

    $flight_row = mysqli_query($database, "SELECT * FROM `Flights` WHERE `id` = '$flight_id'");
    $flight_data = mysqli_fetch_array($flight_row);

    $flights_array[] = $flight_data;
}

echo json_encode($flights_array);

<?php

require_once 'database.php';

$flight_rows = mysqli_query($database, "SELECT * FROM `Flights`");
$flights_array = array();

while($row = $flight_rows->fetch_assoc()) {
    $flights_array[] = $row;
}

echo json_encode($flights_array);

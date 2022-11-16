<?php

$database = mysqli_connect('localhost', 'root', null, 'RoyalAirlines');

if(!$database) {
    die('Failed to connect to the database: ' . mysqli_connect_error());
}

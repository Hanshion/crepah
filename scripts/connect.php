<?php

$connect = mysqli_connect('localhost', 'root', null, 'RoyalAirlines');

if(!$connect){
    die('Error connect to database');
}
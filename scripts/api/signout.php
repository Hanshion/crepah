<?php

session_start();

if(isset($_SESSION["token"])) {
    unset($_SESSION["token"]);

    $_SESSION['message'] = "";
    header('location: ../../index.php');
}

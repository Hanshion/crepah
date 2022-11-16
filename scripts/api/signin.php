<?php

session_start();

if(isset($_SESSION['token'])) {
    header('location: ../../personal.php');

    die();
}

require_once 'database.php';
require_once 'token.php';

$login = $_POST['login'];
$password = $_POST['password'];

$password_hash = hash("sha256", $password);

$user_row = mysqli_query($database, "SELECT * FROM `Users` WHERE `login` = '$login' AND `password` = '$password_hash'");

if(mysqli_num_rows($user_row) > 0) {
    $cols = mysqli_fetch_array($user_row);
    $_SESSION['token'] = token_encode($cols["id"], $cols["password"], $cols["login"]);

    $_SESSION['message'] = "Вы вошли в учётную запись!";

    header('location: ../../personal.php');
} 
else {
    $_SESSION['message'] = 'Неверный логин или пароль';
    
    header('location: ../../login.php');
}

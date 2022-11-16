<?php
session_start();

require_once 'database.php';

$login = $_POST['login'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

$existing_user_row = mysqli_query($database, "SELECT * FROM `Users` WHERE `login` = '$login'");
if(mysqli_num_rows($existing_user_row) > 0) {
    $_SESSION['message'] = "Пользователь уже существует!";

    header('location: ../../login.php');

    die();
}

if ($password === $password_confirm) {
    $password_hash = hash("sha256", $password);
    
    mysqli_query($database, "INSERT INTO `Users` (`login`, `password`) VALUES ('$login', '$password_hash')");

    $_SESSION['message'] = "Регистрация прошла успешно!";

    header('location: ../../login.php');
} 
else {
    $_SESSION['message'] = 'Пароли не совпадают';

    header('location: ../../login.php');
}

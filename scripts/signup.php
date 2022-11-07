<?php
session_start();
require_once 'connect.php';
// $connect = mysqli_connect('localhost', 'root', null, 'RoyalAirlines');

$login = $_POST['login'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm){
    if (mysqli_query($connect, "INSERT INTO `Users` (`login`, `password`) VALUES ('$login', '$password')")){
    mysqli_query($connect, "INSERT INTO `Users` (`login`, `password`) VALUES ($login, $password)");
    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('location: ../login.php');
} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('location: ../login.php');
};
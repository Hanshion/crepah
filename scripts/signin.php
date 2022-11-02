<?php

session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = $_POST['password'];

$check_user = mysqli_query($connect, "SELECT * FROM `Users` WHERE 'login' = '$login' AND 'password' = '$password'");
if(mysqli_num_rows($check_user) > 0){
    $_SESSION['message'] = 'Вы вошли в учётную запись!';
    header('location: ../login.php');
} else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('location: ../login.php');
};
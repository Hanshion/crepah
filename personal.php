<?php
    require_once 'scripts/api/token.php';

    session_start();
    if(!isset($_SESSION["token"])) {
        echo "Вы должны сначала войти в систему.";

        header('location: login.php');

        die();
    }

    $token = $_SESSION["token"];
    $token_data = token_decode($token);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/personal-style.css">
    <title>Личный кабинет</title>
</head>
<body>
    <main>
        <header>
            <div class="user">
                <img src="images/user.png" alt="" class="user-icon">
                <?php
                    $username = $token_data["login"];

                    echo "<p class='username'>$username</p>";
                ?>
            </div>
            <ol>
                <a href="index.php"><li><img src="images/home.png" alt="" class="icon">Главная</li></a>
                <a href="flights.html"><li><img src="images/plane.png" alt="" class="icon">Рейсы</li></a>
                <a href="news.html"><li><img src="images/newspaper.png" alt="" class="icon">Новости</li></a>
                <a href="scripts/api/signout.php"><li class="li-exit"><img src="images/exit.png" alt="" class="icon">Выход</li></a>
            </ol>
        </header>
        <div class="bron-flights"><hr class="bron-hr"><p class="bron-flights-text">Забронированные рейсы</p><hr class="bron-hr"></div>
        <div id="reserved-flights-container">
        </div>
    </main>
</body>
<script src="scripts/client/flights-lib.js"></script>
<script src="scripts/client/personal-script.js"></script>
</html>

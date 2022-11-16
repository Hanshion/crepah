<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Royal Airlines</title>
	<link rel="stylesheet" href="styles/index-style.css">
	<link rel="icon" type="image/ico" href="images/title-icon.png">
</head>
<body>
	<header>
		<p class="greeting">Приветствуем</p>
		<div class="perehodic">
			<a href="#m"><img class="imgp" src="images/perehod.png" alt=""></a>
		</div>
		<div class="clouds">
			<img class="cloudimg" src="images/cloud1.png" style="--i:1;">
			<img class="cloudimg" src="images/cloud2.png" style="--i:2;">
			<img class="cloudimg" src="images/cloud3.png" style="--i:3;">
			<img class="cloudimg" src="images/cloud4.png" style="--i:4;">
			<img class="cloudimg" src="images/cloud5.png" style="--i:5;">	
			</style>
		</div>
	</header>
	<main id="m">
		<div class="header">
			<div class="co-name">
				<img class="logo" src="images/logo.png" alt="">
				<p class="logoname">ROYAL AIRLINES</p>
			</div>
			<div class="nav">
				<ol class="nav-ol">
					<li class="nav-li"> <a href=""><img src="images/home.png" class="logo-icon" alt=""><p class="shit-fuck">Главная</p></a> </li>
					<li class="nav-li"> <a href="news.html"><img src="images/newspaper.png" class="logo-icon" alt=""><p class="shit-fuck">Новости</p></a> </li>
					<li class="nav-li"> <a href="flights.html"><img src="images/plane.png" class="logo-icon" alt=""><p class="shit-fuck">Рейсы</p></a></li>

					<?php
						if(!isset($_SESSION["token"])) {
							echo '<li class="nav-li"> <a href="login.php"><img src="images/user.png" class="logo-icon mega-shit-icon" alt=""><p class="shit-fuck">Вход</p></a> </li>';
						}
						else {
							echo '<li class="nav-li"> <a href="personal.php"><img src="images/user.png" class="logo-icon mega-shit-icon" alt=""><p class="shit-fuck">Кабинет</p></a> </li>';
						}
					?>
				</ol>
			</div>
		</div>
		<div class="about-company">
			<img id="plane" src="images/plane.jpg" alt="">
			<h2>ROYAL AIRLINES</h2>
			<h3>Самая надёжная и престижная авиакомпания в мире.</h3>
		</div>
	</main>
	<footer>
		<div class="icons">
			<ol class="nav-ol1">
				<li class="nav-li1"><a href="https://vk.com/feed"><img class="icon" src="images/vk.png" alt=""></a></li>
				<li class="nav-li1"><a href="https://www.google.com"><img class="icon" src="images/google.png" alt=""></a></li>
				<li class="nav-li1"><a href="https://investor.twitterinc.com/home/default.aspx"><img class="icon" id="goog" src="images/twitter.png" alt=""></a></li>
			</ol>
		</div>
	</footer>
</body>
</html>

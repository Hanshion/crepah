<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<title>Вход</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' type='text/css' media='screen' href='styles/login-style.css'>
</head>

	<form class="main-block signin-form" action="scripts/signin.php" method="post">
		<p class="login-main-text">Вход</p> 
		<hr class="separator">
		<div class="login-block">
			<div class="login">
				<p class="login-text">Логин:</p>
				<input type="text" name="login" required class="login-input">
			</div>
			<div class="password">
				<p class="password-text">Пароль:</p>
				<input type="password" name="password" required class="password-input">
			</div>
			<div class="forgor-registration">
				<p class="forgor-text a-text">Забыли пароль?</p>
				<p class="registration-text a-text registration-drop" data-id="registertext">Регистрация</p>
			</div>
		</div>
		<div class="div-button div-login-button" data-id="loginbutton">
			<p class="alert login-alert">
			    <?php
				if ($_SESSION['message']){
					echo '<p class="alert register-alert">'.$_SESSION['message'].'</p>';
				}
				unset($_SESSION['message']);
				?>
			</p> <!-- Для ошибок по типу неправильного ввода пороля -->
			<button class="login-button" type="submit">Вход</button>
		</div>
	</form>

	<form class="main-block signup-form" action="scripts/signup.php" method="post" enctype="multipart/form-data">
		<p class="login-main-text">Регистрация</p> 
		<hr class="separator">
		<div class="login-block">
			<div class="login">
				<p class="login-text">Логин:</p>
				<input type="text" name="login" required class="login-input">
			</div>
			<div class="password">
				<p class="password-text">Пароль:</p>
				<input type="password" name="password" required class="password-input">
			</div>
			<div class="password">
				<p class="password-text">Подтвердите пароль:</p>
				<input type="password" name="password_confirm" required class="password-input">
			</div>
			<div class="forgor-registration">
				<p class="forgor-text a-text">Забыли пароль?</p>
				<p class="registration-text a-text login-drop" data-id="logintext">Вход</p>
			</div>
		</div>
		<div class="div-button div-register-button" data-id="registerbutton">
			<p class="alert register-alert">
			</p> <!-- Для ошибок по типу неправильного ввода пороля -->
			<button class="login-button register-button" type="submit">Зарегистрироваться</button>
		</div>
	</form>

	<div class="return">
		<a href="index.html">
			<img src="images/return.png" class="return-icon" alt="">
			<p class="return-text">Вернуться</p>
		</a>
	</div>
</body>
<script src="scripts/login-script.js"></script>
</html>
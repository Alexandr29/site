<!DOCTYPE html>
<html lang="en,ru">
<head>
	<meta charset="UTF-8">
	<title>MyShopOnline</title>
	<meta name="descripton" content="Мой интернет магазин"/>
	<meta name="keywords" content="Одежда,товары, покупки онлайн">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="main">
		<div class="header">
			<div class="logo">
				<div class="logo_text">
					<h1><a href="index.php">Мой Магазин</a></h1>
					<h4>Добро пожаловать</h4>
				</div>	
			</div>
			<div class="menubar">
				<ul class="menu">
					<li class="selected"><a href="#">Главная</a></li>
					<li> <a href="#">Мужская одежда</a></li>
					<li> <a href="#">Женская одежда</a></li>
					<li> <a href="#">Детская одежда</a></li>
					<li> <a href="#">Контакты</a></li>
				</ul>
			</div>
		</div>
		<form action="testreg.php" method="post">
		<p>
			<label>Login:<br></label>
			<input name="login" type="text" size="15" maxlength="15">
		</p>

		<p>
			<label>Password:<br></label>
			<input name="password" type="password" size="15" maxlength="15">
		</p>

		<p>
			<input type="submit" name="submit" value="Войти">

			<!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 
			<br>
			<!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** --> 
			<a href="reg.php">Registration</a> 
		</p></form>	
</body>
</html>
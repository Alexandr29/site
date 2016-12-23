<!DOCTYPE html>
<html lang="en,ru">
<head>
	<meta charset="UTF-8">
	<title>StartPage</title>
	<meta name = "description" content = "Гитара и всё что с ней связано"/>
	<meta name = "keywords" content = "Табы, аккорды, ноты, гитара, песни"/>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	
	<div class="main">
		<div class="header">
			<div class="logo">
				<h1><a href="index.php">GuitarHub</a></h1>
			</div>
			<div class="menubar">
				<ul class="menu">
					<li class="selected"><a href="index.php">Главная</a></li>
					<li><a href="#">Новости</a></li>
					<li><a href="#">Материалы</a></li>
					<li><a href="#">Магазин</a></li>
					<li><a href="#">О нас</a></li>
				</ul>	
			</div>
		</div>
	</div>
<div class="auth">
	<form action="login.php" method="post">
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
			<br>

		</p></form>	
		<a href="reg.php">Registration</a></div>
</div>
	

	</body>
	</html>
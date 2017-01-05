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
					<li class="selected">
						<a href="index.php">Главная</a>
					</li>
					<li>
						<a href="#">Новости </a>
						<ul class="sub">
							<li><a href="#">Продукты</a></li>
							<li><a href="#">Команда</a></li>
						</ul>

					</li>
					<li><a href="#">Материалы </a>
						<ul class="sub">
							<li><a href="#">Продукты</a></li>
							<li><a href="#">Команда</a></li>
						</ul>
					</li>
					<li><a href="#">Магазин </a></li>
					<li><a href="info.php">Информация </a></li>
				</ul>	
			</div>
			<div class="content">
				<button class="show_popup" rel="popup1">Вход</button>
				<div class="overlay_popup"></div>
				<div class="auth" id="popup1">
					<div class="object">
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
								<a href="reg.php">Регистрация</a>
							</p>		
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1686.8623839245781!2d36.23084722145314!3d50.007604579088614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1483647375953" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</body>
</html>
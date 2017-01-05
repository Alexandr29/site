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
					<li><a href="#">Информация </a></li>
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
	<div id="galleryWrapper">
		<div class="arrowBox"><img id="leftArrow" src="assets/img/left.png"></img></div>
		<div id="gallery"><img id="image" src="assets/img/1.jpg"></img></div>
		<div class="arrowBox"><img  id="rightArrow" src="assets/img/right.png"></img></div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>	
	<script src="scripts.js"></script>
</body>
</html>
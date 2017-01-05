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
		
		</div>
		<button class="show_popup_login" rel="popup1">Вход</button>
			
		</div>

		<div class="overlay_popup">
			<div class="auth" id="popup1">
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
					</p>
				</form>	
				<a href="reg.php">Registration</a>
			</div>
		</div>
	</div>
	
	<script src="scripts.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	</body>
	</html>
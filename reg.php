<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
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
<h2>Registration</h2>
    <form action="save_user.php" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
<p>
    <label>Логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<p>
    <label>Пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
    <input type="submit" name="submit" value="Зарегистрироваться">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p></form>
</body>
</html>
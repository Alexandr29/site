<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en,ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
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
</div>

<?php
$connection = mysqli_connect('localhost', 's97248pw_beta', '*63K%ACX', 's97248pw_beta') or die(mysqli_error());

if (isset($_POST['submit'])) 
{
    if (empty($_POST['login'])) 
    {
        $info_input = 'Вы не ввели логин';
    }
    elseif (empty($_POST['password'])) 
    {
        $info_input = 'Вы не ввели пароль';
    }
    else 
    {    
        $login = $_POST['login'];
        $password = $_POST['password'];            
        $user = mysqli_query($connection, "SELECT `id` FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
        $id_user = mysqli_fetch_array($user);
                
        if (empty($id_user['id'])) 
        {
            $info_input = 'Введенные данные не верны';
        }
        else 
        {
            $_SESSION['password'] = $password; 
            $_SESSION['login'] = $login; 
            $_SESSION['id'] = $id_user['id']; 

            $info_input = 'Вы успешно вошли в систему';         
        }     
    }
}
        
$info_input = isset($info_input) ? $info_input : NULL;
echo $info_input;
?>

</body>
</html>
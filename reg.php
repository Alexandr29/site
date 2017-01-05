<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title>Регистрация</title>
</head>
<body>

	<form action="reg.php" method="POST" />
	<table>
		<tr>
			<td>Введите логин:</td>
			<td><input type="text" size="20" name="login" /></td>
		</tr>
		<tr>
			<td>Введите пароль:</td>
			<td><input type="password" size="20" maxlength="20" name="password" /></td>
		</tr>
		<tr>
			<td colspan="2"><input class="button" type="submit" value="Зарегистрироваться" name="submit" /></td>
		</tr>
	</table>
</form>

<?php
$connection = mysqli_connect('localhost', 's97248pw_beta', '*63K%ACX', 's97248pw_beta') or die(mysqli_error($connection));

if (isset($_POST['submit'])) 
{
	if (empty($_POST['login'])) 
	{
		$info_reg = 'Вы не ввели Логин';
	}
	elseif (empty($_POST['password'])) 
	{
		$info_reg = 'Вы не ввели пароль';
	}                      
	else 
	{
		$login = $_POST['login'];             
		$password = md5($_POST['password']);
		
		$query = "INSERT INTO `users` (login, password)
		VALUES ('$login', '$password')";
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		
		$info_reg = 'Вы успешно зарегистрировались!';
	}
}

$info_reg = isset($info_reg) ? $info_reg : NULL;
echo $info_reg;
?>

</body>
</html>
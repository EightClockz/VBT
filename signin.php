<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Страница</title>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <li>
    <a href="main.php">Main</a>
    <a href="formreg.php">Register</a>
    <a href="signin.php">Sign in</a>
  </li>
<p>Авторизация:</p>
<form action="authorization.php" method="post">
  <input name="login" placeholder="Логин">
  <input type="password" name="password" placeholder="Пароль">
  <input type="submit" value="Войти">
</form>
</body>
</html>
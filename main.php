<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$login=$_SESSION['login'];
if ($login)
  {
  if ($login=='er login')
    {
    echo '<p>Введён неправильный логин или пароль</p>';
    $_SESSION['login']='';
    }
  else 
  echo "<p>Здравствуйте, $login</p>";
  }
else 
echo '<p>Здравствуйте, гость</p>';
?>   
<li>
    <a href="main.php">Main</a>
    <a href="formreg.php">Register</a>
    <a href="signin.php">Sign in</a>
    <a href="exit.php">Выход</a>
  </li>
</body>
</html>
<!DOCTYPR html>
<html lang="ru">
<head>
<title>Добавление пользователя</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link type = "text/css" rel = "stylesheet" href = "css/style.css">
</head>
<body>
<br>

<?php
$login = filter_var(trim($_POST['exampleInputEmail1']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$cat = filter_var(trim($_POST['cat']), FILTER_SANITIZE_STRING);

// если поле логин не пустое
if(!empty($login)){
echo "<h5 id='sucess'>Пользователь с именем - $login добавлен</br></h5>";	
} else {
echo '<h5 id="not_user"></h5>';
}

// подключение к бд
$mysql = new mysqli('localhost', 'root', '', 'userAdd');

// запись введенных данных
$mysql->query("INSERT INTO `usersadd` (`login`, `age`, `cat`) VALUES ('$login', '$pass', '$cat')");
$mysql->close();
?>

<form action="delete.php" method="post">
</br>
<button  type="submit" class="button16">Открыть список всех пользователей</button>
</form>

<form action="index.html" method="post">
<button  type="submit" class="button16">Вернутся назад</button>
</form>

<script>
var testElem = document.getElementById('not_user');
testElem.innerHTML = "Пользователь не был добавлен :(";
testElem.style.color = "#f00";
</script>

<script>
var testElem = document.getElementById('sucess');
testElem.style.color = "#32CD32";
</script>
</body>
</html>
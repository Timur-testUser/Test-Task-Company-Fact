<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script type='text/javascript'>
</script>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userAdd";


// Создание подключения к бд
$conn = new mysqli($servername, $username, $password, $dbname);


$showButton = false;

// Првоерка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// запрос юзеров
$sql = "SELECT id, login, age FROM usersadd";
$result = $conn->query($sql);

// если количество записей больше 0
if ($result->num_rows > 0) {
	$showButton = true;
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<br>Пользователь:  id: ". $row["id"]. " <br> Имя: ". $row["login"]. "<br> Возраст: " . $row["age"] . "<br> Наличие кота:" . $row["cat"] . "<br>";
	echo "____________________________________________________________________________________________";
    }
} else {
	$showButton = false;
    echo "Список пользователей пуст:";	
}
$conn->close();

	echo "<br>";

if($showButton == true){
echo '<form  action="clear.php" method="post"> </br> <button class="width">Удалить всех пользователей</button> </form> ';
}
?>
<form action="index.html">
<button class="width">Вернуться в главное меню</button>
</form>
</div>
</body>
</html>
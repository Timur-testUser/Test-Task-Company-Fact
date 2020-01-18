<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userAdd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Выбираем поле для удаления 
$sql = "DELETE FROM usersadd";

if ($conn->query($sql) === TRUE) {
    echo "Все пользователи успешно удалены!";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
<html>
<head> 
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<p>Для возврата на начальную страницу нажмите <a href="index.html">здесь</a><p>
</body>
</html>
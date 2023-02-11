<?php
// подключение к БД 
	$servername = "localhost";
    $database = "blog_php";
    $username = "root";
    $password = "";
    // Создаем соединение
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Проверяем соединение
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected DB <br>";
    // mysqli_close($conn);

?>
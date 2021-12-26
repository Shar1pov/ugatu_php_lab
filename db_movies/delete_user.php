<?php
session_start();

if ($_SESSION['auth'] == false || $_SESSION['type'] !=="2") {
  header("location:index.php");
}

$servername = "localhost";
$database = "sharipov_labs";
$username = "sharipov_labs";
$password = "pass1234";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
mysqli_set_charset($conn, "utf8mb4");
if (!$conn) {
    die("Невозможно подключиться к серверу: " . mysqli_connect_error());
}

$delete="DELETE FROM users WHERE id=" . $_GET['id'];
    mysqli_query($conn, $delete); 
    header("Location: admin_userslist.php");
    exit;
    
?> 
 

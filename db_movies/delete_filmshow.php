<?php
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

        $delete="DELETE FROM filmshow WHERE id_filmshow=" . $_GET['id_filmshow'];
          mysqli_query($conn, $delete); 
          header("Location: index.php");
          exit;
            
      ?> 
 

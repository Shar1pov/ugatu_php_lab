<?php
session_start();


if ($_SESSION['auth'] == false || $_SESSION['type'] !=="2") {
  header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Шарипов И.Р. ПИ-322</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link href="../style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <span class="fs-5">Приветствую, <strong><?php echo $_SESSION["username"] ?></strong></span>
      </a>

      <ul class="nav nav-pills">
				<li class="nav-item"><a href="index.php" class="nav-link">Главная</a></li>
				<li class="nav-item"><a href="personal.php" class="nav-link">Личные данные</a></li>
				<?php 
					if($_SESSION["type"] == "2"){
						echo ('<li class="nav-item"><a href="admin_userslist.php" class="nav-link">Список пользователей</a></li>');
					} 
				?>
        <li class="nav-item"><a href="logout.php" class="btn btn-outline-secondary">Выход</a></li>
      </ul>
    </header>
  </div>

    <div class="container pb-200px mt-100px">
      <div class="tables-item pb-5">
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
          
          
        ?> 
        <h2>Список пользователей</h2>
        <a class="btn btn-primary btn-sm" href="new_user.php">Создать пользователя</a>
        <table class="table table-bordered mt-4">
          <thead>
            <tr>
              <th scope="col">№ п/п</th>
              <th scope="col">Логин</th>
              <th scope="col">Имя</th>
              <th scope="col">Роль пользователя</th>
              <th scope="col">Редактировать</th>
              <th scope="col">Удалить</th>             
            </tr>
          </thead>
          <tbody>
            <?php
            $resMainAdmin=mysqli_query($conn,"SELECT * FROM users WHERE username='admin'"); 
            while ($row = mysqli_fetch_array($resMainAdmin)){
            echo "<tr>";
            echo "<td>1</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo ("<td>Главный администратор</td>"); 
            echo "<td>Нельзя редактировать</td>"; 
            echo "<td>Нельзя удалить</td>"; 
            echo "</tr>";
            }

            $result=mysqli_query($conn,"SELECT * FROM users WHERE NOT username IN('admin')"); 
            $counter_user = 2;
            while ($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $counter_user . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            if($row["type"] == "2"){
              echo ("<td>Администратор</td>"); 
            } elseif ($row["type"] == "1") {
              echo "<td>Оператор</td>";
            }
            echo "<td><a href='edit_user.php?id=" . $row['id']
            . "'>Изменить</a></td>"; 
            echo "<td><a href='delete_user.php?id=" . $row['id']
            . "'>Удалить</a></td>"; 
            echo "</tr>";
            $counter_user++;
            }
            ?>
          </tbody>
        </table>
        <p>
          <?php 
          $num_rows = mysqli_num_rows($result);
          echo ("Всего пользователей: ".$num_rows)
          ?>
        </p>
      </div>
      
    </div>
  
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

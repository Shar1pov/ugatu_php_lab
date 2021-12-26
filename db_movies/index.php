<?php
session_start();

  
if ($_SESSION['auth'] == false) {
  header("location:login.php");
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

    <div class="container pb-200px  mt-100px">
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
        <h2>Список фильмов</h2>
        <a class="btn btn-primary btn-sm" href="new_movie.php">Создать запись</a>
        <table class="table table-bordered mt-4">
          <thead>
            <tr>
              <th scope="col">Название фильма</th>
              <th scope="col">Жанр</th>
              <th scope="col">Режиссер</th>
              <th scope="col">Год выпуска</th>
              <th scope="col">Кассовые сборы</th>
              <th scope="col">Редактировать</th>
              <?php 
                if($_SESSION["type"] == "2"){
                  echo ('<th scope="col">Удалить</th>');
                } 
              ?>
              
            </tr>
          </thead>
          <tbody>
            <?php
            
            $result=mysqli_query($conn,"SELECT id_movie, movie_name, movie_genre, movie_producer,movie_god_vipuska,movie_sbori FROM movie"); 

            while ($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['movie_name'] . "</td>";
            echo "<td>" . $row['movie_genre'] . "</td>";
            echo "<td>" . $row['movie_producer'] . "</td>";
            echo "<td>" . $row['movie_god_vipuska'] . "</td>";
            echo "<td>$ " . $row['movie_sbori'] . "</td>";
            echo "<td><a href='edit_movie.php?id_movie=" . $row['id_movie']
            . "'>Изменить</a></td>"; 
            if($_SESSION["type"] == "2"){
                  echo "<td><a href='delete_movie.php?id_movie=" . $row['id_movie']
            . "'>Удалить</a></td>"; 
            }
            
            echo "</tr>";
            }
            ?>
          </tbody>
        </table>
        <p>
          <?php 
          $num_rows = mysqli_num_rows($result);
          echo ("Всего фильмов: ".$num_rows)
          ?>
        </p>
      </div>
      

      <div class="tables-item pb-5 mt-5">
        <h2>Список кинозалов</h2>
        <a class="btn btn-primary btn-sm" href="new_cinema.php">Создать запись</a>
        <table class="table table-bordered mt-4">
          <thead>
            <tr>
              <th scope="col">Название кинозала</th>
              <th scope="col">Категория</th>
              <th scope="col">Редактировать</th>
              <?php 
                if($_SESSION["type"] == "2"){
                  echo ('<th scope="col">Удалить</th>');
                } 
              ?>
              
            </tr>
          </thead>
          <tbody>
            <?php
            
            $result=mysqli_query($conn,"SELECT id_cinema, name_cinema, category_cinema FROM cinema"); 

            while ($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['name_cinema'] . "</td>";
            echo "<td>" . $row['category_cinema'] . "</td>";
            echo "<td><a href='edit_cinema.php?id_cinema=" . $row['id_cinema']
            . "'>Изменить</a></td>"; 
            if($_SESSION["type"] == "2"){
                  echo "<td><a href='delete_cinema.php?id_cinema=" . $row['id_cinema']
            . "'>Удалить</a></td>"; 
            }
            
            echo "</tr>";
            }
            ?>
          </tbody>
        </table>
        <p>
          <?php 
          $num_rows = mysqli_num_rows($result);
          echo ("Всего кинозалов: ".$num_rows)
          ?>
        </p>
      </div>


      <div class="tables-item pb-5 mt-5">
        <h2>Список киносеансов</h2>
        <a class="btn btn-primary btn-sm" href="new_filmshow.php">Создать запись</a>
        <a class="btn btn-primary btn-sm" href="gen_pdf.php">Выгрузить в PDF</a>
        <a class="btn btn-primary btn-sm" href="gen_xls.php">Выгрузить в XLS</a>
        <table class="table table-bordered mt-4">
          <thead>
            <tr>
              <th scope="col">Фильм</th>
              <th scope="col">Кинозал</th>
              <th scope="col">Дата и время</th>
              <th scope="col">Количество мест</th>
              <th scope="col">Мест забронировано</th>
              <th scope="col">Редактировать</th>
              <?php 
                if($_SESSION["type"] == "2"){
                  echo ('<th scope="col">Удалить</th>');
                } 
              ?>
              
            </tr>
          </thead>
          <tbody>
            <?php
            
            $result=mysqli_query($conn,"SELECT * FROM filmshow INNER JOIN movie ON filmshow.id_movie=movie.id_movie INNER JOIN cinema ON filmshow.id_cinema = cinema.id_cinema"); 
            
            while ($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['movie_name'] . "</td>";
            echo "<td>" . $row['name_cinema'] . "</td>";
            echo "<td>" . $row['timeshow'] . "</td>";
            echo "<td>" . $row['places'] . "</td>";
            echo "<td>" . $row['booked_places'] . "</td>";
            echo "<td><a href='edit_filmshow.php?id_filmshow=" . $row['id_filmshow']
            . "'>Изменить</a></td>"; 
            if($_SESSION["type"] == "2"){
                  echo "<td><a href='delete_filmshow.php?id_filmshow=" . $row['id_filmshow']
            . "'>Удалить</a></td>"; 
            }
            
            echo "</tr>";
            }
            ?>
          </tbody>
        </table>
        <p>
          <?php 
          $num_rows = mysqli_num_rows($result);
          echo ("Всего киносеансов: ".$num_rows)
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

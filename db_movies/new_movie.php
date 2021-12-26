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
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
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
      <h2>Создание записи</h2>
      
          <?php
          
          $result=mysqli_query($conn,"SELECT id_movie, movie_name, movie_genre, movie_producer,movie_god_vipuska,movie_sbori FROM movie"); 

          ?>
        <form action="save_new_movie.php" method="GET">
          <div class="form-group">
            <label>Название фильма</label>
            <input type="text" class="form-control" placeholder="Введите название фильма" name="name" required>
          </div>
          <div class="form-group mt-3">
            <label>Жанр</label>
            <input type="text" class="form-control" placeholder="Введите жанр" name="genre" required>
          </div>
          <div class="form-group mt-3">
            <label>Режиссер</label>
            <input type="text" class="form-control" placeholder="Введите имя режиссера" name="producer" required>
          </div>
          <div class="form-group mt-3">
            <label>Год выпуска</label>
            <input type="number" class="form-control" placeholder="Введите год выпуска" name="god_vipuska" required>
          </div>
          <div class="form-group mt-3">
            <label>Кассовые сборы $</label>
            <input type="number" class="form-control" placeholder="Введите сумму кассовых сборов" name="sbori" required>
          </div>
          <button type="submit" class="btn btn-primary mt-3" name="create_movie">Создать запись</button>
          <button type="reset" class="btn btn-outline-secondary mt-3">Очистить</button>
        </form>
      
    </div>
  

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

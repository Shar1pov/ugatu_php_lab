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
    <div class="px-4 pt-5 my-5 text-center border-bottom">
      <h1 class="display-4 fw-bold">Шарипов Ильян Рустемович</h1>
      <div class="col-lg-6 mx-auto">
        <h2 class="mt-4 pb-5">Группа ПИ-322</h2>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
          <a href="https://github.com/Shar1pov/ugatu_php_lab" target="_blank" class="btn btn-primary btn-lg px-4 me-sm-3">
            Ссылка на репозиторий GitHub
          </a>
          <a href="lab3.html" class="btn btn-outline-secondary btn-lg px-4">Назад</a>
        </div>
      </div>
    </div>

    <div class="container pb-200px">
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

        <form action="save_new_filmshow.php" method="GET">
          <div class="form-group">
            <label>Выберите фильм</label>
            <select class="form-control" name="movie_select" required>
              <?
              $result=mysqli_query($conn,"SELECT id_movie, movie_name FROM movie");
              while ($row = mysqli_fetch_array($result)){
              echo ("<option value=".$row['id_movie'].">".$row['movie_name']."</option>");
              }
              ?>
            </select>
          </div>
          <div class="form-group mt-3">
            <label>Выберите кинозал</label>
            <select class="form-control" name="cinema_select" required>
              <?
              $result=mysqli_query($conn,"SELECT id_cinema, name_cinema FROM cinema");
              while ($row = mysqli_fetch_array($result)){
              echo ("<option value=".$row['id_cinema'].">".$row['name_cinema']."</option>");
              }
              ?>
            </select>
          </div>
          <div class="form-group col-2 mt-3">
            <label>Дата и время сеанса</label>
            <input type="datetime-local" class="form-control" name="timeshow" required>
          </div>
          <div class="form-group mt-3">
            <label>Количество мест</label>
            <input type="number" class="form-control" placeholder="Введите количество мест" name="places" required>
          </div>
          <div class="form-group mt-3">
            <label>Мест забронировано</label>
            <input type="number" class="form-control" placeholder="Введите количество забронированных мест" name="booked_places" required>
          </div>
          <button type="submit" class="btn btn-primary mt-3" name="create_filmshow">Создать запись</button>
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
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
      
          <?php
          
          $results = mysqli_query($conn,"SELECT id_cinema, name_cinema, category_cinema FROM cinema WHERE id_cinema=".$_GET['id_cinema']); 
          
          while ($st = mysqli_fetch_array($results)) {
          $id=$_GET['id_cinema'];
          $name = $st['name_cinema'];
          $category = $st['category_cinema'];
          
          }
          ?>
        <form action="save_edit_cinema.php" method="GET">
          <div class="form-group">
            <label>Название фильма</label>
            <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" required>
          </div>
          <div class="form-group mt-3">
            <label>Жанр</label>
            <input type="text" class="form-control" name="category" value="<?php echo $category; ?>" required>
          </div>
          
          <input type='hidden' name='id_cinema' value='<?php echo $id; ?>'>
          <button type="submit" class="btn btn-primary mt-3" >Сохранить</button>
          <a href="index.php" class="btn btn-secondary  btn-md mt-3 active">Вернуться к списку кинозалов</a>
          
        </form>
      
    </div>
  

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

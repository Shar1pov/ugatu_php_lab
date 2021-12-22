<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Шарипов И.Р. ПИ-322</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link href="style.css" rel="stylesheet">
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
          <a href="lab2.html" class="btn btn-outline-secondary btn-lg px-4">Назад</a>
        </div>
      </div>
    </div>

    <div class="container pb-5">
       <h2 class="pb-3">Лабораторная работа 2</h2>
      <h3 class="pb-3">Задача № 2-1</h3>
      
      <div>
          <?php
          echo ("<h5>Треугольный массив: </h5>");
          for ($k = 1; $k<=10;$k++){
              $treug[$k] = ($k*($k+1))/2;
              echo ( $treug[$k] ." ");
          }

          echo ("<h5 class='mt-3'> Массив квадратов: </h5>");
          for ($k = 1; $k<=10;$k++){
              $kvd[$k] = $k*$k;
              echo ( $kvd[$k] ." ");
          }
          
        
          echo ("<h5 class='mt-3'>Объединенный массив: </h5>");
          $rez = array_merge($treug, $kvd);
          for ($k = 0; $k < 20; $k++){
              echo ( $rez[$k] ." ");
          }

          echo ("<h5 class='mt-3'>Отсортированный массив: </h5>");
          sort($rez);
          for ($k = 0; $k < 20; $k++){
              echo ( $rez[$k] ." ");
          }

          echo ("<h5 class='mt-3'>Массив с удаленным первым элементом: </h5>");
          unset($rez[0]);
          for ($k = 0; $k < 20; $k++){
              echo ( $rez[$k] ." ");
          }

          echo ("<h5 class='mt-3'>Массив с удаленными повторяющимися элементами: </h5>");
          $rez1 = array_unique($rez);
          for ($k = 0; $k < 20; $k++){
              echo ( $rez1[$k] ." ");
          }

          ?>
      </div>

    </div>
  </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

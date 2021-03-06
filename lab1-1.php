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
          <a href="lab1.html" class="btn btn-outline-secondary btn-lg px-4">Назад</a>
        </div>
      </div>
    </div>

    <div class="container">
       <h2 class="pb-3">Лабораторная работа - 1</h2>
      <h3 class="pb-3">Задача № 1-1</h3>
      <h4 class="pb-3 mt-1">Вариант 9</h4>
      <p class="mt-3 desc-text">
        Создайте php-скрипт lab1-5.php, в котором вычисляется значение заданного выражения
        для случайных аргументов из интервала [-20, 20], а затем выводится на экран сама формула (с
        заменых имен переменных на их значения) и результат вычислений.
      </p>
      <p class="mt-3 desc-text">
        <?php 
          $a=rand(-20,20);
          $c=rand(-20,20);
          $d=rand(-20,20);
            echo "( (25 / ".$c.") - ".$d." + 2 ) / (".$d." + (".$a." * ".$a.") - 1 ) = ". ((25/$c) - $d + 2) / ($d + ($a*$a)-1);
          ?>
      </p>


      <h4 class="pb-3 mt-4">Вариант 10</h4>
      <p class="mt-2 desc-text">
        <?php 
          $a=rand(-20,20);
          $c=rand(-20,20);
          $d=rand(-20,20);
            echo "( (2 * $c / ".$d.") + 2 ) / (".$d." - (".$a." * ".$a.") - 1 ) = ". (((2 * $c) / $d) + 2) / ($d - ($a*$a)-1);
          ?>
      </p>

      <button type="button" class="btn btn-primary mt-4" onClick="window.location.reload();">Обновить</button>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

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

    <div class="container">
       <h2 class="pb-3">Самостоятельная работа</h2>
      <h3 class="pb-3">Задача № 2-4</h3>
      <div class="var-8">
        <h3>Вариант 8</h3>
        <p class="mt-3 desc-text">
          В массиве чисел А(N) найти число, повторяющееся максимальное количество раз. Если их
          несколько, то одно из них.
        </p>
        <p class="mt-3 desc-text">
          <?php 
            $arrNumbers = array(11,12,44,12,14,12,46,15,21,51,32,12);
            for ($i = 0; $i < count($arrNumbers); $i++) {
              for ($k = $i + 1; $k < count($arrNumbers); $k++) {
                if ($arrNumbers[$i] == $arrNumbers[$k]) {
                  $count++;
                }
              }
              if ($count > $maxN) {
                $maxN = $count;
                $number = $arrNumbers[$i];
              }
              $count = 0;
            }
            $res_count_num = $maxN+1;
            echo("Цисло: "  .$number. "<br> Количество повторений: "  .$res_count_num);
            ?>
        </p>
      </div>

      <div class="var-10 mt-5 pb-5">
        <h3>Вариант 10</h3>
        <p class="mt-3 desc-text">
          В целочисленном массиве A(N) подсчитать количество элементов, меньших К, и
          заменить их нулями. Исходный и скорректированный массивы вывести на экран
        </p>
        
        <div class="row">
            <?php 
          $arrInitial = $arrCh = array(1,2,3,4,5,6,7,8);
          $k=6;
          $count=0;

          for($i = 0; $i < count($arrCh); $i++) {
            if($arrCh[$i] < $k) {
              $count++;
              $arrCh[$i]=0;
            }
          }
          ?>

          <div class="col-4">
            <h5>Исходный массив</h5>
            <ul class="list-group">
              <?
              foreach ($arrInitial as $row) {
                  echo ('<li class="list-group-item">'.$row.'</li>');
                }
              ?>
            </ul>
          </div>
          <div class="col-4">
            <h5>Скорректированный массив</h5>
            <ul class="list-group">
              <?
                foreach ($arrCh as $row) {
                  echo ('<li class="list-group-item">'.$row.'</li>');
                }
              ?>
            </ul>
        </div>
        <div class="col-4">
          <h5>Число K = 6</h5>
          <h5>Количество элементов: <? echo $count ?></h5>
        </div>
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

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
    <div class="container pb-100px">
       <h2 class="pb-3">Лабораторная работа - 1</h2>
      <h3 class="pb-3">Задача № 1-3</h3>
      <h3 class="mt-5 pb-3">Вариант 1</h3>
      <p class="mt-3 pb-3 desc-text">
        Создать скрипт lab-2-11.php, решающий следующую задачу (по вариантам):
        <br>
        1) Найти все делители натурального числа N. N – случайное число.
      </p>
      <ul class="list-group">
            <?php 
              $n = rand(1, 1000);
              echo "<h5>Случайное число N = " .$n."</h5>";
              for ($i = 1; $i <= $n; $i++) {
              if ($n % $i==0)
              echo '<li class="list-group-item">'.$i.'</li>';
              }
            ?>
      </ul>


      <h3 class="mt-5 pb-3">Вариант 2</h3>
      <p class="mt-3 pb-3 desc-text">
        
        2) Проверить, являются ли два случайных числа N и М дружественными (сумма делителей
        одного числа равна сумме делителей другого числа). Например, 220 и 284 -
        дружественные.
      </p>
      <div>
         <?php
          $n=rand(1,200);
          $m=rand(1,200);
          $nD = 0;
          $mD = 0;
          
          for ($i = 1; $i <= $n; $i++){
              if ($n % $i == 0){
                $nD = $nD + $i;
              }     
          }
          
          for ($i = 1; $i <= $m; $i++){
              if ($m % $i == 0){
                $mD = $mD + $i;
              }
          }

          echo('<h6>Случайное число N = '.$n.'. Сумма делителей = '. $nD.'</h6>');
          echo('<h6>Случайное число M = '.$m.'. Сумма делителей = '. $mD.'</h6>');
      
          if ($nD == $mD){
            echo ('<h6>Числа '.$n.' и '.$m.' дружественные </h6>');
          } 
          else {
            echo ('<h6>Числа '.$n.' и '.$m.' недружественные </h6>');
          }       
        ?>
      </div>
      <button type="button" class="btn btn-primary mt-5" onClick="window.location.reload();">Обновить</button>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

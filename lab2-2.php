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
      <h3 class="pb-3">Задача № 2-2</h3>
      
      <div>
          <?php
            $r = rand(3,20);
            echo ("<h5>Массив из ". $r . " элементов, заполненный случайными числами: </h5>");
            for ($i = 1; $i <= $r; $i++){
                $arr[$i] = rand(0,100);
                echo ( $arr[$i] ." ");
            }


            echo ("<h5 class='mt-3'>Отсортированный массив: </h5>");
            sort($arr);
            for ($i = 0; $i < $r; $i++){
                echo ( $arr[$i] ." ");
            }
            echo ("<h5 class='mt-3'>В обратном порядке: </h5>");
            $reversArr = array_reverse($arr);
            for ($i = 0; $i < $r; $i++){
                echo ( $reversArr[$i] ." ");
            }

            echo ("<h5 class='mt-3'>Массив с удаленным последним элементом: </h5>");
            array_pop($arr);
            for ($i = 0; $i < $r; $i++){
                echo ( $arr[$i] ." ");
            }

            echo ("<h5 class='mt-3'>Количество элементов в массиве: </h5>" .count($arr));

            echo ("<h5 class='mt-3'>Сумма элементов массива: </h5>". array_sum($arr));
            
            echo ("<h5 class='mt-3'>Среднее арифметическое элементов массива: </h5>". array_sum($arr) / count($arr));


            if (in_array(50, $arr))
                echo ("<h5 class='mt-3'>Число 50 есть в массиве</h5>");
            else
                echo ("<h5 class='mt-3'>Числа 50 нет в массиве</h5>");

            echo ("<h5 class='mt-3'>Из массива удалены повторяющиеся элементы: </h5>");
            $uniqueA = array_unique($arr);
            for ($i = 0; $i < $r; $i++){
                echo ( $uniqueA[$i] ." ");
            }
          ?>
      </div>
      <button type="button" class="btn btn-primary mt-4" onClick="window.location.reload();">Обновить</button>


    </div>
  </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

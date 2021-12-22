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

    <div class="container pb-100px">
      <h2 class="pb-3">Самостоятельная работа</h2>
      <h3 class="pb-3">Задача № 2-5</h3>
      <div class="var-8">
        <h3>Вариант 8</h3>
        <p class="mt-3 desc-text">
          Найти значение переменной z, заданной суммой функций. Для нахождения значения
          функции f(u,t) написать пользовательскую функцию. Числа a и b – случайные.
         
        </p>
         <img src="img/lab2-5-8.jpg" alt="">
        
         <div class="answer">
           <?
            function f8($u, $t) {
                if ( $u >= 0 && $t >= 0 )
                    return ($u / $t) - ($t * $t) * $u;
                elseif ( $u < 0 && $t >= 0 )
                    return $u + (($t * $t) / $u);
                elseif ( $u >=0 && $t < 0 )
                    return $u - $t;
                elseif ( $u < 0 && $t < 0 )
                    return ($t + (3 * $u)) / ($u * $t);
            }

            $a = rand(1, 20);
            $b = rand(1, 20);

            $z8 = f8($a + 1 / $b, pow($b, 8) / pow($a, 6)) + f8(pow($a, 3/4) + pow($b, 5/6), $b-$a);
            echo ('<h4 class="mt-5">Результат: '.$z8.'</h4>');
           ?>
         </div>
      </div>

      <div class="var-10 mt-5 pb-5">
        <h3>Вариант 10</h3>
        <p class="mt-3 desc-text">
          Найти значение переменной z, заданной суммой функций. Для нахождения значения
          функции f(u,t) написать пользовательскую функцию. Числа a и b – случайные.
        </p>
        <img src="img/lab2-5-10.jpg" alt="">
        <div class="answer">
           <?
            function f10($u, $t) {
                if ( $u >= 0 && $t >= 0 )
                    return $u + (2 * $t);
                elseif ( $u < 0 && $t >= 0 )
                    return $u + $t;
                elseif ( $u >=0 && $t < 0 )
                    return ($u * $u) - (2 * $t);
                elseif ( $u < 0 && $t < 0 )
                    return $t + (3 * $u);
            }

            $a = rand(1, 15);
            $b = rand(1, 15);

            $z = f10($a, ($b * $b) + $a) + f10($a, $b);
            echo ('<h4 class="mt-5">Результат: '.$z.'</h4>');
           ?>
         </div>
      </div>
      <button type="button" class="btn btn-primary" onClick="window.location.reload();">Обновить</button>
    </div>
  

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

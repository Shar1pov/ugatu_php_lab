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
          <a
            href="https://github.com/Shar1pov/ugatu_php_lab"
            target="_blank"
            class="btn btn-primary btn-lg px-4 me-sm-3"
          >
            Ссылка на репозиторий GitHub
          </a>
          <a href="lab1.html" class="btn btn-outline-secondary btn-lg px-4"
            >Назад</a
          >
        </div>
      </div>
    </div>
    <div class="container pb-100px">
      <h2 class="pb-3">Самостоятельная работа - 2</h2>
      <h3 class="pb-3">Задача № 1-2 (вариант 9)</h3>
      <p class="mt-3 desc-text">
        В скрипте lab-2-10.php, используя вложенные циклы for, отобразите на экране таблицу
        10×10, в ячейках которой идут числа от 1 до 100. При этом четные числа вывести
        красным цветом, а нечетные числа - черным. Массивы не использовать!
      </p>
      <table class="table-cell">
          <?php
              for ($i = 0; $i < 10; $i++) {
                  echo '<tr>'; 
                  for ($cl = 1; $cl < 11; $cl++) {
                      echo '<td class="table-cell-item" style="color:'.($cl % 2?'#000000':'#ff0000').'">'.($i * 10+ $cl).'</td>';
                  }
                  echo '</tr>'; 
              }
          ?>
      </table>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

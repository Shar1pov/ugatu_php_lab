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
          <a href="lab3.html" class="btn btn-outline-secondary btn-lg px-4">Назад</a>
        </div>
      </div>
    </div>

    <div class="container pb-100px">
      <h2 class="pb-3">Лабораторная работа 3</h2>
      <h3 class="pb-3">Задача № 3-3</h3>
      <div class="answer-block">
        <form method="post" >
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Число N</label>
              <input type="number" class="form-control" placeholder="Введите число N" name="numN" required>
            </div>           
            <div class="form-group col-md-4 mt-3">
              <label>Выберите действие:</label>
              <select class="form-control" name="selAct" required>
                <option value="1" selected>вывести четные числа</option>
                <option value="2">вывести нечетные числа</option>
                <option value="3">вывести простые числа</option>
                <option value="4">вывести составные числа</option>
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary mt-3" name="getR">Получить результат</button>
        </form>
        <?
          if (isset($_POST["getR"])) {
              $num = $_POST["numN"];

              echo ('<h6 class="mt-4">Полученный результат: </h6>');
              switch ($_POST["selAct"]) {
                  case 1:
                      if($num == 0){
                        echo "0";
                      }
                      elseif ($num == 1){
                        echo "Нет четных чисел ";
                      }
                      for ($k = 1; $k <= $num; $k++){
                          if (($k % 2) == 0){
                            echo ($k." ");
                          }
                      }
                      break;
                  case 2:
                      if($num == 0){
                        echo "Нет нечетных чисел";
                      }
                      for ($k = 1; $k <= $num; $k++){
                        if (($k % 2) != 0){
                            echo ($k." ");
                        }       
                      }
                      break;
                  case 3:
                      if ($num < 2){
                        echo "Введите число больше 1 ";
                      }
                      for ($k = 2; $k <= $num; $k++){
                        $check = true;
                        for ($j = 2; $j < $k; $j++){
                              if (($k % $j) == 0){
                                  $check = false;
                                  break;
                              }
                        }
                        if ($check == true){
                          echo ($k." ");
                        }    
                      }
                      break;
                  case 4:
                      if ($num < 2){
                        echo "Введите число больше 1 ";
                      }
                      for ($k = 2; $k <= $num; $k++){
                          $check = false;
                          for ($j = 2; $j < $k; $j++){
                              if (($k % $j) == 0){
                                  $check = true;
                                  break;
                              }
                          }
                          if ($check == true){
                            echo ($k." ");
                          }
                      }
                      break;
              }
          }
        ?>
      </div>
    </div>
  

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

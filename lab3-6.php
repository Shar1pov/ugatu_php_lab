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
      <h3 class="pb-3">Задача № 3-6</h3>
      <div class="answer-block">
       <?php
       
        // Вариант 4
        $textCheck = $_GET ["textCheck"];
        $textChanged = str_replace($_GET ["oldSymb"], $_GET ["newSymb"], $_GET ["textCheck"]);
        echo('<h4 class="mt-3">Вариант 4</h4>');
        echo ('<h5 class="mt-2">Текст с измененными символами: ' . $textChanged. '</h5>');
        
        // Вариант 9
        $countText = $_GET ["countText"];
        $countTextLen = strlen($countText);
        $c = 0; 
        for ($i = 1; $i <= $countTextLen; $i++) {
          if ($countText[$i] == '.' || $countText[$i] == '!' || $countText[$i] == '?') {
            $c = $c + 1;
          }
        }
        echo('<h4 class="mt-5">Вариант 9</h4>');
        echo ('<h5 class="mt-2">В тексте ' . $c. ' предложения(ий)</h5>');

        // Вариант 13
        $sentence = mb_str_split($_GET ["sentence"]);
        $letter1 = mb_str_split($_GET ["letter1"]);
        $letter2 = mb_str_split($_GET ["letter2"]);
        $letterRes1 = 0; 
        $letterRes2 = 0; 
        for ($k = 0; $k <= count($sentence); $k++) {
          if ($sentence[$k] == $letter1[0]) {
            $letterRes1 = $letterRes1 + 1;
          }
          if ($sentence[$k] == $letter2[0]) {
            $letterRes2 = $letterRes2 + 1;
          }
        }
        echo('<h4 class="mt-5">Вариант 13</h4>');
        echo ('<h5 class="mt-2">Количество символов <b>'.$letter1[0].'</b> в тексте = <b>' .$letterRes1.'</b></h5>');
        echo ('<h5 class="mt-2">Количество символов <b>'.$letter2[0].'</b> в тексте = <b>' .$letterRes2.'</b></h5>');
        ?>
        
      </div>
      <a href="lab3-6.html" class="btn btn-outline-secondary btn-md px-4 mt-3">Вернуться назад</a>
    </div>
  

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

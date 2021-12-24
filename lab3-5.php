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
      <h3 class="pb-3">Задача № 3-5</h3>
      <div class="answer-block">
        <form method="post" >
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Ваше имя</label>
              <input type="text" class="form-control" placeholder="Введите ваше имя" name="name" required>
            </div>
            <ol class="mt-5">
              <li>
                <h6>
                  Считаете ли Вы, что у многих ваших знакомых хороший характер?
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer1" value="0" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer1" value="1">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Раздражают ли Вас мелкие повседневные обязанности? 
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer2" value="0" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer2" value="1">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Верите ли Вы, что ваши друзья преданы Вам? 
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer3" value="1" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer3" value="0">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Неприятно ли Вам, когда незнакомый человек делает Вам замечание? 
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer4" value="0" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer4" value="1">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Способны ли Вы ударить собаку или кошку?
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer5" value="0" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer5" value="1">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Часто ли Вы принимаете лекарства? 
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer6" value="0" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer6" value="1">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Часто ли Вы меняете магазин, в который ходите за продуктами?
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer7" value="0" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer7" value="1">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись? 
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer8" value="0" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer8" value="1">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Тяготят ли Вас общественные обязанности? 
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer9" value="1" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer9" value="0">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Способны ли Вы ждать более 5 минут, не проявляя беспокойства? 
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer10" value="1" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer10" value="0">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Часто ли Вам приходят в голову мысли о Вашей невезучести? 
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer11" value="0" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer11" value="1">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Сохранилась ли у Вас фигура по сравнению с прошлым?
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer12" value="0" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer12" value="1">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Можете ли Вы с улыбкой воспринимать подтрунивание друзей? 
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer13" value="1" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer13" value="0">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Нравится ли Вам семейная жизнь?
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer14" value="1" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer14" value="0">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Злопамятны ли Вы? 
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer15" value="0" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer15" value="1">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Находите ли Вы, что стоит погода, типичная для данного времени года? 
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer16" value="0" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer16" value="1">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Случается ли Вам с утра быть в плохом настроении? 
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer17" value="0" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer17" value="1">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Раздражает ли Вас современная живопись?
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer18" value="0" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer18" value="1">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Надоедает ли Вам присутствие чужих детей в доме более одного часа? 
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer19" value="1" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer19" value="0">
                  <label>Нет</label>
                </div>  
              </li>
              <li class="mt-4">
                <h6>
                  Надоедает ли Вам делать лабораторные по PHP? 
                </h6>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer20" value="0" checked>
                  <label>Да</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="answer20" value="1">
                  <label>Нет</label>
                </div>  
              </li>
            </ol>
                    
          </div>
          <button type="submit" class="btn btn-primary mt-3" name="getR">Получить результат</button>
        </form>
        
      <?
      $res= 0;
      if (isset($_POST["getR"])) {
        for ($i=1; $i <= 20; $i++) {
          $res = $res + $_POST["answer".$i];
        }
        
        if ($res > 15){
          echo ('<h4 class="mt-5">'.$_POST["name"].', У Вас покладистый характер</h4>');
        }
        elseif ($res > 7){
          echo ('<h4 class="mt-5">'.$_POST["name"].', Вы не лишены недостатков, но с вами можно ладить</h4>');
        } 
        else {
          echo ('<h4 class="mt-5">'.$_POST["name"].', Вашим друзьям можно посочувствовать');
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

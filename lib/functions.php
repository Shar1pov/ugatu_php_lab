<?

  function getTask8() {
    echo ("В матрице К(n,n) присвоить каждому диагональному элементу разность между суммами
          элементов соответствующих строки и столбца. ");
  }

  function createArr8() {
    
    $arr = [
		['6', '12', '5'],
		['11', '7', '9'],
		['22', '13', '15'],
	  ];

    echo "<table class='table-cell'>";
    foreach ($arr as $resultV){
            echo "<tr>";
            foreach ($resultV as $resV){
                    echo "<td class='table-cell-item'>{$resV}</td>";
            }
            echo "</tr>";
    }
    echo "</table>";
  }

  function editArr8() {
    $arr = [
		['6', '12', '5'],
		['11', '7', '9'],
		['22', '13', '15'],
	  ];

    $n = 3;
    for($i=0; $i<$n; $i++)
    {
      $sum = 0;
        for ($j=0; $j<$n; $j++) {
          $sum=$sum+$arr[$i][$j] - $arr[$j][$i];
          $arr[$i][$i]=$sum;
        }
    }

    echo "<table class='table-cell'>";
    foreach ($arr as $resultV){
            echo "<tr>";
            foreach ($resultV as $resV){
                    echo "<td class='table-cell-item'>{$resV}</td>";
            }
            echo "</tr>";
    }
    echo "</table>";
  }


  function getTask10() {
    echo ("В каждой строке матрицы А(n,n) найти наибольший элемент и поменять его местами с
          соответствующим диагональным элементом. ");
  }

  function createArr10() {
    $arr = [
		['41', '52', '33'],
		['64', '15', '36'],
		['47', '28', '11'],
	  ];
    
    echo "<table class='table-cell'>";
    foreach ($arr as $resultV){
            echo "<tr>";
            foreach ($resultV as $resV){
                    echo "<td class='table-cell-item'>{$resV}</td>";
            }
            echo "</tr>";
    }
    echo "</table>";
  }

  function editArr10() {
    $arr = [
		['41', '52', '33'],
		['64', '15', '36'],
		['47', '28', '11'],
	  ];

    $n = 3;
    for($i=0; $i<$n; $i++)
    {
      $max = $arr[$i][1];
      $nMax = 1;
        for ($j=0; $j<$n; $j++) {
          if ($arr[$i][$j] > $max) {
            $max = $arr[$i][$j];
            $nMax = $j;
          }
        }
        $q = $arr[$i][$nMax];
        $arr[$i][$nMax] = $arr[$i][$i];
        $arr[$i][$i] = $q;
    }

    echo "<table class='table-cell'>";
    foreach ($arr as $resultV){
            echo "<tr>";
            foreach ($resultV as $resV){
                    echo "<td class='table-cell-item'>{$resV}</td>";
            }
            echo "</tr>";
    }
    echo "</table>";
  }














?>
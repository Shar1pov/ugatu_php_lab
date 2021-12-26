<?php
  session_start();

  
  if ($_SESSION['auth'] == false) {
    header("location:login.php");
  }

  $servername = "localhost";
  $database = "sharipov_labs";
  $username = "sharipov_labs";
  $password = "pass1234";
  // Создаем соединение
  $conn = mysqli_connect($servername, $username, $password, $database);
  // Проверяем соединение
  mysqli_set_charset($conn, "utf8mb4");
  if (!$conn) {
    die("Невозможно подключиться к серверу: " . mysqli_connect_error());
  }        

  require('fpdf/fpdf.php');

  define('FPDF_FONTPATH',"fpdf/font/");

  $result= mysqli_query($conn,"SELECT * FROM filmshow INNER JOIN movie ON filmshow.id_movie=movie.id_movie INNER JOIN cinema ON filmshow.id_cinema = cinema.id_cinema");

  class PDF_gen extends FPDF
  {
      function Table($result)
      {   
        
          $this->SetFillColor(184, 218, 255);
       
          $this->Cell(15, 10, iconv('utf-8', 'windows-1251',"№ п/п"), 1, 0, 'L',1);
          $this->Cell(90, 10, iconv('utf-8', 'windows-1251',"Название фильма"), 1, 0, 'L',1);
          $this->Cell(50, 10, iconv('utf-8', 'windows-1251',"Жанр"), 1, 0, 'L',1);
          $this->Cell(40, 10, iconv('utf-8', 'windows-1251',"Год выпуска"), 1, 0, 'L',1);
          $this->Cell(65, 10, iconv('utf-8', 'windows-1251',"Название зала"), 1, 0, 'L',1);
          $this->Cell(50, 10, iconv('utf-8', 'windows-1251',"Категория"), 1, 0, 'L',1);
          $this->Cell(45, 10, iconv('utf-8', 'windows-1251',"Дата и время показа"), 1, 0, 'L',1);
          $this->Cell(40, 10, iconv('utf-8', 'windows-1251',"Свободных мест"), 1, 0, 'L',1);
          $this->Ln();
          $counter_items = 1;
          while ($row = mysqli_fetch_array($result)) {
              $this->SetFillColor(255, 255, 255);
              $this->Cell(15, 7, $counter_items, 1, 0, 'C',1);
              $counter_items++;
              $vacant_places = $row['places'] - $row['booked_places'];
              $this->Cell(90, 7, iconv('utf-8', 'windows-1251',$row['movie_name']), 1, 0, 'L',1);
              $this->Cell(50, 7, iconv('utf-8', 'windows-1251',$row['movie_genre']), 1, 0, 'L',1);
              $this->Cell(40, 7, iconv('utf-8', 'windows-1251',$row['movie_god_vipuska']), 1, 0, 'L',1);
              $this->Cell(65, 7, iconv('utf-8', 'windows-1251',$row['name_cinema']), 1, 0, 'L',1);
              $this->Cell(50, 7, iconv('utf-8', 'windows-1251',$row['category_cinema']), 1, 0, 'L',1);
              $this->Cell(45, 7, date('d.m.Y',strtotime($row['timeshow'])), 1, 0, 'L',1);
              $this->Cell(40, 7, iconv('utf-8', 'windows-1251',$vacant_places), 1, 0, 'L',1);
              $this->Ln();

          }
      }
  }

  $pdf= new PDF_gen();
  $pdf->AddFont('Montserrat','','Montserrat.php');
  $pdf->SetFont('Montserrat');
  $pdf->AddPage('L','A3');
  $pdf->SetDisplayMode('real','default');
  $pdf->SetFontSize(10);
  $pdf->Table ($result);

  $pdf->SetAuthor('Sharipov Ilyan Rustemovich');
  $pdf->SetTitle('Movies');
  $pdf->Output('Movies.pdf','D');
?>
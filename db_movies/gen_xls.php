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

  require_once 'PHPExcel/Classes/PHPExcel.php';
  $newObj = new PHPExcel();
  $sheet_item = $newObj->getActiveSheet();
  $result = mysqli_query($conn,"SELECT * FROM filmshow INNER JOIN movie ON filmshow.id_movie=movie.id_movie INNER JOIN cinema ON filmshow.id_cinema = cinema.id_cinema");


  $sheet_item->getColumnDimension('A')->setAutoSize(true);
  $sheet_item->getColumnDimension('B')->setAutoSize(true) ;
  $sheet_item->getColumnDimension('C')->setAutoSize(true) ;
  $sheet_item->getColumnDimension('D')->setAutoSize(true) ;
  $sheet_item->getColumnDimension('E')->setAutoSize(true) ;
  $sheet_item->getColumnDimension('F')->setAutoSize(true) ;
  $sheet_item->getColumnDimension('G')->setAutoSize(true) ;
  $sheet_item->getColumnDimension('H')->setAutoSize(true) ;
  $sheet_item->getColumnDimension('I')->setAutoSize(true);
  $sheet_item->setCellValue('A1','№ п/п');
  $sheet_item->setCellValue('B1','Название фильма');
  $sheet_item->setCellValue('C1','Жанр');
  $sheet_item->setCellValue('D1','Год выпуска');
  $sheet_item->setCellValue('E1','Название зала');
  $sheet_item->setCellValue('F1','Категория');
  $sheet_item->setCellValue('G1','Дата и время показа');
  $sheet_item->setCellValue('H1','Свободных мест');


  $counter = 1;
  $ct = 2;

  while ($row = mysqli_fetch_array($result)) {
      $vacant_places = $row['places'] - $row['booked_places'];
      $sheet_item->setCellValue('A'.$ct.'',$counter);
      $sheet_item->setCellValue('B'.$ct.'',$row['movie_name']);
      $sheet_item->setCellValue('C'.$ct.'',$row['movie_genre']);
      $sheet_item->setCellValue('D'.$ct.'',$row['movie_god_vipuska']);
      $sheet_item->setCellValue('E'.$ct.'',$row['name_cinema']);
      $sheet_item->setCellValue('F'.$ct.'',$row['category_cinema']);
      $sheet_item->setCellValue('G'.$ct.'',date('d.m.Y',strtotime($row['timeshow'])));
      $sheet_item->setCellValue('H'.$ct.'',$vacant_places);
      $ct++;
      $counter++;
  }

  header("Content-Disposition:attachment;filename=Movies.xls");

  $creator = PHPExcel_IOFactory::createWriter($newObj, 'Excel5');
  $creator->save('php://output');

  exit();
?>
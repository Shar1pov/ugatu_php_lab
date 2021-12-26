<?php
session_start();

if ( $_SESSION['auth'] == true) {
    header("location:index.php");
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


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username_s=$_POST["username"];
	$password_s=$_POST["password"];


	$sql="SELECT * FROM users WHERE username='".$username_s."' AND password='".md5($password_s)."' ";

	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_array($result);

    $error_data_text ='';

	if($row["type"]=="1")
	{	
        //Пишем в сессию информацию о том, что мы авторизовались:
	    $_SESSION['auth'] = true; 

		$_SESSION["username"] = $username_s;
        $_SESSION["type"] = "1";
        $_SESSION["id"] = $row["id"];
		header("location:index.php");
	}

	elseif($row["type"]=="2")
	{
        //Пишем в сессию информацию о том, что мы авторизовались:
	    $_SESSION['auth'] = true; 

		$_SESSION["username"] = $username_s;
		$_SESSION["type"] = "2";
        $_SESSION["id"] = $row["id"];
		header("location:index.php");
	}

	else
	{
		$error_data_text = '<p class="text-center mt-3 pb-0">Неверный логин или пароль</p>';
	}

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Шарипов И.Р. ПИ-322</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../style.css" rel="stylesheet">
  </head>
  <body>
<div class="form-login mt-150px">
  <div class="login-form">
    <form action="#" method="POST">
        <h2 class="text-center">Авторизация</h2>   
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input type="text" class="form-control" name="username" placeholder="Введите логин" required="required">				
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </span>                    
                </div>
                <input type="password" class="form-control" name="password" placeholder="Введите пароль" required="required">				
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary login-btn btn-block">Войти</button>
            <?php echo $error_data_text; ?>
        </div>
        
    </form>
    
</div>
</div>
</body>
</html>
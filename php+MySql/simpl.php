<?php 

	session_start();
	
	unset ($_SESSION['username']);
	unset ($_SESSION['email']);
	unset ($_SESSION['password']);
	unset ($_SESSION['repass']);
	unset ($_SESSION['success']);

	unset ($_SESSION['error_username']);
	unset ($_SESSION['error_email']);
	unset ($_SESSION['error_password']);
	unset ($_SESSION['error_repass']);

	function redirect() {
		header ('Location: 3.php');
		exit;
	}

	$user_name = htmlspecialchars(trim($_POST['username']));
	$email     = htmlspecialchars(trim($_POST['email']));
	$password  = htmlspecialchars(trim($_POST['password']));
	$repass    = htmlspecialchars(trim($_POST['repass']));

	$_SESSION['user_name'] = $user_name;
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $password;
	$_SESSION['repass'] = $repass;

if ( strlen($user_name) <= 1 ) {
		$_SESSION['error_username'] = "Введите коректное имя";	
		redirect();
	}
else if (strlen($email) < 5 ) {
	$_SESSION['error_email'] = "Введите коректный email";
	redirect();
	}
else if ( strlen($password) <= 5 || strlen($password) > 30 ) {
		$_SESSION['error_password'] = "Введите коректный пароль";	
		redirect();
	}
else if (strcmp ($password , $repass ) != 0 ) {
		$_SESSION['error_repass'] = "Пароли не совпадают";
		redirect();
	}
else {
		$_SESSION['success'] = "Данные были введены успешно";
		//redirect();

// Подключаемся к базе данных
$mysql = new mysqli("localhost","root" , "root" , "simple_example" );
// Установка кодировки
$mysql->query(" SET NAMES 'utf8' "); 

// Если не удалось выполнить подключение - выводим ошибку 
if ( $mysql->connect_error ) {
  echo 'Ошибка подключения к базе данных :( - ';
}

else {
// создаем новую таблицу 
$mysql->query("
  CREATE TABLE some_info ( 
  Id INT NOT NULL AUTO_INCREMENT,
  Name  VARCHAR (255),
  Email VARCHAR (255),
  Password VARCHAR(32),
  Password_verification VARCHAR(32),
  PRIMARY KEY(Id) )
  ");

// Выполняем SQL запрос по добавлению данных
$mysql->query(" INSERT INTO `some_info` ( `Name` , `Email` , `Password` , `Password_verification` ) 
VALUES ( '$user_name' , '$email' , '$password' ,  '$repass'  );" );

 $mysql->close();

redirect();
}

}
?>





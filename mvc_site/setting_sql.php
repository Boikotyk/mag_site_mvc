<?php
  define('HOST', 'localhost'); 		//сервер
 define('USER', 'admin'); 			//пользователь
 define('PASSWORD', '1234'); 			//пароль
 define('NAME_BD', 'pros');		//база
 $connect = mysqli_connect(HOST, USER, PASSWORD)or die("Не можна зєднатися".mysqli_error( ));
 mysqli_select_db($connect, NAME_BD) or die ("Помилка підключення до бази ".mysqli_error());	

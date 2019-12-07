<?php 
if (isset($_POST['last_name']) && isset($_POST['first_name']) && isset($_POST['patronymic']) && isset($_POST['birthdate']) && isset($_POST['id_patient'])){
    //объявляем POST переменные  
    $lastName = $_POST['last_name']; //фамилия 
    $firstName = $_POST['first_name']; //имя 
    $patronymic = $_POST['patronymic'];
    $birthdate = $_POST['birthdate'];
    $id_patient = $_POST['id_patient'];
    // Параметры для подключения
    $db_host = "localhost"; 
	$db_user = "user"; // Логин БД
	$db_password = "123"; // Пароль БД
	$db_base = 'patient'; // Имя БД
	$db_table = "patient"; // Имя Таблицы БД
	// Подключение к базе данных
	$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
	//запрос для записи в базу данных
 	$result = $mysqli->query("INSERT INTO ".$db_table." (last_name, first_name, patronymic, birthdate, id_patient) VALUES ($last_name, $first_name, $patronymic, $birthdate, $id_patient)")

  //если поле "Фамилия" "Имя" и остальные не пусто 
  if (!empty($lastName) && !empty($firstName) && !empty($patronymic) && !empty($birthdate) && !empty($id_patient)) 
  { 
    //пишем  
    echo "Данные нового пациента успешно внесены. <br />"; 
  } 
  else //иначе 
  {  
    //пишем 
    echo "Одно или все поля пусты"; 

  } 
?> 
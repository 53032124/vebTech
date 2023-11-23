<head>
<link rel="stylesheet" href="style.css">
</head>
<?php
define('DB_HOST', 'std-mysql'); //Адрес
define('DB_USER', 'std_2270_animals'); //Имя пользователя
define('DB_PASSWORD', '123456789'); //Пароль
define('DB_NAME', 'std_2270_animals'); //Имя БД

try{
    $mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
}
catch(Exception $e){
    die('Ошибка подключения');
}

echo "Галерея изображений животных";

?>
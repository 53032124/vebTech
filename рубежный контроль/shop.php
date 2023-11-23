<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title> Магазин
  </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <header class="head" id="head">
      <p class="page-title"><h1>Магазины</h1></p>
      <nav class="blog-navigation">
      <img src="logo.png" width="150">
        <a href="index.php">Главная</a>
        <a href="#foot">Наши контакты</a>
        <a href="products.php">Продукция</a>
        <a href="feedback.html">Обратная связь</a>
        <a href="shop.php">Магазины</a>
        <a href="jobWork.php">Вакансии</a>
        <a href="login.php">Авторизация</a>
        <a href="reg.php">Регистрация</a>
        <a href="basket.php">Корзина</a>

      </nav>
    </header>
    <main class = "content">
  <section class="mainpage" id="mainpage">
  <p><h1>
<?php
require("connect.php");
?>
<?php
// Выполнение запроса к базе данных
$query = "SELECT * FROM магазины ";
$result = mysqli_query($connect, $query);

// Проверка наличия данных в результате запроса
if (mysqli_num_rows($result) > 0) {
    // Вывод данных из таблицы
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Номер: " . $row["id"] . "<br>";
        echo "Название: " . $row["название"] . "<br>";
        echo "Адрес: " . $row["адрес"] . "<br>";
        echo "Город: " . $row["город"] . "<br>";
        echo "Страна: " . $row["страна"] . "<br>";
        echo "<br>";
    }
} else {
    echo "В таблице нет данных.";
}

// Закрытие соединения с базой данных
mysqli_close($connect);
?>
</table>
</h1></p>
    </main>
    <footer class="foot" id="foot">
    <div>
      <h2>Магазин электроники и бытовой техники</h2>
      <h2>Наши контакты:</h2>
      <p>Адрес: г. Москва, м. Автозаводская, ул. Пушкина, д. 1</a></p>
      <p>Телефон: <a href="tel:+7 (920) 204 11 09">:+7 (920) 204 11 09</a></p>
      <p>Email: shop@yandex.ru</p>
      <p>TG: @shop</a></p>
      </div>
    </footer>
  </body>
</html>


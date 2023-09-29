<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        // Формируем ссылку на файл стилей динамически
        $style_file = "main.css";
        $style_path = $_SERVER['DOCUMENT_ROOT'] . "/" . $style_file;
        echo "<link rel='stylesheet' href='$style_file'>";
    ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <title>Домашняя страница</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Услуги</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section class="hero">
            <img src="person.png" alt="Изображение">         <h1>Добро пожаловать на нашу домашнюю страницу</h1>
        </section>

        <section class="content">
            <h2>Мы стремимся сделать Вашу жизнь лучше!</h2>
            <p>Внедрение инновационных технологий и стратегических партнерств позволило компании значительно повысить эффективность производства, 
                снизив издержки на 20% и улучшив качество продукции.
            </p>
            <p>Наши показатели за прошедший месяц </p>
            <table>
                <tr>
                    <th>Удовлетворенность клиентов</th>
                    <th>Социальная ответственность</th>
                    <th>Доходность</th>
                </tr>
                <tr>
                    <td>+2,6%</td>
                    <td>+3,2%</td>
                    <td>+21,4</td>
                </tr>
                
            </table>
        </section>
    </main>

    <footer>
        <div class="contact-info">
            <p>Фантастические Компания Inc.</p>
            <p>Адрес: 123 Вымышленная улица, Вымышленный город, Вымышленная страна</p>
            <p>+1 (555) 123-4567</p>
            <p>info@fantastic-solutions.com</p>
            <p>www.fantastic-solutions.com</p>
        </div>
        <div class="copyright">
            <p>&copy; 2023 Ваша компания. Все права защищены.</p>
        </div>
    </footer>
</body>
</html>

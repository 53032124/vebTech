<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная 11</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <!-- Заголовок страницы -->
    <header class="head" id="head">
        <table>
            <!-- Верхняя строка заголовка -->
            <tr><th colspan="2" height="20"><div>
                <div>
                    <!-- Пустой элемент span -->
                    <span></span>
                </div> </th>
            </tr> 
            <!-- Нижняя строка заголовка -->
            <tr><td><div>
                <div>
                   <!-- Логотип -->
                   <img src="logo.jpg" width="300"> 
                </div></td>
                <!-- Информация о студенте и номер лабораторной работы -->
                <td>
                    <p class="page-title"><h1>Шахно Анастасия Игоревна 221-361</h1></p>
                    <p><h1>Лабораторная работа №11</h1></p>
                </td></tr> 
            </table>
    </header>

    <?php
    // PHP: Обработка параметров из URL
    $type = "table";
    $table = "all";
    if (isset($_GET['table'])) {
        $table = $_GET['table'];
    }

    if (isset($_GET['type'])) {
        $type = $_GET['type'];
    }
    ?>

    <!-- Навигационное меню -->
    <header>
        <nav>
        <li>
    <a <?php if ($type == 'table') {
        echo 'class="selected"';
    }?> href="?type=table&table=all" style="text-decoration: none;">Табличная вёрстка</a>
</li>
<!-- Ссылка на блочную вёрстку -->
<li>
    <a <?php if ($type == 'block') echo 'class="selected"'?> href="?type=block&table=all" style="text-decoration: none;">Блочная вёрстка</a>
</li>
        </nav>
    </header>

    <main>
        <!-- Левое меню с таблицами -->
        <menu class="left">
            <!-- Ссылка на все таблицы -->
            <li><a <?php if ($table == 'all') echo 'class="selected"'?> href="?table=all&type=<?php echo $type; ?>">Всё</a></li>
            <?php
            // Генерация ссылок на таблицы
            for ($i = 2; $i <= 10; $i++) {
                $selected = "";
                if ($table == $i)
                    $selected = 'class="selected"';
                echo '<li><a '.$selected.' href="?table='.$i.'&type='.$type.'">'.$i.'</a></li>';
            }

            // Функция для вывода таблицы в табличном формате
            function all_table($table, $type): void
            {
                echo '<table class="table">';
                for ($i = 1; $i <= 10; $i++) {
                    echo '<tr>';
                    echo '<td><a href="?table='.$i.'&type='.$type.'">' . $i . '</a></td>';
                    echo '<td><p><a href="?table='.$i.'&type='.$type.'">' . $i . '</a>*<a href="?table='.$table.'&type='.$type.'">' . $table . '</a>='.($table * $i <= 10 ? '<a href="?table='.$i*$table.'&type='.$type.'">' . $i*$table . '</a>': $table*$i).'</p></td>';
                    echo '</tr>';
                }
                echo '</table>';
            }

            // Функция для вывода таблицы в блочном формате
            function div_table($table, $type): void {
                echo '<div class="div-table">';
                for ($i = 1; $i <= 10; $i++) {
                    echo '<div class="row">';
                    echo '<div class="col"><a href="?table='.$i.'&type='.$type.'">' . $i . '</a></div>';
                    echo '<div class="col"><p><a href="?table='.$i.'&type='.$type.'">' . $i . '</a>*<a href="?table='.$table.'&type='.$type.'">' . $table . '</a>='.($table * $i <= 10 ? '<a href="?table='.$i*$table.'&type='.$type.'">' . $i*$table . '</a>': $table*$i).'</p></div>';
                    echo '</div>';
                }
                echo '</div>';
            }
            ?>
        </menu>

        <!-- Секция с отображением таблиц -->
        <section>
            <?php
            // Функция для отрисовки всех таблиц или конкретной таблицы в зависимости от параметров
            function render_all($type): void
            {
                switch ($type) {
                    case 'table':
                        echo '<table class="table">';
                        for ($i = 1; $i <= 10; $i++) {
                            echo '<tr>';
                            for ($j = 1; $j <= 10; $j++) {
                                echo '<td><p><a href="?table=' . $i . '&type=' . $type . '">' . $i . '</a>*<a href="?table=' . $j . '&type=' . $type . '">' . $j . '</a>=' . ($j * $i <= 10 ? '<a href="?table=' . $i * $j . '&type=' . $type . '">' . $i * $j . '</a>' : $j * $i) . '</p></td>';
                            }
                            echo '</tr>';
                        }
                        echo '</table>';
                        break;
                    case 'block':
                        echo '<div class="div-table">';
                        for ($i = 1; $i <= 10; $i++) {
                            echo '<div class="row">';
                            for ($j = 1; $j <= 10; $j++) {
                                echo '<div class="col"><p><a href="?table='.$i.'&type='.$type.'">' . $i . '</a>*<a href="?table='.$j.'&type='.$type.'">' . $j . '</a>='.($j * $i <= 10 ? '<a href="?table='.$i*$j.'&type='.$type.'">' . $i*$j . '</a>': $j*$i).'</p></div>';
                            }
                            echo '</div>';
                        }
                        echo '</div>';
                        break;
                };
            }

            // Функция для отрисовки конкретной таблицы
            function render_specific($table, $type): void
            {
                switch($type) {
                    case 'table':
                        all_table($table, $type);
                        break;
                    case 'block':
                        div_table($table, $type);
                        break;
                };
            }

            // Определение, выводить все таблицы или конкретную
            if ($table == 'all') {
                render_all($type);
            } else {
                render_specific($table, $type);
            }
            ?>
        </section>
    </main>

    <!-- Футер с информацией о типе верстки и таблице -->
    <footer>
        <div><h2>Тип верстки </h2><?php echo $type ?></div>
        <div><h2>Тип верстки </h2><?php echo $table ?></div>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шахно Анастасия Игоревна группа 221-361, лабораторная работа №9 вариант 17</title>
    <link rel="stylesheet" href="static/style.css">
</head>
<body>
    <header>
        <img src="static/image/icon.png" alt="University Logo">Шахно Анастасия Игоревна группа 221-361, лабораторная работа №9 вариант 17
    </header>
    <main>
        <?php
        $x = 5;   // начальное значение аргумента
        $encounting = 10000;   // количество вычисляемых значений
        $step = 2;  // шаг изменения аргумента
        $type = 'E'; // тип верстки
        $min_f = 4; // минимальное значение
        $max_f = 25000; // максимальное значение
        $min = PHP_INT_MAX;
        $max = PHP_INT_MIN;
        $sum = 0;
        $count = 0;
        $avg = 0;

        // цикл с заданным количеством итераций
        for ($i = 0; $i < $encounting; $i++, $x += $step) {
            if ($x <= 10) { // если аргумент меньше или равен 10
                if($x === 5) {
                    $f = 'error';
                }
                else {
                    $f = (6 / ($x - 5)) * ($x) - 5;   // вычисляем функцию
                }
            } else if ($x < 20) { // если аргумент меньше 20
                $f = ( $x ** 2 - 1) * $x + 7;   // вычисляем функцию
            } else {    // иначе…
                $f = 4* $x + 5;   // вычисляем функцию
            }
            if ($f !== 'error')
                $f = round($f, 3);
            if($f != 'error' &&  ($f <= $min_f || $f >= $max_f)) {
                break;
            }
            if($f < $min && $f != 'error') {
                $min = $f;
            }
            if($f > $max && $f != 'error') {
                $max = $f;
            }
            if($f != 'error') {
                $sum += $f;
            }

            if ($count === 0){
            switch ($type) {
                case 'B':
                    echo "<ul>";
                    break;
                case 'C':
                    echo "<ol>";
                    break;
                case 'D':
                    echo "<table><tr><td>№</td><td>Аргумент</td><td>Значение функции</td></tr>";
                    break;
            }
        }
        $count += 1;
        $avg = round(($sum / $count),3);
            switch ($type) {
                case 'A':
                    echo "f($x) = $f<br>";
                    break;
                case 'B':
                    echo "<li>f($x) = $f</li>";
                    break;
                case 'C':
                    echo "<li>f($x) = $f</li>";
                    break;
                case 'D':
                    echo "<tr><td>$i</td><td>$x</td><td>$f</td></tr>";
                    break;
                case 'E':
                    echo "<div class='block'>f($x): $f</div>";
                    break;
                default:
                    echo "Invalid type";
            }

        }

        switch ($type) {
            case 'B':
                echo "</ul>";
                break;
            case 'C':
                echo "</ol>";
                break;
            case 'D':
                echo "</table>";
                break;
        }
        if ($count != 0){
        echo "<div>Минимальное значение = ". $min."</div>";
        echo "<div>Максимальное значение = ". $max."</div>";
        echo "<div>Среднее значение = ". $avg."</div>";
        echo "<div>Сумма значений = ". $sum."</div>";
        }
        ?>

    
    </main>
    <footer>
        Type: <?php echo $type; ?>
    </footer>
</body>
</html>


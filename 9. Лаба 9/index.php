<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ткачёв А.В. 211-361 lab9-1</title>

    <meta name="keywords" content="Portfolio, Full Stack Developer, Python Developer, 3D Designer">
    <meta name="description"
          content="Я - Ткачёв Андрей, молодой IT-специалист. Для полной информации ознакомьтесь с моим портфолио по ссылке выше">
    <meta name="author" content="Ткачёв Андрей">

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="images/favicons/site.webmanifest">

    <!--    <link href="css/bootstrap.css" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/colors.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/72af5ff8c1.js" crossorigin="anonymous"></script>
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css"
            rel="stylesheet"
    />
</head>
<body class="mb-10">
<div id="wrapper">
    <header class="header transparent-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg sticky-top navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="./images/polytech_logo.png" alt=""
                             class="d-inline-block align-text-top">
                        <h1 class="text-light">Ткачёв А.В. 211-361 lab9-1</h1>
                    </a>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <section class="section" id="about">
            <div class="container">
                <?php
                $sum = 0;
                $min_value = PHP_INT_MAX;
                $max_value = PHP_INT_MIN;
                $encounting = 100;
                $step = 2;
                $array = ['A', 'B', 'C', 'D', 'E'];
                shuffle($array);
                $type = $array[0];
                $x = -9;
                $i = 0;
                if ($type == 'B')
                    echo '<ul>';
                elseif ($type == 'C')
                    echo '<ol>';
                elseif ($type == 'D')
                    echo '<table><tbody>';
                elseif ($type == 'E')
                    echo '<div class="cells">';
                for (; $i < $encounting; $i++, $x += $step) {
                    if ($x <= 10) {
                        $f = 10 * $x - 5;
                    } elseif ($x >= 20) {
                        if ($x != 25)
                            $f = 3 / ($x - 25);
                        else
                            $f = 'error';
                    } else {
                        $f = ($x + 3) * $x ^ 2;
                    }
                    if ($f != "error") {
                        $sum += $f;
                        $max_value = max($max_value, $f);
                        $min_value = min($min_value, $f);
                    }
                    if ($type == 'A')
                        echo 'f(' . $x . ') = ' . $f . '<br>';
                    elseif ($type == 'B' || $type == 'C')
                        echo '<li>f(' . $x . ') = ' . $f . '</li>';
                    elseif ($type == 'D')
                        echo '<tr><td>' . ($i + 1) . '</td><td>' . $x . '</td><td>' . $f . '</td></tr>';
                    else
                        echo '<div class="cell">f(' . $x . ') = ' . $f . '</div>';
                }
                if ($type == 'B')
                    echo '</ul>';
                elseif ($type == 'C')
                    echo '</ol>';
                elseif ($type == 'D')
                    echo '</tbody></table>';
                elseif ($type == 'E')
                    echo '</div>';
                echo 'Min = ' . $min_value . ', max = ' . $max_value . ', avg = ' . $sum / $i . ', sum = ' . $sum . ', type = ' . $type;
                ?>
            </div>
        </section>
    </main>
</div>

<footer class="footer fixed-bottom mt-auto" id="contacts">
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="footer-social mt-2">
                    <div>
                        <a class="social-icon" target="_blank" itemprop="sameAs"
                           href="https://vk.com/andrey.tkachev2003"><i class="fa fa-vk"></i></a>
                        <a class="social-icon" target="_blank" itemprop="sameAs"
                           href="https://t.me/EnderSony"><i class="fa fa-telegram"></i></a>
                        <a class="social-icon" target="_blank" itemprop="sameAs"
                           href="https://gitlab.com/sim200347"><i class="fa fa-gitlab"></i></a>
                        <a class="social-icon" target="_blank" itemprop="sameAs"
                           href="https://github.com/EnderSim"><i class="fa fa-github"></i></a>
                        <a class="social-icon" target="_blank" itemprop="sameAs"
                           href="https://endersim.artstation.com"><i class="fa-brands fa-artstation"></i></a>
                    </div>
                </div>
                <div class="footer-copy">
                    <?php
                    date_default_timezone_set("Europe/Moscow");
                    $current_year = date("Y");
                    echo '<p>© ' . $current_year . ' All Rights Reserved <a href="#">Tkacheff</a> - Design: <a href="#">Ender</a></p>';
                    echo '<p>Сформировано ' . date('d.m.Y') . ' в ' . date('H-i:s') . '</p>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="dmtop"><i class="fa fa-long-arrow-up"></i></div>

<script src="js/jquery.min.js"></script>
<!--<script src="js/bootstrap.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
<script src="js/all.js"></script>
<script src="js/custom.js"></script>
<script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
></script>
</body>
</html>

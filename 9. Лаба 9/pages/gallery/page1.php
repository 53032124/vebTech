<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
    $title = "Gallery";
    echo '<title>' . $title . '</title>';
    ?>
    <meta name="keywords" content="Portfolio, Full Stack Developer, Python Developer, 3D Designer">
    <meta name="description"
          content="Я - Ткачёв Андрей, молодой IT-специалист. Для полной информации ознакомьтесь с моим портфолио по ссылке выше">
    <meta name="author" content="Ткачёв Андрей">

    <link rel="apple-touch-icon" sizes="180x180" href="../../images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../images/favicons/favicon-16x16.png">
    <link rel="manifest" href="../../images/favicons/site.webmanifest">

    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/all.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/responsive.css" rel="stylesheet">
    <link href="../../css/colors.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/72af5ff8c1.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="wrapper">
    <header class="header transparent-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg sticky-top navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="../../images/favicons/favicon.png" alt="" width="30"
                             class="d-inline-block align-text-top">
                        Ткачёв Андрей
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <?php
                            $set_active = "";
                            $links = [["#", "Главная"], ["#about", "Обо мне"], ["#projects", "Проекты"], ["./pages/gallery/page1.php", "Галерея"], ["./pages/feedback.html", "Обратная связь"], ["#contacts", "Контакты"]];
                            foreach ($links as $link) {
                                if ($link[1] == "Галерея")
                                    $set_active = "active";
                                else
                                    $set_active = "";
                                echo '<li class="nav-item"><a class="nav-link ' . $set_active . '" aria-current="page" href="' . $link[0] . '">' . $link[1] . '</a></li>';
                            }
                            ?>
                        </ul>
                        <a href="../login.html" class="d-flex">Вход</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section class="hero" id="start">
        <div class="magnifier grd3"></div>
        <div class="container">
            <div class="hero-desc">
                <div class="row">
                    <div class="col-md-8">
                        <h4>Галерея</h4>
                        <div>
                            <?php
                            $current_second = date('s') % 2 + 1;
                            if ($current_second == 2)
                                $path = "../../images/scanner-web.png";
                            else
                                $path = "../../images/scanner-ml.png";
                            echo '<img src=' . $path . '>';
                            ?>
                            <div>
                                <a class="btn" href="page1.php">1</a>
                                <a class="btn" href="page2.php">2</a>
                                <a class="btn" href="page3.php">3</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p>Представленные проекты</p>
                        <?php
                        $data = ["Продовед WEB", "Продовед ML"];
                        echo "<ul>";
                        foreach ($data as $name) {
                            echo '<li>' . $name . '</li>';
                        }
                        echo "</ul>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <a href="#projects" class="bottom-button"><i class="flaticon-mouse"></i></a>
    </section>

    <footer class="footer section" id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget">
                        <a href="" title=""><img src="../../images/logo.png" class="footer-logo" alt=""></a>
                        <h4 class="widget-title">
                            Контакты
                        </h4>
                        <div class="about-widget">
                            <p>Всегда рад пообщаться с людьми, которым интересна моя работа</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mobmartop30">
                    <div class="widget">
                        <div class="footer-links">
                            <nav class="foot-link">
                                <ul>
                                    <li><a href="../../#start">Главное</a></li>
                                    <li><a href="../../#about">Обо мне</a></li>
                                    <li><a href="../../#projects">Проекты</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="widget">
                            <div class="contact-widget">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="widget-title">
                                            <i class="fa fa-phone"></i> Phone
                                        </h4>
                                        <p><a class="footer-link" href="tel:+7 (985) 255-41-98">+7 (985) 255-41-98</a>
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="widget-title">
                                            <i class="fa fa-envelope-open-o"></i> Email
                                        </h4>
                                        <p><a class="footer-link"
                                              href="mailto:andrew@tkacheff.su">andrew@tkacheff.su</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer-social">
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
</div>
<div class="dmtop"><i class="fa fa-long-arrow-up"></i></div>

<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/all.js"></script>
<script src="../../js/custom.js"></script>
</body>
</html>


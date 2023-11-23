<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <header class="head" id="head">
    <p class="page-title">Блог</p>

    <nav>
    <?php $link = array("index.php",
    "#skills",
    "#achievments",
    "feedback.php",
    "login.php",
    "#foot");
    $n_link =array("Главная","Мои навыки","Мои достижения","Обратная связь","Вход","Мои контакты");
    ?>
            <a href=<?php echo $link[0];?> class='.activ'><?php echo $n_link[0];?></a>
            <a href=<?php echo $link[1];?> class='.activ'><?php echo $n_link[1];?></a>
            <a href=<?php echo $link[2];?> class='.activ'><?php echo $n_link[2];?></a>
            <a href=<?php echo $link[3];?> class='.activ'><?php echo $n_link[3];?></a>
            <a href=<?php echo $link[4];?> class='.activ'><?php echo $n_link[4];?></a>
        
            </nav>
  </header>
    <div class="login"><form name="login" action="https://httpbin.org/post" method="post">
        <h2>Вход</h2>
        <p>Логин:</p>
      <p><input type="text" name="login" size="40"></p>
      <p>Пароль:</p>
      <p><input type="password" name="password" maxlength="25" size="40" name="password"></p>
      <p>Запомнить меня</p>
      <p><input type="checkbox" name="yes" value="yes">Да</p>
      <p><input type="submit" value="Отправить"></p>   
    </form>
    </div>
    <footer class="foot" id="foot">
    <div>
      <h2>Мои контакты:</h2>
      <p>Телефон: <a href="tel:+7 (996) 476-17-90">+7 (996) 476-17-90</a></p>
      <p>Email: <a href="mailto: nastyshkhno@gmail.com">nastyshkhno@gmail.com</a></p>
      <p>TG: <a href="https://t.me/Ihopd">@Ihopd</a></p>
      <p>Сформировано <?php date_default_timezone_set("Europe/Moscow"); echo date("d.m.Y"); ?> в <?php date_default_timezone_set("Europe/Moscow"); echo date('H-i:s') ?> </p>
      </div>
    </footer>
  </body>
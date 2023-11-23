<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <header class="head" id="head">
    <p class="page-title">Блог</p>
    <nav class="blog-navigation">
    <?php $menu = [["index.php","Главная"],
    ["#skills","Мои навыки"],
    ["#achievments","Мои достижения"],
    ["feedback.php","Обратная связь"],
    ["login.php","Вход"],
    ["#foot","Мои контакты"]
  ];

  foreach($menu as $menu_item)
    { 
      $classname = "";
      if($menu_item[1]=="Вход") 
      $classname = "main";
    echo '<a class="menu '.$classname.'" href="'.$menu_item[0].'">'.$menu_item[1].'</a>';
    }
  ?>
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
    </form></body>
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
  
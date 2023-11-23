<?php	
	include 'header.html';
  ?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
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
      if($menu_item[1]=="Обратная связь") 
      $classname = "main";
    echo '<a class="menu '.$classname.'" href="'.$menu_item[0].'">'.$menu_item[1].'</a>';
    }
  ?>
    </nav>

  </header>
  <body><main><section class="home">
        <?php
    echo '<p> Здравствуйте,'.$_POST['name'].'</p>'; //выводим ФИО
  if ($_POST['category'] == 'propose'){ //проверяем тип обращения
         echo '<p>Спасибо за ваше предложение:</p>';
         echo '<textarea>'.$_POST['message'].'</textarea>';//вывод текста сообщения
  }else{
         echo '<p>Мы рассмотрим Вашу жалобу:</p>';
         echo '<textarea>'.$_POST['message'].'</textarea>';
  }
  ?>
  <?php
  
if (isset($_POST['attachment']) & $_POST['attachment'] != '') echo 'Вы приложили следующий файл: '.$_POST['attachment'];?>

<p><?php echo '<a class="btn" href="feedback.php?name='.$_POST['name'].'&email='.$_POST['email'].'&source='.$_POST['source'].'">Заполнить снова</a>';?></p>
  </section></main></body>
  <footer class="foot" id="foot">
  <div>
      <h2>Мои контакты:</h2>
      <p>Телефон: <a href="tel:+7 (996) 476-17-90">+7 (996) 476-17-90</a></p>
      <p>Email: <a href="mailto: nastyshkhno@gmail.com">nastyshkhno@gmail.com</a></p>
      <p>TG: <a href="https://t.me/Ihopd">@Ihopd</a></p>
      <p>Сформировано <?php date_default_timezone_set("Europe/Moscow"); echo date("d.m.Y"); ?> в <?php date_default_timezone_set("Europe/Moscow"); echo date('H-i:s') ?> </p>
      </div>
    </footer>

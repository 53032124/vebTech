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
  <?php	
	include 'header.html';
  ?>
  <body><main class="feedback">
    <form name="feedback" action="home.php" method="post">
      <h2>Обратная связь</h2>
      <p>ФИО:</p>
      <p><input type="text" name="name" size="40" value="<?php if (isset($_GET['name'])){
                        echo $_GET['name']; }?>"></p>
      <p>Email:</p>
      <p><input type="text" name="email" size="40" value="<?php if (isset($_GET['email'])){
                        echo $_GET['email']; }?>"
></p>
      <p>Откуда вы узнали обо мне?</p>
      <p><input type="radio" name="source" value='1' <?php if (isset($_GET['source'])&$_GET['source']='1'){
                        echo 'checked';}?>>Из интернета</p>
      <p><input type="radio" name="source" value='2' <?php if (isset($_GET['source'])&$_GET['source']='2'){
                        echo 'checked';}?>>От друзей</p>
      <p>Тип обращения:</p>
      <select name="category">
        <option value=1>Жалоба</option>
        <option value=2>Предложение</option>
      </select>
      <p>Сообщение:</p>
      <textarea name="message" cols="40" rows="5"></textarea>
      <p>Файл:</p>
      <p><input type="file" name="attachment" value="<?php if (isset($_GET['attachment'])){
                        echo $_GET['attachment']; }?>"
></p>
      <p>Согласие на обработку персональных данных:</p>
      <p><input type="checkbox" name="yes" value="yes">Да</p>
      <p><input type="submit" value="Отправить"></p>
    </form>
 </main></body>
  <footer class="foot" id="foot">
  <div>
      <h2>Мои контакты:</h2>
      <p>Телефон: <a href="tel:+7 (996) 476-17-90">+7 (996) 476-17-90</a></p>
      <p>Email: <a href="mailto: nastyshkhno@gmail.com">nastyshkhno@gmail.com</a></p>
      <p>TG: <a href="https://t.me/Ihopd">@Ihopd</a></p>
      <p>Сформировано <?php date_default_timezone_set("Europe/Moscow"); echo date("d.m.Y"); ?> в <?php date_default_timezone_set("Europe/Moscow"); echo date('H-i:s') ?> </p>
      </div>
    </footer>

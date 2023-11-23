<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title><?php
        $title="Домашняя страница";
        echo $title;
    ?></title>
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
    ?>

    <?php foreach($menu as $menu_item)
      { 
        $classname = "";
        if($menu_item[1]=="Главная") 
        $classname = "main";
      echo '<a class="menu '.$classname.'" href="'.$menu_item[0].'">'.$menu_item[1].'</a>';
      }
    ?>
      </nav>

    </header>
    <main>
      <article>
        <section class="mainpage" id="mainpage">
          <h2>Главная</h2>
          <p>Меня зовут Шахно Анастасия, я начинающий IT-специалист. </p>
          <?php $s = date('s');	
            $os = $s % 2;	

            if( $os === 0 )	
            $name="https://sun9-76.userapi.com/impg/oJbQw02WlfXYI8gV2cy3AxRQp9FI_8y0o58YoQ/1-P447mUU2c.jpg?size=810x1080&quality=95&sign=71fb0aa2d00998a4cb59c406dbf04e3c&type=album"; 
            else	
            $name="https://sun9-2.userapi.com/impg/4tJeA48iaWQuFzXrjD75wNk5_79OPVZ_41vA8g/jygHcZKkTSo.jpg?size=683x1080&quality=95&sign=aca687e017589c70afb17931641036d7&type=album"; // сохраняем имя второго файла

            echo '<img src="'.$name.'" alt="Меняющаяся фотография" width="300">';
          ?>
          <p>Мне 18 лет, я учусь на 2 курсе Московского политехнического универистета по специальности "Прикладная информатика"</p>
        </section>
        <section class="skills" id="skills">
            <table class="table">
              <caption><h2>Мои навыки</h2></caption> 
              <tr>
                <td>
                  <div>
                    <h4>Java</h4>
                    <p>Опыт в написании клиент-серверных десктопных приложений</p>
                  </div>
                </td>
                <td>
                  <div>
                    <h4>Базы данных</h4>
                    <p>Опыт в создании баз данных, написании sql-запросов</p>
                  </div>
                </td>
                <td>
                  <div>
                    <h4>Тестирование</h4>
                    <p>Опыт в написании unit-тестов, ручном тестировании, составлении тест-кейсов</p>
                  </div>
                </td>
                <td>
                  <div>
                    <h4>Английский язык</h4>
                    <p>Уровень B1</p>
                  </div>
                </td>
              </tr>
          </table>
        </section>
        <section class="achievments" id="achievments">
          <h2>Мои достижения</h2>
          <p>Проектная деятельность в университете: База данных всех проектов</p>
          <p>Моя должность: разработчик базы данных</p>
          <p>Мои задачи:</p>
          <div class="tasks">
          <?php $array = array(
	'Разработка реляционной, инфологической и физической моделей',
	'Написание sql-запросов',
	'Подключение базы данных к сайту', 
	'Наполнение базы данных', 
	'Выдача заданий другим членам IT-команды проекта',);
    $array = array_chunk($array, ceil(count($array)));
    ?>
    <div class="city_list">
	<?php foreach($array as $items): ?>
	<ul>
		<?php foreach($items as $row): ?>
		<li><?php echo $row; ?></li>
		<?php endforeach; ?>
	</ul> 
	<?php endforeach; ?>
    </div>
    
        </div>
        </section>
    </main>
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
</html>
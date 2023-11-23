<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title><?php
        $title="Термины";
        echo $title;
    ?></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <header class="head" id="head">
      <p><h2>Важные термины</h2></p>
    </header>
<body>
<?php
include "connect.php";
?>
<table>
  <tr>
    <th>ID</th>
    <th>Term</th>
  </tr>
  <?php
  $sql = mysqli_query($mysql, 'SELECT * FROM `terms`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "<tr>";
    echo "<td>".$result['id']."</td>";
    echo "<td>".$result['term']."</td>";
    echo "</tr>";
  }
  ?>
</table>
</body>
<footer class="foot" id="foot">
<div>
      <h2>Мои контакты:</h2>
      <p>Телефон: <a href="tel:+7 (996) 476-17-90">+7 (996) 476-17-90</a></p>
      <p>Email: <a href="mailto: nastyshkhno@gmail.com">nastyshkhno@gmail.com</a></p>
      <p>TG: <a href="https://t.me/Ihopd">@Ihopd</a></p>
      <p>Сформировано <?php date_default_timezone_set("Europe/Moscow"); echo date("d.m.Y"); ?> в <?php date_default_timezone_set("Europe/Moscow"); echo date('H-i:s') ?> </p>
      </div>
    </footer>
</html>

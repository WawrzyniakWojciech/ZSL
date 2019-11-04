<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/6_petla.css">
  </head>
  <body>
<table border=25 bordercolor='red'>
    <?php
    $wiersz=1;
    echo '<tr>';
      do {
    $kolumna=1;
    do {
        echo '<td>';
        echo $kolumna*$wiersz,' ';
        $kolumna++;
      } while ($kolumna <= 10);
      echo '</td>';
      echo'<br>';
      $wiersz++;
      echo '</tr>';
    } while ($wiersz <= 10);
     ?>
   </table>

  </body>
</html>

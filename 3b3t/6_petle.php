<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <form method="post">
    <input type="text" name="max" placeholder="rozmiar tabelki">
    <input type="submit" name="zatwierdź" placeholder="zatwierdz">
    <link rel="stylesheet" href="./css/6_petla.css">
  </head>
  <body>
<table border=25 bordercolor='red'>
    <?php
    $wiersz=1;
    $suma=0;
    $max=$_POST['max'];
    echo '<tr>';
      do {
    $kolumna=1;
    do {
      if ($max+1==$wiersz+$kolumna) {
        echo '<td class="red">*</td>';

      }else if ($kolumna==$wiersz) {
        echo '<td class="red">*</td>';
        $suma=$suma+($kolumna*$wiersz);
      }else {
        echo '<td>';
        echo $kolumna*$wiersz,' ';
      }

        $kolumna++;
      } while ($kolumna <= $max);
      echo '</td>';
      echo'<br>';
      $wiersz++;
      echo '</tr>';
    } while ($wiersz <= $max);
     ?>
   </table>
   <?php


   echo 'Suma elementów w "*" wynosi: ',$suma*2;
    ?>
  </body>
</html>

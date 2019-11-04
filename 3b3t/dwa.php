<?php
echo <<< FORM
  <form method="post">
    <input type="text" name="kolor" placeholder="podaj kolor"><br><br>
    <input type="number" name="wiek" placeholder="podaj wiek"><br><br>
    <input type="submit" name="button" value="Zatwierdź">
  </form>
FORM;


if (isset($_POST['kolor'])) {
  $kolor = $_POST['kolor'];
  $wiek = $_POST['wiek'];


  echo "Dane przed poprawą: ", $kolor,'<br>';
  echo "Dane po poprawie: ", trim(ucwords(strtolower($kolor))),'<hr>';
}


 ?>

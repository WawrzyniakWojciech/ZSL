<?php

echo <<< FORM
  <form method="post">
    <input type="text" name="imie" placeholder="wpisz imię"><br><br>
    <input type="submit" name="button" value="Zatwierdź">
  </form>
FORM;

if (isset($_POST['imie'])) {
  $imie = $_POST['imie'];
  echo "Dane przed poprawą:", $imie,'<br>';

//Zamiana na małe litery
  echo strtolower($imie),'<br>';

//Zamiana na duże litery
  echo strtoupper($imie),'<br>';

//Zamiana pierwszej litery na dużą
  echo ucfirst($imie),'<br>';

//Zamiana pierwszej litery na dużą
  echo ucwords($imie),'<br>';

//Zamiana wszystkich na małe, a pierwszą na dużą
  echo ucwords(strtolower($imie)),'<hr>';

###############################################################################
$lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

  echo $lorem,'<br>';
  $col = wordwrap($lorem, 40, '<br>');
  echo $col, '<br>';

//czyszczenie zawartości bufora
//  ob_clean();

###############################################################################
//usuwanie białych znaków

  $name = 'Tomasz';
  $name1 = '   Tomasz';

  echo "Długość zmiennej $name: ", strlen($name),'<br>'; //6
  echo "Długość zmiennej $name1: ", strlen($name1),'<br>'; //9

  echo strlen(trim($name1)),'<hr>';


//przeszukiwanie ciągów znaków

  $address = 'Poznań, ul. Przełajowa 4, tel. (61)123-45-67';
  $search = strstr($address, 'tel');
  echo $search, '<br>';


  $address = 'Poznań, ul. Przełajowa 4, tel. (61)123-45-67';
  $search = strstr($address, 'tel', true);
  echo $search, '<br>';


  $address = 'Poznań, ul. Przełajowa 4, tel. (61)123-45-67';
  $search = stristr($address, 'TEL', true);
  echo $search, '<br>';


  echo strstr('zsl@gmail.com', '@'),'<br>';
  echo strstr('zsl@gmail.com', 64),'<hr>'; //ASCII @-64

//pozycja

$pos = strpos('abcdefg', 'cde');
echo $pos,'<br>';


$pos = strpos('abcdefg', 'ab');
echo $pos,'<br>';

/*
  Sprawdź czy ciąg o nazwie tekst1 znajduje się w ciągu tekst2
*/

$text1 = 'abcdabcd';
$text2 = 'ab';

if (strpos($text1, $text2) === false) {
  echo "Ciąg $text2 został znaleziony w ciągu $text1",'<hr>';
}
  else {
    echo "Ciąg $text2 został znaleziony w ciągu $text1",'<hr>';
  }

//przetwarzanie ciągu znaków

  $replace = str_replace('zsl', 'szkola', 'zsl ul. Przełajowa 4');
  echo $replace,'<br>';


//substr

  echo substr('Janusz Kowalski', 3),'<br>';
  echo substr('Janusz Kowalski', -3),'<br>';
  echo substr('Janusz Kowalski', 7, 5),'<br>';
  echo substr('Janusz Kowalski', 7, -3),'<br>';

###############################################################################
//zamiana polskich znakówarning

  $login = 'żąkil';
  $censore = array('ą', 'ę', 'ś', 'ż', 'ź', 'ń', 'ć', 'ł', 'ó');
  $replace = array('a', 'e', 's', 'z', 'z', 'n', 'c', 'l', 'o');

  $newlogin = str_replace($censore, $replace, $login);
  echo $newlogin, '<hr>';

}

  $text = <<< TEXT
    zsł - Zespół
    szkół
    Łączności
  TEXT;

  echo "Przed wywołaniem funkcji nl2br:<br>$text<br>";
  echo "<br>Po wywołaniu funkcji nl2br:<br>";
  echo nl2br($text);




 ?>

<?php
  $potega = 2**10;

  echo $potega;

  $a = 1;
  $b = 1.0;

  if ($a == $b) {
    echo "$a jest równa $b<br>";
  }
  else {
    echo "$a nie jest równa $b<br>";
  }

  if ($a === $b) {
    echo "$a jest identyczna $b<br>";
  }
  else {
    echo "$a nie jest identyczna $b<br>";
  }

  echo gettype($a);
  echo gettype($b),'<hr><hr>';


  $x = 1;
  $y = 1;
  $result = $x <=> $y;
  echo $result,'<hr><hr>';
########################################

  $x = 2;
  echo $x++;
  echo ++$x;
  echo $x;
  $y = $x++;
  echo $y;
  $y = ++$x;
  echo $y;
  echo ++$y,'<hr>';

  ###############################################

  $text1 = '123abc';
  $text1 = (int)$text1;
  echo $text1,'<br>'; //123

  $text2 = 12;
  $text2 = (bool)$text2;
  echo $text2,'<br>'; // 1 - true, nic nie wyświetla - false

  $text3 = 123;
  $text3 = (unset)$text3;
  echo $text3,'<br>';
  echo gettype($text3),'<hr>';

  ##############################################

  $x = 10;
  echo is_string($x);
  echo is_bool($x);
  echo is_float($x);
  echo is_int($x);
  echo is_null($x),'<hr>';


  $w;
  echo @gettype($w); //operator ignorowania błędów

  ####################################################
  //zmienne superglobalne

  echo $_SERVER['SERVER_PORT'],'<br>';
  echo $_SERVER['SCRIPT_NAME'],'<br>';
  echo $_SERVER['SERVER_PROTOCOL'],'<br>';
  echo $_SERVER['DOCUMENT_ROOT'],'<br>';
  echo $_SERVER['SERVER_NAME'],'<br>';

  $localFile = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'].'<br>';

  echo $localFile,'<hr>';

  #######################################################
  //stałe

  define('NAZWISKO', 'Kowalski');
  echo NAZWISKO,'<br>';

  define('imie', 'Janusz');
  echo imie,'<br>';

  define('SURNAME', 'Nowak', true);
  echo SURnamE,'<hr>';

###############################################################
//stałe predefiniowane

echo PHP_VERSION,'<br';
echo gettype(PHP_VERSION),'<br>';

if (PHP_VERSION > 5.6){
  echo 'Nowa wersja PHP','<br>';
}else{
  echo 'Stara wersja PHP','<br>';
}

echo PHP_OS;
echo __LINE__;
echo __FILE__;
echo __DIR__;

 ?>

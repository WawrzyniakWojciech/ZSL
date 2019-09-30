<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $name = 'Janusz';
    echo "Twoje imię : $name";
    echo "Twoje imię :" ,$name.'<br>';
    echo "Twoje imię :" .$name.'<hr>';



//systemy liczbowe
  $x = 10;
  $hex = 0xA;
  $oct = 021;
  $bin = 0b1011;

  echo $hex,'<br>';
  echo $oct,'<br>';
  echo $bin,'<hr>';

//heredoc

  $name = 'Anna';
  $surname = 'Kowal';

  echo <<<ETYKIETA
  imię: $name<br>
  nazwisko: $surname<hr>
ETYKIETA;

$x = <<<ETYKIETA
imię: $name<br>
nazwisko: $surname<hr>
ETYKIETA;

  echo $x;


//nowdoc

echo <<< 'ETYKIETA'
imię: $name<br>
nazwisko: $surname<hr>
ETYKIETA;



  $x = 20;
  echo "Nazwa zmiennej: \$x ma wartość $x";




    ?>


  </body>
</html>

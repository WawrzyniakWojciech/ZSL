<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularz</title>
  </head>
  <body>


    <?php
    require_once './5_1_form.php';

      if (!empty($_POST['city'])&& !empty($_POST['name'])){
        $city = $_POST['city'];
        $name = $_POST['name'];
        $text = nl2br($_POST['text']) ;

    require_once './5_1_switch.php';

        echo "Imię: $name",'<br>';
        echo "Miasto: $city",'<br>';
        echo "Text: $text",'<br>';

      }
     ?>



  </body>
</html>

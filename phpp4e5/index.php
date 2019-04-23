<?php
function myFunction($phrase, $number){
  $phrase = 'bonjour tout le monde !';
  $number = 28;
    echo $phrase . $number;
}


 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>
    <p><?=
      myFunction ($phrase, $number);
     ?>
    </p>

  </body>
</html>

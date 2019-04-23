<?php
  function myFunction($age, $gender){
    if($age >=18 && $gender == 'homme'){
      $message = 'Vous êtes un homme et vous êtes majeur';
    }elseif($age <18 && $gender == 'homme'){
      $message = 'Vous êtes un homme et vous êtes mineur';
    }elseif ($age >=18 && $gender == 'femme'){
      $message = 'Vous êtes une femme et vous êtes majeur';
    }elseif($age <18 && $gender == 'femme'){
      $message = 'Vous êtes une femme et vous êtes mineur';
    }else{
      $message = 'erreur';
    }
    return $message;
  };
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>phpp4e7</title>
  </head>
  <body>
    <p><?= myFunction(17, 'femme') ?></p>
  </body>
</html>

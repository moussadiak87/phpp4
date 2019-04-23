<?php
function myFunction($lastname, $firstname, $age){
  echo 'Bonjour  '. $lastname .  $firstname . ' ,tu as' . $age . ' ans';
}
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>phpp4e6</title>
   </head>
   <body>
     <p><?= myFunction( 'moussa' , 'diakho' , 31 ) ?></p>
   </body>
 </html>

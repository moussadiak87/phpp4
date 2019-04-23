<?php
  function myFunction($numberA = 15, $numberB = 15, $numberC = 15){
    return $numberA + $numberB + $numberC;
  }
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>phpp4e8</title>
   </head>
   <body>
     <p><?= myFunction(); ?></p>

   </body>
 </html>

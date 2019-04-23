<?php
function numberfunction($numberA, $numberB){
  if ($numberA > $numberB){
    $message ='le 1er nombre est plus grand';
  }elseif ($numberA < $numberB){
    $message='le 1er nombre est plus petit';
  }else{
    $message='les deux nombres sont identiques';
  }
  return $message;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>phpp4e4</title>
</head>
<body>
  <p><?=numberfunction(48,48);?><p>
  </body>
  </html>

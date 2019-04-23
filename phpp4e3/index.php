<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
    <title>phpp4e3</title>
  </head>
  <body>
    <?php
      function hello($name) { ?>
        <p><?='bonjour !'.$name;?></p>
      <?php }
          /* appel la function */
      hello(moussa);
    ?>
  </body>
</html>

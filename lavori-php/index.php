<?php

$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

$length = strlen($text);

$badword = $_GET['badword'];

$replace = str_replace($badword, '***', $text, $counter);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Badwords</title>
  </head>
  <body>

    <p><?php echo $text; ?></p>

    <p>Il testo è composto da <?php echo $length; ?> caratteri.</p>

    <p><?php echo $replace; ?></p>

    <p>La parola modificata è: <?php echo $badword; ?></p>

  </body>
</html>

<!-- http://localhost:8888/lavori-php/index.php?badword=ipsum -->

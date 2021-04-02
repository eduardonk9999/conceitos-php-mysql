<?php
  $name = 'Eduardo';
  $idade = 'Sua idade é ';
  $age = 29;


  // pegando um caracter especifico
  echo $name[0]; 

  // quantidade de caracteres
  echo strlen($name);

?>

<html>
  <head>
    <title>Variaveis</title>
  </head>

  <body>
    <h1><?php echo $name ?> | <span><?php echo $age ?></span></h1>
    <br>

    <p><?php echo $idade.$age ?></p>
  </body>
</html>
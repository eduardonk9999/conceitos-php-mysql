<?php
  function sayHello($name) {
    echo "good morning $name";
  }
  
  // sayHello('mario');
  
  function formatProduct($product) {
    echo "{$product['name']} costs EURO{$product['price']} to buy <br />";
  }

  formatProduct(['name'=>'gold star', 'price'=> 20]);


?>

<html>
  <head>
    <title>functions</title>
  </head>

  <body>
   
  </body>
</html>
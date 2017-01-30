<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      for ($num = 1; $num <= 100; $num = $num + 1) {
      if ($num % 3 ==0 && $num % 5 ==0) {
        echo "<p>FizzBuzz</p>";
      }
      elseif ($num % 3 == 0) {
        echo "<p>Fizz</p>";
      }
      elseif ($num % 5 == 0) {
        echo "<p>Buzz</p>";
      }
      else {
        echo "<p>$num</p>";
      }
      }
    ?>
  </body>
</html>

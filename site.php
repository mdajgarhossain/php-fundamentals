<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Fundamentals</title>
  </head>
  <body>

    <?php
      echo "There once was a man named <b>Navin Thapa</b>. <br>";
      echo "He was 30 years old. <br>";
      echo "He really liked the name Navin. <br>";
      echo "But didn't like being 30. <br>";
      echo "<hr/>";
      // Another way
      echo "There once was a man named <b>Navin Thapa</b>. <br>
      He was 30 years old. <br>
      He really liked the name Navin. <br>
      But didn't like being 30. <br>
      <hr/>";
      // Another way using variables
      $characterName = "Navin Thapa";
      $characterAge = 30;
      echo "There once was a man named <b>$characterName</b>. <br>";
      echo "He was $characterAge years old. <br>";
      $characterName = "Karim Uthapa";
      echo "He really liked the name $characterName. <br>";
      echo "But didn't like being $characterAge. <br>";
      echo "<hr/>";
     ?>
  </body>
</html>

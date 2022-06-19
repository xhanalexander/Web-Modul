<!DOCTYPE html>
<html>
<head>
   <title>Operator2</title>
</head>
<body>
   <?php
   $a = 5;
   $b = 10;

   echo "True = 1". "<br>";
   echo "False = 0". "<br><br>";

   echo "$a == $b : " . ($a == $b) . "<br>";    // false
   echo "$a != $b : " . ($a != $b) . "<br>";    // true
   echo "$a > $b : " . ($a > $b) . "<br>";      // false
   echo "$a < $b : " . ($a < $b) . "<br>";      // true
   echo "($a == $b) && ($a > $b) : " . (($a != $b) && ($a > $b)) . "<br>";    // false
   echo "($a == $b) || ($a > $b) : " . (($a != $b) || ($a > $b)) . "<br>";    // true
   ?>
</body>
</html>
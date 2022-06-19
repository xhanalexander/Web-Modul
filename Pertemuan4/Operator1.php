<!DOCTYPE html>
<html>
<head>
   <title>Operator1</title>
</head>
<body>
   <?php
   $gaji = 5000000;
   $pajak = 0.5;
   $thp = $gaji - ($gaji * $pajak);

   echo "Gaji sebelum pajak : Rp." . $gaji . "<br>";
   echo "Gaji setelah pajak : Rp." . $thp . "<br>";
   ?>
</body>
</html>
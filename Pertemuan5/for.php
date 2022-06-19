<?php
// Program Struktur perulangan For dan beberapa variasinya

for ($i = -1; $i <= 10; $i++) {
   echo "$i ";
}

echo "<br><br>";

for ($i = 0; ; $i++) {
   if ($i > 10) {
      break;
   }
   echo "$i ";
}

echo "<br><br>";

$i = -2;
for ( ; ;) { 
   if ($i > 10) {
      break;
   }
   echo "$i ";
   $i++;
}

echo "<br><br>";

for ($i = 1; $i <= 10; print "$i ", $i++);

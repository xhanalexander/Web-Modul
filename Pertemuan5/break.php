<?php
// Program Struktur Break dan Continue

for ($i=0; $i < 10 ; $i++) { 
   if ($i == 5)
      continue;
   if ($i == 8)
      break;
   echo "<h2>$i </h2>";
}

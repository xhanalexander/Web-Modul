<?php
// program Struktur Kondisi if...else

$a = 50;
if ($a >= 60) {
   echo "Nilai Anda $a, Anda LULUS";
} else {
   echo "Nilai Anda $a, Anda GAGAL";
}

echo "<br>";

function nilai($a) {
   if ($a >= 60) {
      echo "Nilai Anda $a, Anda LULUS";
   } else {
      echo "Nilai Anda $a, Anda GAGAL";
   }
}

echo nilai(80);
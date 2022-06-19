<?php
// Program struktur switch..case untuk menampilkan nama hari dalam bahasa indonesia

$day = date ("D");
switch ($day) {
   case 'Sun':
      $day = "Minggu";
      break;

   case 'Mon':
      $day = "Senin";
      break;

   case 'Tue':
      $day = "Selasa";
      break;

   case 'Wed':
      $day = "Rabu";
      break;

   case 'Thu':
      $day = "Kamis";
      break;

   case 'Fri':
      $day = "Jumat";
      break;

   case 'Sat':
      $day = "Sabtu";
      break;
   
   default:
      $day = "Kiamat";
      break;
}

echo "<h2>Hari ini adalah hari <b> $day </b></h2>";


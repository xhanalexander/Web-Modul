<!DOCTYPE html>
<html>
<head>
   <title>Tipe</title>
</head>
<body>
   <?php
   $NIM = "0411500400";
   $NAMA = 'Choitul Musyarofah';
   $UMUR = 20;
   $NILAI = 90.5;
   $STATUS = TRUE;
   
   echo "NIM : " . $NIM . "<br>";
   echo "NAMA : " . $NAMA . "<br>";
   print "UMUR : " . $UMUR . "<br>";
   printf ("NILAI : %.3f<br>", $NILAI);
   if ($STATUS) {
      echo "STATUS : Aktif";
   } else {
      echo "STATUS : Tidak Aktif";
   }
   ?>
</body>
</html>
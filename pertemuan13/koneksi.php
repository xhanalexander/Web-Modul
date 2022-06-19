<?php
   $dbHost = "localhost";
   $dbUser = "root";
   $dbPass = "";
   $dbName = "crud";

   $koneksi = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

   if (mysqli_connect_error()){
      echo "database failed : " . mysqli_connect_error();
   }

?>
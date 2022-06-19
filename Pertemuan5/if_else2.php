<?php
// Program memeriksa username dan password dengan if...else

$user = "admin";
$pass = "admin";

if ($user == "admin" && $pass == "admin") {
   echo "Login Berhasil";
} else {
   echo "Login Gagal";
}

function cek_login($user, $pass) {
   if ($user == "user" && $pass == "1234") {
      return "Login Berhasil";
   } else {
      return "Login Gagal";
   }
}
echo "<br>";
echo cek_login("user", "admin");
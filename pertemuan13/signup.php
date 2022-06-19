<?php
session_start();
include "koneksi.php";

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO bjrlogin VALUES ('', '$name', '$username', '$password')";    // Create a query

$result = mysqli_query($koneksi, $query);

?>

<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Page</title>
</head>
<body>
   <h2>Halaman Admin</h2>

   <?php
      session_start();
      if($_SESSION['status']!="login"){
         header("location:../login.php?pesan=belum_login");
      }
   ?>

   <h4>Welcome, <?php echo $_SESSION['username']; ?>! you are logged in </h4>
   <br>
   <a href="logout.php">Logout</a>
   
</body>
</html>
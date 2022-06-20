<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pendaftaran</title>
</head>
<body>
   <header>
      <h3>Pendaftaran Siswa Baru</h3>
      <h3>SMK Coding</h3>
   </header>

   <h4>Menu</h4>
   <nav>
      <?php if (isset($_GET['status'])): ?>
      <p>
         <?php
            if ($_GET['status'] == 'success') {
               echo 'Pendaftaran berhasil!';
            } else {
               echo 'Pendaftaran gagal!';
            }
         ?>
      </p>
      <?php endif; ?>
         <ul>
            <li><a href="form-daftar.php">Daftar baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
         </ul>
   </nav>
   
</body>
</html>
<?php include('config.php'); ?>

<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>List</title>
</head>
<body>
   <header>
      <h3>Siswa yang mendaftar</h3>
   </header>

   <nav>
      <a href="form-daftar.php">[+] tambah baru</a>
   </nav>

   <br>

   <table border="1">
      <thead>
         <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>sekolah Asal</th>
            <th>Tindakan</th>
         </tr>
      </thead>
      <?php 
         $sql = "SELECT * FROM calon_siswa";
         $query = mysqli_query($db, $sql);
         
         while ($siswa = mysqli_fetch_assoc($query)) {
            echo '<tr>';

            echo '<td>' . $siswa['id'] . '</td>';
            echo '<td>' . $siswa['nama'] . '</td>';
            echo '<td>' . $siswa['alamat'] . '</td>';
            echo '<td>' . $siswa['jenis_kelamin'] . '</td>';
            echo '<td>' . $siswa['agama'] . '</td>';
            echo '<td>' . $siswa['sekolah_asal'] . '</td>';
            echo '<td>';
            echo '<a href="form-edit.php?id=' . $siswa['id'] . '">Edit</a> | ';
            echo '<a href="hapus.php?id=' . $siswa['id'] . '">Hapus</a>';
            echo '</td>';

            echo '</tr>';
         }
      ?>
   </table>

   <p>Total : <?php echo mysqli_num_rows($query) ?> </p>
   
</body>
</html>
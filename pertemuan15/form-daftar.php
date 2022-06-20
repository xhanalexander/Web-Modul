<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formulir Pendaftaran</title>
</head>
<body>
   <header>
      <h3>Formulir Pendaftaran Siswa baru</h3>
   </header>

   <form action="proses-pendaftaran.php" method="post">
      <fieldset>
         <p>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" placeholder="nama lengkap">
         </p>
         <p>
            <label for="alamat">Alamat :</label>
            <textarea name="alamat"></textarea>
         </p>
         <p>
            <label for="jenis_kelamin">Jenis Kelamin :</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki</label>
            <label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
         </p>
         <p>
            <label for="agama">Agama</label>
            <select name="agama">
               <option value="Islam">Islam</option>
               <option value="Kristen">Kristen</option>
               <option value="Protestan">Protestan</option>
               <option value="Hindu">Hindu</option>
               <option value="Buddha">Buddha</option>
            </select>
         </p>
         <p>
            <label for="sekolah_asal">Sekolah Asal</label>
            <input type="text" name="sekolah_asal" placeholder="Nama sekolah">
         </p>
         <p>
            <input type="submit" name="daftar" value="Daftar">
         </p>
      </fieldset>
   </form>


   
</body>
</html>
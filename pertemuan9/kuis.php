<html>
   <head>
      <title>Program Hitung Gaji karyawan</title>
   </head>
   <body>
      <center>
         <h1>Program Hitung Gaji karyawan</h1>
         <FORM ACTION="" METHOD="POST" NAME="input">
            NIP : <br><input type="number" name="nip" maxlength="10" minlength="4" required><br><br>
            Nama Pegawai : <br><input type="text" name="nama" required><br><br>
            Gaji : <br><input type="number" name="gaji" minlength="6" minlength="4"><br><br>
            Bonus : <br><input type="number" name="bonus"><br><br>
            <input type="submit" name="Input" value="Submit">
            <input type="submit" name="clear" value="Clear">
         </FORM>
         <?php

         function lines() {
            for ($i=0; $i < 50; $i++) { 
               echo  "=";
            }
         }

            if (isset($_POST["Input"])) {
               $nip = $_POST["nip"];
               $name = $_POST["nama"];
               $salary = $_POST["gaji"];
               $bonus = $_POST["bonus"];
               $allowance = 0.05 * $salary;
               $tax = 0.1 * $salary;
               $total = ($salary + $bonus + $allowance) - $tax;
               
               lines();
               echo "<br>";

               echo "NIP : $nip<br>";
               echo "Nama : $name<br>";
               lines();
               echo "<br>";

               echo "Gaji Pokok: Rp" . number_format($salary) . "<br>";
               echo "Bonus : Rp" . number_format($bonus) . "<br>";
               echo "Tunjangan : Rp" . number_format($allowance) . "<br>";
               echo "Pajak : Rp" . number_format($tax) . "<br>";

               lines();
               echo "<br>";
               echo "Gaji yang harus diterima : " . "<b>Rp" . number_format($total) . "</b>";

            } else if (isset($_POST["clear"])) {
               header("location:kuis.php");
            }
         ?> 
      </center>
   </body>
</html>


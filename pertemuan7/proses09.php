<?php
if (isset($_POST["proses"])) {
   $saran = $_POST["saran"];
   echo "Kritik / saran anda adalah " ;
   echo "<b style=color:blue>$saran</b> <br>";

}

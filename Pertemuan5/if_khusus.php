<?php
// Program struktur kondisi khusus ? untuk memeriksa tahun kabisat

$tahun = date ("Y");
$kabisat = ($tahun % 4 == 0) ? "Kabisat" : "Bukan Kabisat";
echo "<h2>Tahun $tahun adalah $kabisat</h2>";


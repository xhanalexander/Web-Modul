<?php
// Program memeriksa suatu variabel ada atau tidak

$user = "admin";

if (!isset($user)) {
   echo "Variabel \$user tidak ada/ belum terbentuk";
} else {
   echo "Variabel ada";
}


<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_pplg1');
if ($koneksi) {
    // echo "Koneksi Berhasil";
}else{
    echo $koneksi->error;
}

?>
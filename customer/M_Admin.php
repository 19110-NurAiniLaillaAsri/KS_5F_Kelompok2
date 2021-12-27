<?php
    require '../koneksi.php';
    require 'function/session.php';
     $sqlRead = "SELECT * FROM user WHERE hak_akses = 'Pemilik' OR hak_akses = 'Staff Toko'";
     $queryRead = mysqli_query($koneksi, $sqlRead);
?>
<?php
    require 'session.php';
    require '../koneksi.php';
//Read Data Motor//
    $sqlRead = "SELECT * FROM transaksi ORDER BY status_transaksi = 'Waiting' DESC";
    $queryRead = mysqli_query($koneksi, $sqlRead);

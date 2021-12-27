<?php
    require 'session.php';
    require '../koneksi.php';
//Read Data Motor//
    $sqlRead = "SELECT * FROM transaksi ORDER BY status_transaksi = 'Waiting' DESC";
    $queryRead = mysqli_query($koneksi, $sqlRead);
//Create Transaksi
    if(isset($_POST["tambahTransaksi"])){
        $id_motor = $_POST["id_motor"];
        $id_user = $_POST["id_user"];

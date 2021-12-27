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
        // Random ID Transaksi
        $queryID = mysqli_query($koneksi, "SELECT max(id_transaksi) as id_terbesar FROM transaksi");
        $data = mysqli_fetch_array($queryID);
        $id_baru = $data['id_terbesar'];
        $urutan = (int) substr($id_baru, 3, 4);
        $urutan++;
        $huruf = "TRN";
        $id_transaksi = $huruf . sprintf("%04s", $urutan);

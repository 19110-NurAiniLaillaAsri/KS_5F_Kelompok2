<?php
    require 'session.php';
    require '../koneksi.php';

//Read Data Motor//
    $sqlRead = "SELECT * FROM data_motor";
    $queryRead = mysqli_query($koneksi, $sqlRead);

//Create Data Motor
    if(isset($_POST["tambahMotor"])) {
        $nama_pemilik = $_POST["nama_pemilik"];
        $plat_no = $_POST["plat_no"];
        $type = $_POST["type"];
        $warna = $_POST["warna];
        $tahun_pembuatan = $_POST["tahun_pembuatan"];
        $masa_berlaku_stnk = $_POST["masa_berlaku_stnk];
        $pajak = $_POST["pajak'];
        $harga_asli = $_POST["harga_asli"];
        $harga_jual = $_POST["harga_jual"];
        $odometer = $_POST["odometer"];
?>

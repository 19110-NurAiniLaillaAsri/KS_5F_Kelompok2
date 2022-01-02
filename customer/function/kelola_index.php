<?php
    require '../koneksi.php';
    require 'session.php';
// Read Data Motor.
    $sqlRead = "SELECT * FROM transaksi t, data_motor dm WHERE t.id_user = '$id_user' AND t.id_motor = dm.id_motor";
    $queryRead = mysqli_query($koneksi, $sqlRead);
// Motor Tersedia.
    $sqlTersedia = "SELECT * FROM data_motor WHERE status='Tersedia'";
    $queryTersedia = mysqli_query($koneksi, $sqlTersedia);
    $jmlTersedia = mysqli_num_rows($queryTersedia);
// Motor Booked.
    $sqlBooked = "SELECT * FROM data_motor WHERE status='Booked'";
    $queryBooked = mysqli_query($koneksi, $sqlBooked);
    $jmlBooked = mysqli_num_rows($queryBooked);
// Motor Terjual.
    $sqlTerjual = "SELECT * FROM data_motor WHERE status='Terjual'";
    $queryTerjual = mysqli_query($koneksi, $sqlTerjual);
    $jmlTerjual = mysqli_num_rows($queryTerjual);
// Jumlah Customer.
    $sqlCustomer = "SELECT * FROM user WHERE hak_akses='Customer'";
    $queryCust = mysqli_query($koneksi, $sqlCustomer);
    $jmlCustomer = mysqli_num_rows($queryCust);
?>

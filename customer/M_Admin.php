<?php
    require '../koneksi.php';
    require 'function/session.php';
     $sqlRead = "SELECT * FROM user WHERE hak_akses = 'Pemilik' OR hak_akses = 'Staff Toko'";
     $queryRead = mysqli_query($koneksi, $sqlRead);
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles_index.css">
    <title>Data User</title>
</head>
<body>
<!-- Sidebar -->
    <div class="d-flex" id="wrapper">
        <div class="bg-3" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 warna-1 fs-4 fw-bold text-uppercase">
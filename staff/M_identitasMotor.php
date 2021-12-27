<?php
    require 'function/kelola_identitasMotor.php';
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles_index.css">
    <title>Identitas Motor</title>
</head>
<body>
<!-- Sidebar -->
    <div class="d-flex" id="wrapper">
        <div class="bg-3" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 warna-1 fs-4 fw-bold text-uppercase">
                <i class="me-2"></i>Penjualan<br>Motor Bekas
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent fw-bold warna-1"><i class="fas fa-home me-2"></i>Home</a>
                <a href="M_identitasMotor.php" class="list-group-item list-group-item-action bg-transparent active-bar fw-bold"><i class="fas fa-database me-2"></i>Kelola Motor</a>
                <a href="M_transaksi.php" class="list-group-item list-group-item-action bg-transparent warna-1 fw-bold"><i class="fas fa-tags me-2"></i>Transaksi</a>
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-2 py-4 px-4">
                <div class="d-flex align-items-center me-auto">
                    <i class="fas fa-align-left warna-1 fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 warna-1">Menu</h2>
                </div>
                <div class="dropdown ms-3">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i><?= ucfirst($_SESSION['nama']);?></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li>
                            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit<?php echo $id_user ?>">
                            <i class="fas fa-cog me-3"></i>Setting</button>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="../logout.php" name="logout"><i class="fas fa-sign-out-alt me-3"></i>Logout</a></li>
                    </ul>
                </div>
                <?php require 'settingUser.php'; ?>
            </nav>
<!-- Page Content -->
            <div class="container-fluid">
                <div class="row mx-2">
                    <h4 class="h4 warna-1 text-center">Data Kendaraan</h4>
                    <div class="row d-flex justify-content-end">
                        <button type="button" class="btn btn-primary my-3" style="width: 180px;" data-bs-toggle="modal" data-bs-target="#tambahData"><i class="fas fa-plus-circle me-3"></i>Tambah Data</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered border-primary align-middle text-center mx-auto" style="min-width: 800px;">
                            <thead class="table-dark border-light">
                                <tr>
                                    <th>No</th>
                                    <th>Merk</th>
                                    <th>Nama Pemilik</th>
                                    <th>Warna</th>
                                    <th>Harga Jual</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                                
                            </thead>
                            <tbody class="table-light border-dark">
                                <?php
                                    $no = 1;
                                    $i = 0;
                                    while ($row = mysqli_fetch_array($queryRead)){
                                        $foto[$i] = $row['foto'];
                                        $id_motor[$i] = $row["id_motor"];
                                        $nama_pemilik[$i] = $row["nama_pemilik"];
                                        $plat_no[$i] = $row["plat_no"];
                                        $merk[$i] = $row["merk"];
                                        $type[$i] = $row["type"];
                                        $warna[$i] = $row["warna"];
                                        $tahun_pembuatan[$i] = $row["tahun_pembuatan"];
                                        $masa_berlaku_stnk[$i] = $row["masa_berlaku_stnk"];
                                        $pajak[$i] = $row["pajak"];
                                        $harga_asli[$i] = $row["harga_asli"];
                                        $harga_jual[$i] = $row["harga_jual"];
                                        $odometer[$i] = $row["odometer"];
                                        $status[$i] = $row["status"];
                                        echo '
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="invisible position-absolute">
                                                <input type="text" class="form-control" name="id_motor" value="'.$id_motor[$i].'">
                                            </div>

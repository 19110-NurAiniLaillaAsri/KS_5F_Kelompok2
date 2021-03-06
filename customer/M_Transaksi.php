<?php
    require 'function/kelola_Transaksi.php';
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles_index.css">
    <title>Transaksi</title>
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
                <a href="M_transaksi.php" class="list-group-item list-group-item-action bg-transparent active-bar fw-bold"><i class="fas fa-tags me-2"></i>Transaksi</a>
                <a href="M_Admin.php" class="list-group-item list-group-item-action bg-transparent warna-1 fw-bold"><i class="fas fa-users me-2"></i>Kontak Admin</a>
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
                <?php include 'settingUser.php'; ?>
            </nav>
<!-- Page Content -->
            <div class="container-fluid mx-4">
                <div class="row">
                    <h1 class="text-center warna-1 pb-3">Daftar Transaksi</h1>
                </div>
                <div class="row">
                    <?php
                    $getDataMotor = mysqli_query($koneksi, "SELECT * FROM data_motor WHERE status = 'Tersedia'");
                    while ($rowTransaksi = mysqli_fetch_array($getDataMotor)){ ?>
                        <div class="card my-2 mx-2" style="width: 16rem;">
                            <img src="../fotoMotor/<?php echo $rowTransaksi['foto']?>" class="mt-2" style="height: 200px;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $rowTransaksi['merk']?> <?php echo $rowTransaksi['type']?></h5>
                                <p class="card-text">Rp. <?php echo number_format($rowTransaksi['harga_jual'], 0, ',', '.')?><br>
                                Tahun <?=$rowTransaksi['tahun_pembuatan']?></p>
                                <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#detail<?php $rowTransaksi['id_motor'] ?>" style="width: 80px;">Detail</button>
                                <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#beli<?php $rowTransaksi['id_motor'] ?>" style="width: 90px;">Booking</button>
                            </div>
                            <?php include 'Modal_Transaksi.php';?>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
<!-- Javascript -->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");
        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>
</html>
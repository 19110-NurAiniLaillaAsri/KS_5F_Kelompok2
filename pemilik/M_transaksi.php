<?php
    require '../koneksi.php';
    require 'function/session.php';
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
                <a href="M_identitasMotor.php" class="list-group-item list-group-item-action bg-transparent warna-1 fw-bold"><i class="fas fa-database me-2"></i>Identitas Motor</a>
                <a href="M_kelolaUser.php" class="list-group-item list-group-item-action bg-transparent warna-1 fw-bold"><i class="fas fa-users me-2"></i>Kelola User</a>
                <a href="M_transaksi.php" class="list-group-item list-group-item-action bg-transparent active-bar fw-bold"><i class="fas fa-tags me-2"></i>Transaksi</a>
                <a href="../logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"
                onclick="return confirm('Keluar ?')"><i class="fas fa-sign-out-alt me-2"></i>Keluar</a> 
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-2 py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left warna-1 fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 warna-1">Menu</h2>
                </div>
            </nav>
<!-- Page Content -->
            <div class="container">
                <div class="row my-4">
                    <h3 class="fs-4 warna-1 text-center mb-4">Transaksi</h3>
                    
                </div>
                <div class="row">
                    <!-- <h4 class="h4 warna-1 text-center mb-3">Data Kendaraan</h4> -->
                    <div class="table-responsive-xxl">
                            <table class="table table-bordered border-primary align-middle text-center  mx-auto" style="min-width: 800px;">
                                <thead class="table-dark border-light">
                                    <tr>
                                        <th style="width: 15%;">Id Transaksi</th>
                                        <th style="width: 15%;">Id Motor</th>
                                        <th style="width: 15%;">Id User</th>
                                        <th style="width: 15%;">Tanggal Transaksi</th>
                                        <th style="width: 25%;">Bukti Transaksi</th>
                                        <th style="width: 15%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-light border-dark">
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>61</td>
                                    <td>
                                        <button type="submit" class="btn btn-warning" name="editUser" onclick="return confirm('Edit user ?')"><i class="far fa-edit"></i></button>
                                        <button type="submit" class="btn btn-danger" name="hapusUser" onclick="return confirm('Hapus user ?')"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
<?php
    require '../koneksi.php';
    require 'function/session.php';
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles_index.css">
    <title>Data Kendaraan</title>
</head>
<body>
<!-- Sidebar -->
<div class="d-flex" id="wrapper">
        <div class="bg-3" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 warna-1 fs-4 fw-bold text-uppercase">
                <i class="me-2"></i>Penjualan<br>Motor Bekas
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent active-bar fw-bold"><i class="fas fa-home me-2"></i>Home</a>
                <a href="M_identitasMotor.php" class="list-group-item list-group-item-action bg-transparent warna-1 fw-bold"><i class="fas fa-database me-2"></i>Identitas Motor</a>
                <a href="M_kelolaUser.php" class="list-group-item list-group-item-action bg-transparent warna-1 fw-bold"><i class="fas fa-users me-2"></i>Kelola User</a>
                <a href="M_transaksi.php" class="list-group-item list-group-item-action bg-transparent warna-1 fw-bold"><i class="fas fa-tags me-2"></i>Transaksi</a>
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
                <div class="row content w-75 m-auto">
                    <div class="text-center">
                        <h1 class="fs-4 warna-1 text-center mb-4">Data Motor</h1>
                    </div>
                    <div class="col-md-6 m-auto">
                        <!-- Foto Kendaraan -->
                        <img src="https://media.istockphoto.com/vectors/funny-bear-on-motorcycle-vector-id1288989678?b=1&k=20&m=1288989678&s=170667a&w=0&h=qCkXjmdJ0125vDAfoIYMcyrAFnRMJPhvSiEDj8liZZ4=" class="img-fluid animated">
                    </div>
                    <div class="col-md-5 m-auto">
                        <form method="POST">
                            <div class="form-group mt-2">
                                <label class="warna-1">Username</label>
                                <input type="text" class="form-control" name="id_user">
                            </div>
                            <div class="form-group mt-2">
                                <label class="warna-1">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group mt-2">
                                <label class="warna-1">Username</label>
                                <input type="text" class="form-control" name="id_user">
                            </div>
                            <div class="form-group mt-2">
                                <label class="warna-1">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group mt-2">
                                <label class="warna-1">Username</label>
                                <input type="text" class="form-control" name="id_user">
                            </div>
                            <div class="form-group mt-2">
                                <label class="warna-1">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group mt-2">
                                <label class="warna-1">Username</label>
                                <input type="text" class="form-control" name="id_user">
                            </div>
                            <div class="form-group mt-2">
                                <label class="warna-1">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group mt-2">
                                <label class="warna-1">Username</label>
                                <input type="text" class="form-control" name="id_user">
                            </div>
                            <div class="form-group mt-2">
                                <label class="warna-1">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group mt-2">
                                <label class="warna-1">Username</label>
                                <input type="text" class="form-control" name="id_user">
                            </div>
                            <div class="form-group mt-2">
                                <label class="warna-1">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            
                            <div class="row text-center">
                                <div class="col ps-5">
                                    <button class="btn btn-primary mt-3" type="submit" style="width: 30%;" name="tambahMotor">Buat</button>
                                </div>
                            </div>
                            </div>
                        </form>
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
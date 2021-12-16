<?php
    require '../koneksi.php';
    require 'function/session.php';
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
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent warna-1 fw-bold">Home</a>
                <a href="M_identitasMotor.php" class="list-group-item list-group-item-action bg-transparent warna-1 fw-bold">Identitas Motor</a>
                <a href="M_kelolaUser.php" class="list-group-item list-group-item-action bg-transparent warna-1 fw-bold">Membuat User</a>
                <a href="M_transaksi.php" class="list-group-item list-group-item-action bg-transparent fw-bold active-bar">Transaksi</a>
                <a href="../logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"
                onclick="return confirm('Keluar ?')">Keluar</a>
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
                    <h3 class="fs-4 warna-1 text-center mb-4">Edit User</h3>
                    <form method="POST" class="warna-1 mx-auto px-5" style="width: 700px;">
                        <div class="row pb-3">
                            <div class="col-3"><label>Id Transaksi</label></div>
                            <div class="col">
                                <input type="text" readonly class="form-control" name="id_transaksi" value="<?php echo $row['id_user'] ?>">
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-3"><label>Id Motor</label></div>
                            <div class="col">
                                <input type="text" class="form-control form-box" name="id_motor" value="<?php echo $row['nama'] ?>">
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-3"><label>Id User</label></div>
                            <div class="col">
                                <input type="text" class="form-control form-box" name="id_user">
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-3"><label>Bukti Transfer</label></div>
                            <div class="col">
                                <input type="text" class="form-control form-box" name="bukti_transfer">
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col ps-5">
                                <button class="btn btn-primary" type="submit" style="width: 30%;" name="updateTransaksi">Simpan</button>
                            </div>
                        </div>
                    </form>
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
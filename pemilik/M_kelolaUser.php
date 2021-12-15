<?php
    require '../koneksi.php';
    require 'function/session.php';
    require 'function/kelola_User.php';
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
                <i class="me-2"></i>Penjualan<br>Motor Bekas
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent fw-bold warna-1"><i class="fas fa-home me-2"></i>Home</a>
                <a href="M_identitasMotor.php" class="list-group-item list-group-item-action bg-transparent warna-1 fw-bold"><i class="fas fa-database me-2"></i>Identitas Motor</a>
                <a href="M_kelolaUser.php" class="list-group-item list-group-item-action bg-transparent active-bar fw-bold"><i class="fas fa-users me-2"></i>Kelola User</a>
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
                <div class="row my-4">
                    <h3 class="fs-4 warna-1 text-center mb-4">Membuat User</h3>
                    <form method="POST" class="warna-1 mx-auto px-5" style="width: 700px;">
                        <div class="row pb-3">
                            <div class="col-3"><label>ID User</label></div>
                            <div class="col">
                                <input type="text" class="form-control" name="id_user">
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-3"><label>Nama</label></div>
                            <div class="col">
                                <input type="text" class="form-control form-box" name="nama">
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-3"><label>Password</label></div>
                            <div class="col">
                                <input type="password" class="form-control form-box" name="password">
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-3"><label>Hak Akses</label></div>
                            <div class="col">
                                <select name="hak_akses" class="form-select">
                                    <option value="Pemilik">Pemilik</option>
                                    <option value="Teller">Teller</option>
                                    <option value="Teknisi">Teknisi</option>
                                    <option value="Customer">Customer</option>
                                </select>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col ps-5">
                                <button class="btn btn-primary" type="submit" style="width: 30%;" name="tambahUser">Buat</button>
                            </div>
                        </div>
                    </form>
                </div>
<!-- Data User -->
                <div class="row">
                    <h4 class="h4 warna-1 text-center mb-3">Data User</h4>
                    <div class="table-responsive-xxl">
                        <table class="table table-bordered border-primary align-middle text-center  mx-auto" style="min-width: 800px;">
                            <thead class="table-dark border-light">
                                <tr>
                                    <th style="width: 20%;">ID User</th>
                                    <th style="width: 30%;">Nama</th>
                                    <th style="width: 20%;">Hak Akses</th>
                                    <th style="width: 10%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-light border-dark">
                                <?php
                                    while ($row = mysqli_fetch_array($query)){
                                        echo '
                                        <form method="POST">
                                            <div class="invisible position-absolute">
                                                <input type="text" class="form-control" name="getID" value="'.$row['id_user'].'">
                                            </div>
                                            <tr>
                                                <td>'.$row['id_user'].'</td>
                                                <td>'.$row['nama'].'</td>
                                                <td>'.$row['hak_akses'].'</td>
                                                <td>
                                                    '?><button type="submit" class="btn btn-warning" name="editUser" onclick="return confirm('Edit user ?')">
                                                    <i class="far fa-edit"></i></button><?php echo'
                                                    '?><button type="submit" class="btn btn-danger" name="hapusUser" onclick="return confirm('Hapus user ?')">
                                                    <i class="far fa-trash-alt"></i></button><?php echo'
                                                </td>
                                            </tr>
                                        </form>';
                                    }
                                ?>
                            </tbody>
                        </table>
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
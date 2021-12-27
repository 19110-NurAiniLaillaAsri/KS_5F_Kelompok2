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
                <i class="me-2"></i>Penjualan<br>Motor Bekas
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent fw-bold warna-1"><i class="fas fa-home me-2"></i>Home</a>
                <a href="M_transaksi.php" class="list-group-item list-group-item-action bg-transparent warna-1 fw-bold"><i class="fas fa-tags me-2"></i>Transaksi</a>
                <a href="M_Admin.php" class="list-group-item list-group-item-action bg-transparent active-bar fw-bold"><i class="fas fa-users me-2"></i>Kontak Admin</a>
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
<!-- Data User -->
            <div class="container">
                <div class="row mx-3">
                    <h4 class="h4 warna-1 text-center mb-3">Kontak Pemilik/Staff</h4>
                    <div class="table-responsive-xxl">
                        <table class="table table-bordered border-primary align-middle text-center  mx-auto" style="min-width: 800px;">
                            <thead class="table-dark border-light">
                                <tr>
                                    <th>Nama</th>
                                    <th>No HP</th>
                                    <th>Alamat</th>
                                    <th>Jabatan</th>
                                </tr>
                            </thead>
                            <tbody class="table-light border-dark">
                                <?php
                                    $i = 0;
                                    while ($row = mysqli_fetch_array($queryRead)){?>
                                        <div class="invisible position-absolute">
                                            <input type="text" class="form-control" name="id_user" value="<?php echo $row['id_user'] ?>">
                                        </div>
                                        <tr>
                                            <td><?php echo $row['nama'] ?></td>
                                            <td><?php echo $row['no_hp'] ?></td>
                                            <td><?php echo $row['alamat'] ?></td>
                                            <td><?php echo $row['hak_akses'] ?></td>
                                        </tr>
                                    <?php } ?>
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
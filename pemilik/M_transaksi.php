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
                <a href="M_identitasMotor.php" class="list-group-item list-group-item-action bg-transparent warna-1 fw-bold"><i class="fas fa-database me-2"></i>Identitas Motor</a>
                <a href="M_kelolaUser.php" class="list-group-item list-group-item-action bg-transparent warna-1 fw-bold"><i class="fas fa-users me-2"></i>Kelola User</a>
                <a href="M_transaksi.php" class="list-group-item list-group-item-action bg-transparent active-bar fw-bold"><i class="fas fa-tags me-2"></i>Transaksi</a>
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
            <div class="container-fluid">
                <div class="row mx-2">
                    <h4 class="h4 warna-1 text-center">Transaksi</h4>
                    <div class="row d-flex justify-content-end">
                        <button type="button" class="btn btn-primary my-3" style="width: 200px;" data-bs-toggle="modal" data-bs-target="#tambahTransaksi"><i class="fas fa-plus-circle me-3"></i>Tambah Transaksi</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered border-primary align-middle text-center mx-auto" style="min-width: 800px;">
                            <thead class="table-dark border-light">
                                <tr>
                                    <th>No</th>
                                    <th>ID Transaksi</th>
                                    <th>ID Motor</th>
                                    <th>ID User</th>
                                    <th style="width: 200px;">Tanggal Transaksi</th>
                                    <th>Status Transaksi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-light border-dark">
                                <?php
                                    $no = 1;
                                    $i = 0;
                                    while ($row = mysqli_fetch_array($queryRead)){?>
                                            <div class="invisible position-absolute">
                                                <input type="text" class="form-control" name="id_motor" value="<?php echo $row['id_motor'] ?>">
                                            </div>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $row['id_transaksi'] ?></td>
                                                <td><?php echo $row['id_motor'] ?></td>
                                                <td><?php echo $row['id_user'] ?></td>
                                                <td><?php echo $row['tgl_transaksi'] ?></td>
                                                <td><?php echo $row['status_transaksi'] ?></td>
                                                <td style="width: 160px;">
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail<?php echo $row['id_transaksi'] ?>"><i class="fas fa-search"></i></button>
                                                    <?php if($row['status_transaksi']=="Waiting"){ ?>
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#proses<?php echo $row['id_transaksi'] ?>"><i class="fas fa-check warna-1"></i></button>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#batal<?php echo $row['id_transaksi'] ?>"><i class="fas fa-times"></i></button>
                                                    <?php } ?>
                                                </td> 
                                                <?php include 'Modal_Transaksi.php'; ?>
                                            </tr>
                                        </form><?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
<!-- Modal Tambah Transaksi -->
                <form method="POST" class="mx-2" enctype="multipart/form-data">
                    <div class="modal fade" id="tambahTransaksi" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="headerLabel">Tambah Transaksi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row py-1">
                                        <div class="col-5 mt-1"><label>ID Motor</label></div>
                                        <div class=col> 
                                            <!-- manggil nama motor pake id motor yg ada -->
                                            <select name="id_motor" class="form-select">
                                                <?php
                                                    $getdataMotor = mysqli_query($koneksi, "SELECT * FROM data_motor WHERE status = 'Tersedia'");
                                                    while ($rowMotor = mysqli_fetch_array($getdataMotor)) {
                                                        $id_motor = $rowMotor['id_motor'];
                                                ?>
                                                <option value="<?=$id_motor;?>"><?=$id_motor;?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-5 mt-1"><label>User</label></div>
                                        <div class=col> 
                                            <?php
                                                $getdataUser = mysqli_query($koneksi, "SELECT * FROM user WHERE hak_akses='Customer'");
                                                while ($rowUser = mysqli_fetch_array($getdataUser)) {
                                                    $id_user = $rowUser['id_user'];
                                                    $nama = $rowUser['nama'];
                                                ?>
                                                <select name="id_user" class="form-select">
                                                    <option value="<?=$id_user;?>"><?=$nama;?></option>
                                                </select><?php
                                                } ?>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-5 mt-1"><label>Bukti Transaksi</label></div>
                                        <div class=col>
                                            <input type="file" class="form-control form-box" name="bukti_transfer" required>
                                        </div>
                                    </div>
                                    <div class="row mt-3">  
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button name="tambahTransaksi" type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alertTambahTransaksiModal">Simpan</button>
                                        </div>                                     
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </form> 
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
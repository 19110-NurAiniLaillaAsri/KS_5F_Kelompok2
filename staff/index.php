<?php
    require 'function/kelola_index.php';
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles_index.css">
    <title>Dashboard</title>
</head>
<body>
<!-- Sidebar -->
    <div class="d-flex" id="wrapper">
        <div class="bg-3" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 warna-1 fs-4 fw-bold text-uppercase">
                <i class="me-2"></i>Penjualan<br>Motor Bekas
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent fw-bold active-bar"><i class="fas fa-home me-2"></i>Home</a>
                <a href="M_identitasMotor.php" class="list-group-item list-group-item-action bg-transparent warna-1 fw-bold"><i class="fas fa-database me-2"></i>Identitas Motor</a>
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
<!-- Card -->
            <div class="container-fluid px-5">
                <div class="row my-4">
                    <h3 class="fs-4 warna-1">Selamat Datang <?php echo $_SESSION['nama'] ?></h3>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body"><i class="fas fa-chart-area me-2"></i>Motor Tersedia</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h5><?php echo $jmlTersedia ?></h5>
                                </div>
                            </div>
                        </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body"><i class="fas fa-chart-bar me-2"></i>Motor Booked</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h5><?php echo $jmlBooked ?></h5>
                                </div>
                            </div>
                        </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body"><i class="far fa-address-card me-2"></i></i>Motor Terjual</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <h5><?php echo $jmlTerjual ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body"><i class="fas fa-users me-2"></i></i>Jumlah Customer</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <h5><?php echo $jmlCustomer ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
<!-- Tabel Data Motor-->
                <div class="row">
                    <h4 class="h4 warna-1 text-center my-3">Data Kendaraan</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered border-primary align-middle text-center mx-auto" style="min-width: 800px;">
                            <thead class="table-dark border-light">
                                <tr>
                                    <th style="width: 70px;">No</th>
                                    <th>Merk</th>
                                    <th>Nama Motor</th>
                                    <th>Warna</th>
                                    <th>Harga Jual</th>
                                    <th>Status</th>
                                    <th style="width: 100px;">Detail</th>
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
                                                <input type="text" class="form-control" name="id_motor" value="'.$row['id_motor'].'">
                                            </div>
                                            <tr>
                                                <td>'.$no++.'</td>
                                                <td>'.$merk[$i].'</td>
                                                <td>'.$nama_pemilik[$i].'</td>
                                                <td>'.$warna[$i].'</td>
                                                <td>Rp. '.number_format($harga_jual[$i], 0, ',', '.').'</td>
                                                <td>'.$status[$i].'</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail'.$id_motor[$i].'"><i class="fas fa-search"></i></button>
                                                </td>'?>   
<!-- Modal Detail Data -->
                                                <?php echo '
                                                <div class="modal fade" id="detail'.$id_motor[$i].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Data Kendaraaan</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="text-center">
                                                                <img src="../fotoMotor/'.$foto[$i].'" class="my-2 rounded" style="max-height:200px;">
                                                            </div>
                                                            <div class="modal-body mx-2">
                                                            <div class="row">
                                                                <div class="col-5 mt-1"><label>Nama Pemilik</label></div>
                                                                <div class=col>
                                                                    <input class="form-control" type="text" readonly value="'.$nama_pemilik[$i].'"><br>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5 mt-1"><label>Plat No</label></div>
                                                                <div class=col>
                                                                    <input class="form-control" type="text" readonly value="'.$plat_no[$i].'"><br>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5 mt-1"><label>Merk</label></div>
                                                                <div class=col>
                                                                    <input class="form-control" type="text" readonly value="'.$merk[$i].'"><br>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5 mt-1"><label>Type</label></div>
                                                                <div class=col>
                                                                    <input class="form-control" type="text" readonly value="'.$type[$i].'"><br>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5 mt-1"><label>Warna</label></div>
                                                                <div class=col>
                                                                    <input class="form-control" type="text" readonly value="'.$warna[$i].'"><br>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5 mt-1"><label>Tahun Pembuatan</label></div>
                                                                <div class=col>
                                                                    <input class="form-control" type="text" readonly value="'.$tahun_pembuatan[$i].'"><br>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5 mt-1"><label>Masa Berlaku STNK</label></div>
                                                                <div class=col>
                                                                    <input class="form-control" type="text" readonly value="'.$masa_berlaku_stnk[$i].'"><br>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5 mt-1"><label>Pajak</label></div>
                                                                <div class=col>
                                                                    <input class="form-control" type="text" readonly value="'.$pajak[$i].'"><br>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5 mt-1"><label>Harga Asli</label></div>
                                                                <div class=col>
                                                                    <input class="form-control" type="text" readonly value="'.$harga_asli[$i].'"><br>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5 mt-1"><label>Harga Jual</label></div>
                                                                <div class=col>
                                                                    <input class="form-control" type="text" readonly value="'.$harga_jual[$i].'"><br>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5 mt-1"><label>Odometer</label></div>
                                                                <div class=col>
                                                                    <input class="form-control" type="text" readonly value="'.$odometer[$i].'"><br>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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

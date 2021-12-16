<?php
    require '../koneksi.php';
    require 'function/session.php';
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
            <div class="container-fluid px-5">
                <div class="row my-5">
                    <h3 class="fs-4 mb-3 warna-1">Selamat Datang <?php echo $_SESSION['nama'] ?></h3>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body"><i class="fas fa-chart-area me-2"></i>Penjualan</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <h5>20 Motor</h5>
                                <!-- jumlah transaksi -->
                                <!-- <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body"><i class="fas fa-chart-bar me-2"></i>Pemasaran</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <h5>Read Data</h5><!-- jumlah di table identitas motor -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body"><i class="far fa-address-card me-2"></i></i>Staff</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <h5>Read Data</h5><!-- jumlah staff -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body"><i class="fas fa-users me-2"></i></i>Custommer</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <h5>Read Data</h5><!-- jumlah hak akses = custommer -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tabel -->
                <div class="row">
                    <h4 class="h4 warna-1 text-center mb-3">Data Kendaraan</h4>
                    <div class="table-responsive-xxl">
                            <table class="table table-bordered border-primary align-middle text-center  mx-auto" style="min-width: 800px;">
                                <thead class="table-dark border-light">
                                    <tr>
                                        <th style="width: 20%;">Merk</th>
                                        <th style="width: 20%;">Plat Nomor</th>
                                        <th style="width: 20%;">Type</th>
                                        <th style="width: 20%;">Warna</th>
                                        <th style="width: 20%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-light border-dark">
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>
                                        <!-- <button type="button" class="btn btn-primary" style="width: 100px";> Detail </button><br> -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editid_masuk" style="width: 100px";><i class="far fa-edit"></i> Detail </button>
                                    </td>
                                    <form action="" method="POST">
                                                <div class="modal fade" id="editid_masuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Data Kendaraaan</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="text-center">
                                                                <!-- data foto kendaraan -->
                                                                <img src="https://media.istockphoto.com/vectors/funny-bear-on-motorcycle-vector-id1288989678?b=1&k=20&m=1288989678&s=170667a&w=0&h=qCkXjmdJ0125vDAfoIYMcyrAFnRMJPhvSiEDj8liZZ4=" class="rounded" alt="...">
                                                            </div>
                                                            <div class="modal-body">
                                                                <input class="form-control" type="text" name="nama_pemilik" value="nama_pemilik" aria-label="readonly input example" readonly><br>
                                                                <input class="form-control" type="text" name="plat_no" value="plat_no" aria-label="readonly input example" readonly><br>
                                                                <input class="form-control" type="text" name="merk" value="merk" aria-label="readonly input example" readonly><br>
                                                                <input class="form-control" type="text" name="type" value="type" aria-label="readonly input example" readonly><br>
                                                                <input class="form-control" type="text" name="warna" value="warna" aria-label="readonly input example" readonly><br>
                                                                <input class="form-control" type="text" name="tahun_pembuatan" value="tahun_pembuatan" aria-label="readonly input example" readonly><br>
                                                                <input class="form-control" type="text" name="masa_berlaku_stnk" value="masa_berlaku_stnk" aria-label="readonly input example" readonly><br>
                                                                <input class="form-control" type="text" name="pajak" value="pajak" aria-label="readonly input example" readonly><br>
                                                                <input class="form-control" type="text" name="harga" value="harga" aria-label="readonly input example" readonly><br>
                                                                <input class="form-control" type="text" name="odometer" value="odometer" aria-label="readonly input example" readonly><br>
                                                                <input class="form-control" type="text" name="status" value="status" aria-label="readonly input example" readonly><br>
                                                                <input type="hidden" name="id_motor" value="id_motor">
                                                            </div>
                                                            <div class="modal-footer">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    </form>
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

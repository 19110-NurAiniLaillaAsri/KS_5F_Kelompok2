<?php
    require '../koneksi.php';
    require 'function/session.php';
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
                <a href="M_identitasMotor.php" class="list-group-item list-group-item-action bg-transparent active-bar fw-bold"><i class="fas fa-database me-2"></i>Identitas Motor</a>
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
<!-- Tambah Identitas Motor -->
            <div class="container">
                <div class="row my-4">
                    <h3 class="fs-4 warna-1 text-center mb-4">Input Identitas Motor</h3>
                    <form method="POST" class="warna-1 mx-auto px-5" style="width: 700px;">
                        <div class="row pb-3">
                            <div class="col-4"><label>Id Motor</label></div>
                            <div class="col">
                                <input type="text" class="form-control" name="id_motor">
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-4"><label>Nama Pemilik</label></div>
                            <div class="col">
                                <input type="text" class="form-control form-box" name="nama_pemilik">
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-4"><label>Plat Nomor</label></div>
                            <div class="col">
                                <input type="text" class="form-control form-box" name="plat_no">
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-4"><label>Merk</label></div>
                            <div class="col">
                                <select name="merk" class="form-select">
                                    <option value="Honda">Honda</option>
                                    <option value="Yamaha">Yamaha</option>
                                    <option value="Kawasaki">Kawasaki</option>
                                    <option value="Suzuki">Suzuki</option>
                                    <option value="BMW">BMW</option>
                                    <option value="Harley Davidson">Harley Davidson</option>
                                    <option value="Ducati">Ducati</option>
                                    <option value="KTM">KTM</option>
                                    <option value="TVS">TVS</option>
                                    <option value="Benelli">Benelli</option>
                                    <option value="Benelli">Aprilia</option>
                                    <option value="MV Agusta">MV Agusta</option>
                                    <option value="Triump">Triump</option>
                                    <option value="Vespa">Vespa</option>
                                    <option value="Viar">Viar</option>
                                </select>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-4"><label>Type</label></div>
                            <div class="col">
                                <select name="type" class="form-select">
                                    <option value="Manual">Manual</option>
                                    <option value="Automatic">Automatic</option>
                                    <option value="Hybrid">Hybrid</option>
                                </select>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-4"><label>Warna TNKB</label></div>
                            <div class="col">
                                <select name="warna_tnkb" class="form-select">
                                    <option value="Hitam">Hitam</option>
                                    <option value="Merah">Merah</option>
                                    <option value="Kuning">Kuning</option>
                                    <option value="Biru">Biru</option>
                                </select>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-4"><label>Tahun Pembuatan</label></div>
                            <div class="col">
                                <input type="text" class="form-control form-box" name="tahun_pembuatan">
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-4"><label>Masa Berlaku STNK</label></div>
                            <div class="col">
                                <input type="date" class="form-control form-box" name="masa_berlaku_stnk" value="<?php echo date('Y-m-d'); ?>" />
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-4"><label>Pajak</label></div>
                            <div class="col">
                                <input type="text" class="form-control form-box" name="pajak">
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-4"><label>Harga</label></div>
                            <div class="col">
                                <input type="text" class="form-control form-box" name="harga">
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-4"><label>Odometer</label></div>
                            <div class="col">
                                <input type="text" class="form-control form-box" name="odometer">
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-4"><label>Gambar</label></div>
                            <div class="col">
                                <input type="text" class="form-control form-box" name="gambar">
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-4"><label>Status</label></div>
                            <div class="col">
                                <input type="text" class="form-control form-box" name="status">
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col ps-5">
                                <button class="btn btn-primary" type="submit" style="width: 30%;" name="tambahMotor">Buat</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <h4 class="h4 warna-1 text-center mb-3">Data Kendaraan</h4>
                    <div class="table-responsive-xxl">
                        <table class="table table-bordered border-primary align-middle text-center  mx-auto" style="min-width: 800px;">
                            <thead class="table-dark border-light">
                                <tr>
                                    <th style="width: 20%;">Merk</th>
                                    <th style="width: 30%;">Plat Nomor</th>
                                    <th style="width: 20%;">Type</th>
                                    <th style="width: 20%;">Warna</th>
                                    <th style="width: 10%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-light border-dark">
                                
                                            <tr>
                                                <td>'.$row['id_user'].'</td>
                                                <td>'.$row['nama'].'</td>
                                                <td>'.$row['hak_akses'].'</td>
                                                <td>warna</td>
                                                <td>
                                                    <button type="submit" class="btn btn-warning" name="editUser" onclick="return confirm('Edit Data Motor?')">
                                                    <i class="far fa-edit"></i></button>
                                                    <button type="submit" class="btn btn-danger" name="hapusUser" onclick="return confirm('Hapus Data Motor?')">
                                                    <i class="far fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                            </tbody>
                        </table>
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

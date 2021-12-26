<!-- Modal Detail Motor -->
    <div class="modal fade" id="detail<?php $rowTransaksi['id_motor'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Kendaraaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="text-center">
                    <img src="../fotoMotor/<?php echo $rowTransaksi['foto'] ?>" class="my-2 rounded" style="max-height:200px;">
                </div>
                <div class="modal-body mx-2">
                    <div class="row">
                        <div class="col-5 mt-1"><label>Nama Pemilik</label></div>
                        <div class=col>
                            <input class="form-control" type="text" readonly value="<?php echo $rowTransaksi['nama_pemilik'] ?>"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 mt-1"><label>Plat No</label></div>
                        <div class=col>
                            <input class="form-control" type="text" readonly value="<?php echo $rowTransaksi['plat_no'] ?>"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 mt-1"><label>Merk</label></div>
                        <div class=col>
                            <input class="form-control" type="text" readonly value="<?php echo $rowTransaksi['merk'] ?>"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 mt-1"><label>Type</label></div>
                        <div class=col>
                            <input class="form-control" type="text" readonly value="<?php echo $rowTransaksi['type'] ?>"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 mt-1"><label>Warna</label></div>
                        <div class=col>
                            <input class="form-control" type="text" readonly value="<?php echo $rowTransaksi['warna'] ?>"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 mt-1"><label>Tahun Pembuatan</label></div>
                        <div class=col>
                            <input class="form-control" type="text" readonly value="<?php echo $rowTransaksi['tahun_pembuatan'] ?>"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 mt-1"><label>Masa Berlaku STNK</label></div>
                        <div class=col>
                            <input class="form-control" type="text" readonly value="<?php echo $rowTransaksi['masa_berlaku_stnk'] ?>"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 mt-1"><label>Pajak</label></div>
                        <div class=col>
                            <input class="form-control" type="text" readonly value="<?php echo $rowTransaksi['pajak'] ?>"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 mt-1"><label>Harga Jual</label></div>
                        <div class=col>
                            <input class="form-control" type="text" readonly value="Rp. <?php echo number_format($rowTransaksi['harga_jual'], 0, ',', '.')?>"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 mt-1"><label>Odometer</label></div>
                        <div class=col>
                            <input class="form-control" type="text" readonly value="<?php echo $rowTransaksi['odometer'] ?> KM"><br>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
<!-- Modal Beli -->
    <form method="POST" class="mx-2" enctype="multipart/form-data">
        <div class="modal fade" id="beli<?php $rowTransaksi['id_motor'] ?>" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="headerLabel">Form Pembelian Motor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="text-center">
                        <img src="../fotoMotor/<?php echo $rowTransaksi['foto'] ?>" class="my-2 rounded" style="max-height:200px;">
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-5 mt-1"><label>ID Motor</label></div>
                            <div class=col> 
                                <input class="form-control" type="text" name="id_motor" readonly value="<?php echo $rowTransaksi['id_motor'] ?>"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 mt-1"><label>Merk</label></div>
                            <div class=col> 
                                <input class="form-control" type="text" readonly value="<?php echo $rowTransaksi['merk'] ?>"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 mt-1"><label>Type</label></div>
                            <div class=col> 
                                <input class="form-control" type="text" readonly value="<?php echo $rowTransaksi['type'] ?>"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 mt-1"><label>Harga</label></div>
                            <div class=col>
                                <input class="form-control" type="text" readonly value="Rp. <?php echo number_format($rowTransaksi['harga_jual'], 0, ',', '.')?>"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center pb-2"><label>Tarif Booking 10% dari Harga Jual</label></div>
                        </div>
                        <div class="row">
                            <div class="col-5 mt-1"><label>Bukti Transfer</label></div>
                            <div class=col>
                                <input type="file" class="form-control form-box" name="bukti_transfer" required>
                            </div>
                        </div>
                        <div class="row mt-3">  
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alertBeli<?php $rowTransaksi['id_motor'] ?>" style="width: 150px;">Booking</button>
                            </div>                                     
                        </div> 
                    </div>
                </div>
            </div>
        </div>
<!-- Modal ACC Motor -->
        <div class="modal fade" id="alertBeli<?php $rowTransaksi['id_motor'] ?>" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pembelian Motor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body lg-5">
                        Apakah data sudah terpenuhi?<br>
                        Dana Booking akan dikembalikan jika Transaksi dibatalkan (*S&K Berkalu)<br>
                        Info Lebih Lanjut Hubungi Pemilik/Staff Toko
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <button name="beliMotor" type="submit" class="btn btn-primary">Ya</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

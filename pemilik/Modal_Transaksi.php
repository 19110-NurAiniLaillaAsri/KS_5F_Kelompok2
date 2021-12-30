<!-- Modal Detai Transaksi -->
    <div class="modal fade" id="detail<?php echo $row['id_transaksi'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Data Transaksi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center pb-3">
                        <img src="../buktiTransfer/<?php echo $row['bukti_transfer'] ?>" style="height: 150px;">
                    </div>
                    <div class="row">
                        <div class="col-5 mt-1"><label>ID Transaksi</label></div>
                        <div class=col>
                            <input class="form-control" type="text" value="<?php echo $row['id_transaksi'] ?>" readonly><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 mt-1"><label>ID Motor</label></div>
                        <div class=col>
                            <input class="form-control" type="text" value="<?php echo $row['id_motor'] ?>" readonly><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 mt-1"><label>ID User</label></div>
                        <div class=col>
                            <input class="form-control" type="text" value="<?php echo $row['id_user'] ?>" readonly><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 mt-1"><label>Tanggal Transaksi</label></div>
                        <div class=col>
                            <input class="form-control" type="text" value="<?php echo $row['tgl_transaksi'] ?>" readonly><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 mt-1"><label>Status Transaksi</label></div>
                        <div class=col>
                            <input class="form-control" type="text" value="<?php echo $row['status_transaksi'] ?>" readonly><br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">  
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Keluar</button>
                            </div>                                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
<!-- Modal Proses Transaksi -->
    <form method="post">
        <div class="modal fade" id="proses<?php echo $row['id_transaksi'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Proses Transaksi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="invisible position-absolute">
                            <input type="text" class="form-control" name="id_transaksi" value="<?php echo $row['id_transaksi'] ?>" readonly>
                        </div>
                        <div class="text-center pb-3">
                            <img src="../buktiTransfer/<?php echo $row['bukti_transfer'] ?>" style="height: 150px;">
                        </div>
                        <div class="row">
                            <div class="col-5 mt-1"><label>Id Motor</label></div>
                            <div class=col>
                                <input class="form-control" name="id_motor" type="text" value="<?php echo $row['id_motor'] ?>" readonly><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 mt-1"><label>Id User</label></div>
                            <div class=col>
                                <input class="form-control" name="id_user" type="text" value="<?php echo $row['id_user'] ?>" readonly><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 mt-1"><label>Tanggal Transaksi</label></div>
                            <div class=col>
                                <input class="form-control" name="tgl_transaksi" type="date" value="<?php echo $row['tgl_transaksi'] ?>" readonly><br>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="row">  
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Keluar</button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alertProses<?php echo $row['id_transaksi'] ?>">Proses</button>
                                </div>                                     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Tombol Konfirmasi Proses Transaksi -->
        <div class="modal fade" id="alertProses<?php echo $row['id_transaksi'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Motor Terjual</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Proses Transaksi <?php echo $row['id_transaksi'] ?> Selesai ?<br>
                        Status Motor <?php echo $row['id_motor'] ?> menjadi "Terjual"
                    </div>
                    <div class="modal-footer">
                        
                    </div>
                </div>
            </div>
        </div> 
    </form>

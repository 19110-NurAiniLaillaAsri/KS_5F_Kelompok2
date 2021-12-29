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
                    </div>
                </div>
            </div>
        </div>
    </div>  

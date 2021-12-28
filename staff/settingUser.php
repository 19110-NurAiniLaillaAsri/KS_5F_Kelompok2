$sqlEditUser = "SELECT * FROM user WHERE id_user = '$id_user'";
    $querySetting = mysqli_query($koneksi, $sqlEditUser);
    $rowSet = mysqli_fetch_array($querySetting);
    // Setting User
    if(isset($_POST["eksekusiEdit"])){
        $id_user = $_POST["id_user"];
        $password_lama = $_POST["password_lama"];
        $password_baru = $_POST["password_baru"];
        $nama = $_POST["nama"];
        $no_hp = $_POST["no_hp"];
        $no_hp = $_POST["no_hp"];
        $alamat = $_POST["alamat"];
        if($password_baru==""){
            $querySet = mysqli_query($koneksi, "UPDATE user SET nama='$nama', no_hp='$no_hp', alamat='$alamat' WHERE id_user='$id_user'") or die($koneksi);
            if ($querySet){
                echo "
                    <script>
                        alert('Berhasil Update User!');
                        document.location.href = 'index.php';
                    </script>
            ";
            }
            else{
                echo "
                    <script>
                        alert('Gagal Update User!');
                        document.location.href = 'index.php';
                    </script>
                ";
            }
        }
        else {
            $querySet = mysqli_query($koneksi, "UPDATE user SET password=MD5('$password_baru'), nama='$nama', no_hp='$no_hp', alamat='$alamat' WHERE id_user='$id_user' AND password=MD5('$password_lama')") or die($koneksi);
            if ($querySet){
                echo "
                    <script>
                        alert('Berhasil Update User dan Password!');
                        document.location.href = 'index.php';
                    </script>
                ";
                 }
            else{
                echo "
                    <script>
                        alert('Gagal Update User!');
                        document.location.href = 'index.php';
                    </script>
                ";
            }
        }
    }
            <form method="POST">
            <div class="modal fade" id="edit'.$id_user.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="invisible position-absolute">
                                <input type="text" class="form-control" name="id_user" value="'.$rowSet['id_user'].'">
                            </div>
                            <div class="row">
                                <div class="col-5 mt-1"><label>Nama</label></div>
                                <div class=col>
                                    <input class="form-control" name="nama" type="text" value="'.$rowSet['nama'].'" required><br>
                                </div>
                                </div>
                            <div class="row">
                                <div class="col-5 mt-1"><label>No HP</label></div>
                                <div class=col>
                                    <input class="form-control" name="no_hp" type="text" value="'.$rowSet['no_hp'].'" required><br>
                                </div>
                               </div>
                            <div class="row">
                                <div class="col-5 mt-1"><label>Alamat</label></div>
                                <div class=col>
                                    <input class="form-control" name="alamat" type="text" value="'.$rowSet['alamat'].'" required><br>
                                </div>
                            </div>
<div class="row mt-4">
                                <div class="col-5 mt-1"><label>Password Lama</label></div>
                                <div class=col>
                                    <input class="form-control" name="password_lama" type="password" placeholder="Masukan Password"><br>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-5 mt-1"><label>Password Baru</label></div>
                                <div class=col>
                                    <input class="form-control" name="password_baru" type="password" placeholder="Opsional"><br>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="row mt-3">  
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Keluar</button>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alertEditModal">Simpan</button>
                                    </div>                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

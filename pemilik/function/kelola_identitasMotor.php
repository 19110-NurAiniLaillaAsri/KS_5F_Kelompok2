<?php
//Read Identitas Motor//
    $sqlUser = "SELECT * FROM identitas_motor";
    $query = mysqli_query($koneksi, $sqlUser);
//Create Identitas Motor//
    if (isset($_POST["tambahMotor"])){
        $no_registrasi = $_POST["no_registrasi"];
        $nama_pemilik = $_POST["nama_pemilik"];
        $alamat = $_POST["alamat"];
        $no_rangka = $_POST["no_rangka"];
        $no_mesin = $_POST["no_mesin"];
        $plat_no = $_POST["plat_no"];
        $merk = $_POST["merk"];
        $type = $_POST["type"];
        $model = $_POST["model"];
        $tahun_pembuatan = $_POST["tahun_pembuatan"];
        $isi_silinder = $_POST["isi_silinder"];
        $bahan_bakar = $_POST["bahan_bakar"];
        $warna_tnkb = $_POST["warna_tnkb"];
        $tahun_registrasi = $_POST["tahun_registrasi"];
        $no_bpkb = $_POST["no_bpkb"];
        $kode_lokasi = $_POST["kode_lokasi"];
        $masa_berlaku_stnk = $_POST["masa_berlaku_stnk"];
        $queryTugas = mysqli_query($koneksi, "INSERT INTO identitas_motor VALUES ('','$no_registrasi','$nama_pemilik','$alamat','$no_rangka','$no_mesin','$plat_no','$merk','$type','$model','$tahun_pembuatan',$isi_silinder,'$bahan_bakar','$warna_tnkb','$tahun_registrasi','$no_bpkb','$kode_lokasi','$masa_berlaku_stnk')") or die($koneksi);
        if ($queryTugas){
            echo "
                <script>
                    alert('Input Identitas Motor Berhasil!');
                    document.location.href = 'M_identitasMotor.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Input Identitas Motor Gagal!');
                    document.location.href = 'M_identitasMotor.php';
                </script>
            ";
        }
    }
//Update Identitas Motor//
    else if(isset($_POST["editMotor"])){
        $id = $_POST["id"];
        echo "
            <script>
            document.location.href = 'M_editMotor.php?id=$id';
            </script>
        ";
    }
    else if(isset($_POST["updateMotor"])){
        $id = $_GET["id"];
        $no_registrasi = $_POST["no_registrasi"];
        $nama_pemilik = $_POST["nama_pemilik"];
        $alamat = $_POST["alamat"];
        $no_rangka = $_POST["no_rangka"];
        $no_mesin = $_POST["no_mesin"];
        $plat_no = $_POST["plat_no"];
        $merk = $_POST["merk"];
        $type = $_POST["type"];
        $model = $_POST["model"];
        $tahun_pembuatan = $_POST["tahun_pembuatan"];
        $isi_silinder = $_POST["isi_silinder"];
        $bahan_bakar = $_POST["bahan_bakar"];
        $warna_tnkb = $_POST["warna_tnkb"];
        $tahun_registrasi = $_POST["tahun_registrasi"];
        $no_bpkb = $_POST["no_bpkb"];
        $kode_lokasi = $_POST["kode_lokasi"];
        $masa_berlaku_stnk = $_POST["masa_berlaku_stnk"];
        $queryTugas = mysqli_query($koneksi, "UPDATE identitas_motor SET no_registrasi='$no_registrasi', nama_pemilik='$nama_pemilik', alamat='$alamat', no_rangka='$no_rangka', no_mesin ='$no_mesin ', plat_no  ='$plat_no ', merk='$merk', type='$type', model='$model', tahun_pembuatan='$tahun_pembuatan', isi_silinder='$isi_silinder', bahan_bakar='$bahan_bakar', warna_tnkb='$warna_tnkb', tahun_registrasi='$tahun_registrasi', no_bpkb='$no_bpkb', kode_lokasi='$kode_lokasi', masa_berlaku_stnk='$masa_berlaku_stnk' WHERE id='$id'") or die($koneksi);
        if ($queryTugas){
            echo "
                <script>
                    alert('Berhasil Update Data Motor!');
                    document.location.href = 'M_identitasMotor.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Gagal Update User!');
                    document.location.href = 'M_identitasMotor.php';
                </script>
            ";
        }
    }
//Delete Identitas Motor//
    else if(isset($_POST["hapusMotor"])){
        $id = $_POST["id"];
        $queryTugas = mysqli_query($koneksi, "DELETE FROM identitas_motor WHERE id = '$id'") or die($koneksi);
        if ($queryTugas){
            echo "
                <script>
                    alert('Berhasil Menghapus Motor!');
                    document.location.href = 'M_identitasMotor.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Gagal Menghapus Motor!');
                    document.location.href = 'M_identitasMotor.php';
                </script>
            ";
        }
    }
?>
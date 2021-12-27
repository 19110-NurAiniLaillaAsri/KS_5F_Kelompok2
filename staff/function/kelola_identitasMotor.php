<?php
    require 'session.php';
    require '../koneksi.php';

//Read Data Motor
    $sqlRead = "SELECT * FROM data_motor";
    $queryRead = mysqli_query($koneksi, $sqlRead);

//Create Data Motor
    if(isset($_POST["tambahMotor"])) {
        $nama_pemilik = $_POST["nama_pemilik"];
        $plat_no = $_POST["plat_no"];
        $type = $_POST["type"];
        $warna = $_POST["warna];
        $tahun_pembuatan = $_POST["tahun_pembuatan"];
        $masa_berlaku_stnk = $_POST["masa_berlaku_stnk];
        $pajak = $_POST["pajak'];
        $harga_asli = $_POST["harga_asli"];
        $harga_jual = $_POST["harga_jual"];
        $odometer = $_POST["odometer"];
        
        // Random ID Motor
        $queryID = mysqli_query($koneksi, "SELECT max(id_motor) AS id_terbesar FROM data_motor");
        $data = mysqli_fetch_array($queryID);
        $id_laptop = $data['id_terbesar'];
        $urutan = (int) substr($id_laptop, 3, 4);
        $urutan++;
        $huruf = "MTR";
        $id_motor = $huruf . sprintf("%04s", $urutan);
        
        // Upload Foto Motor
        $namaAsli = $_FILES['foto']['name'];
        $x = explode('.',$namaAsli);
        $eks = strtolower(end($x));
        $asal = $_FILES['foto']['tmp_name'];
        $dir = "../fotoMotor/";
        $foto = uniqid();
        $foto .= '.'.$eks;
        $targetFile = $dir.$foto;
        $uploadOk = 1;
        if (file_exists($targetFile)){
            $uploadOk = 0;
        }
        if ($uploadOk == 0){
            echo '<script>alert("Nama file sudah ada!");</script>';
        } else if ($namaAsli=="") {
            $queryCreate = "INSERT INTO data_motor VALUES ('$id_motor','$nama_pemilik','$plat_no','$merk','$type','$warna','$tahun_pembuatan','$masa_berlaku_stnk','$pajak','$harga_asli','$harga_jual','$odometer','$foto','Tersedia')";
            $createData = mysqli_query($koneksi, $queryCreate);
            if ($createData){
                echo "<script>alert('Motor berhasil ditambahkan!')
                window.location.replace('M_identitasMotor.php');</script>";
            }
        }
        else {
            if (move_uploaded_file($asal, $targetFile)){
                $queryCreate = "INSERT INTO data_motor VALUES ('$id_motor','$nama_pemilik','$plat_no','$merk','$type','$warna','$tahun_pembuatan','$masa_berlaku_stnk','$pajak','$harga_asli','$harga_jual','$odometer','$foto','Tersedia')";
                $createData = mysqli_query($koneksi, $queryCreate);
                if ($createData){
                    echo "<script>alert('Motor berhasil ditambahkan!')
                    window.location.replace('M_identitasMotor.php');</script>";
                }
            } else {
                echo '<script>alert("Proses Upload GAGAL!");</script>';
            }
        }
    }
    
?>

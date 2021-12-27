<?php
    require 'session.php';
    require '../koneksi.php';
//Read Data Motor//
    $sqlRead = "SELECT * FROM transaksi ORDER BY status_transaksi = 'Waiting' DESC";
    $queryRead = mysqli_query($koneksi, $sqlRead);
//Create Transaksi
    if(isset($_POST["tambahTransaksi"])){
        $id_motor = $_POST["id_motor"];
        $id_user = $_POST["id_user"];
        // Random ID Transaksi
        $queryID = mysqli_query($koneksi, "SELECT max(id_transaksi) as id_terbesar FROM transaksi");
        $data = mysqli_fetch_array($queryID);
        $id_baru = $data['id_terbesar'];
        $urutan = (int) substr($id_baru, 3, 4);
        $urutan++;
        $huruf = "TRN";
        $id_transaksi = $huruf . sprintf("%04s", $urutan);
        // Upload Bukti Transfer
        $bukti = $_FILES['bukti_transfer']['name'];
        $x = explode('.',$bukti);
        $eks = strtolower(end($x));
        $asal = $_FILES['bukti_transfer']['tmp_name'];
        $dir = "../buktiTransfer/";
        $foto = uniqid();
        $foto .= '.'.$eks;
        $targetFile = $dir.$foto;
        $uploadOk = 1;
        if (file_exists($targetFile)){
            $uploadOk = 0;
        }
        if ($uploadOk == 0){
            echo '<script>alert("Nama file sudah ada!");</script>';
        } else if ($bukti=="") {
            echo "<script>alert('harap upload bukti transaksi!')
            window.location.replace('M_transaksi.php');</script>";
        } else {
            if (move_uploaded_file($asal, $targetFile)){
                $queryDataMotor = mysqli_query($koneksi, "UPDATE data_motor SET status = 'Booked' WHERE id_motor = '$id_motor'");
                $queryCreate = "INSERT INTO transaksi VALUES ('$id_transaksi','$id_motor','$id_user',NOW(),'$foto','Waiting')";
                $createData = mysqli_query($koneksi, $queryCreate);
                if ($createData){
                    echo "<script>alert('Motor Booked, Transaksi berhasil ditambahkan!')
                    window.location.replace('M_transaksi.php');</script>";
                }
            } else {
                echo '<script>alert("Proses Upload GAGAL!");</script>';
            }
        }
    }
//Update Transaksi Motor//
    if(isset($_POST["updateTransaksi"])){
        $id_transaksi = $_POST["id_transaksi"];
        $id_motor = $_POST["id_motor"];
        $id_user = $_POST["id_user"];
        $queryDataMotor = mysqli_query($koneksi, "UPDATE data_motor SET status = 'Terjual' WHERE id_motor = '$id_motor'");
        $queryDataTransaksi = mysqli_query($koneksi, "UPDATE transaksi SET status_transaksi = 'Selesai' WHERE id_transaksi = '$id_transaksi'");
        if ($queryDataTransaksi){
            echo "
                <script>
                    alert('Motor Terjual, Transaksi Berhasil!');
                    document.location.href = 'M_transaksi.php';
                </script>
            ";
        }
    }
//Batal Transaksi
    else if(isset($_POST["batalTransaksi"])){
        $id_transaksi = $_POST["id_transaksi"];
        $id_motor = $_POST["id_motor"];
        $queryDataMotor = mysqli_query($koneksi, "UPDATE data_motor SET status = 'Tersedia' WHERE id_motor = '$id_motor'");
        $queryDataTransaksi = mysqli_query($koneksi, "UPDATE transaksi SET status_transaksi = 'Batal' WHERE id_transaksi = '$id_transaksi'");
        if ($queryDataTransaksi){
            echo "
                <script>
                    alert('Berhasil membatalkan Transaksi!');
                    document.location.href = 'M_transaksi.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Gagal membatalkan Transaksi!');
                    document.location.href = 'M_transaksi.php';
                </script>
            ";
        }
    }

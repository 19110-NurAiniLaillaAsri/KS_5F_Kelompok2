<?php
    require '../koneksi.php';
    require 'session.php';
//Read User//
    $sqlRead = "SELECT * FROM user";
    $queryRead = mysqli_query($koneksi, $sqlRead);
//Create User//
    if (isset($_POST["tambahUser"])){
        $id_user = $_POST["id_user"];
        $password = $_POST["password"];
        $nama = $_POST["nama"];
        $no_hp = $_POST["no_hp"];
        $alamat = $_POST["alamat"];
        $hak_akses = $_POST["hak_akses"];
        $queryCreate = mysqli_query($koneksi, "INSERT INTO user VALUES ('$id_user',MD5('$password'),'$nama','$no_hp','$alamat','$hak_akses')") or die($koneksi);
        if ($queryCreate){
            echo "
                <script>
                    alert('Berhasil membuat User!');
                    document.location.href = 'M_kelolaUser.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Gagal membuat User!');
                    document.location.href = 'M_kelolaUser.php';
                </script>
            ";
        }
    }
//Update User//
    else if(isset($_POST["updateUser"])){
        $id_user = $_POST["id_user"];
        $reset_password = $_POST["reset_password"];
        $nama = $_POST["nama"];
        $no_hp = $_POST["no_hp"];
        $alamat = $_POST["alamat"];
        $hak_akses = $_POST["hak_akses"];
        if ($reset_password=="No"){
            $queryEdit = mysqli_query($koneksi, "UPDATE user SET nama='$nama', no_hp='$no_hp', alamat='$alamat', hak_akses='$hak_akses' WHERE id_user='$id_user'") or die($koneksi);
            if ($queryEdit){
                echo "
                    <script>
                        alert('Berhasil Update User!');
                        document.location.href = 'M_kelolaUser.php';
                    </script>
                ";
            }
            else{
                echo "
                    <script>
                        alert('Gagal Update User!');
                        document.location.href = 'M_kelolaUser.php';
                    </script>
                ";
            }
        }
        else if($reset_password=="Yes"){
            $queryEdit = mysqli_query($koneksi, "UPDATE user SET nama='$nama', password='202cb962ac59075b964b07152d234b70', no_hp='$no_hp', alamat='$alamat', hak_akses='$hak_akses' WHERE id_user='$id_user'") or die($koneksi);
            if ($queryEdit){
                echo "
                    <script>
                        alert('Berhasil Update User dan Reset Password!');
                        document.location.href = 'M_kelolaUser.php';
                    </script>
                ";
            }
            else{
                echo "
                    <script>
                        alert('Gagal Update User!');
                        document.location.href = 'M_kelolaUser.php';
                    </script>
                ";
            }
        }
    }
//Delete User//
    else if(isset($_POST["hapusUser"])){
        $id_user = $_POST["id_user"];
        $queryHapus = mysqli_query($koneksi, "DELETE FROM user WHERE id_user = '$id_user'") or die($koneksi);
        if ($queryHapus){
            echo "
                <script>
                    alert('Berhasil Menghapus User!');
                    document.location.href = 'M_kelolaUser.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Gagal Menghapus User!');
                    document.location.href = 'M_kelolaUser.php';
                </script>
            ";
        }
    }
?>

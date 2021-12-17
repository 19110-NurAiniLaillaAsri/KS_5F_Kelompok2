<?php
//Read User//
    $sqlUser = "SELECT * FROM user";
    $query = mysqli_query($koneksi, $sqlUser);
//Create User//
    if (isset($_POST["tambahUser"])){
        $id_user = $_POST["id_user"];
        $nama = $_POST["nama"];
        $password = $_POST["password"];
        $hak_akses = $_POST["hak_akses"];
        $queryTugas = mysqli_query($koneksi, "INSERT INTO user VALUES ('$id_user','$nama',MD5('$password'),'$hak_akses',CURDATE(),'')") or die($koneksi);
        if ($queryTugas){
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
    else if(isset($_POST["editUser"])){
        $getID = $_POST["getID"];
        echo "
            <script>
            document.location.href = 'M_editUser.php?getID=$getID';
            </script>
        ";
    }
    else if(isset($_POST["updateUser"])){
        $getID = $_GET["getID"];
        $nama = $_POST["nama"];
        $password = $_POST["password"];
        $hak_akses = $_POST["hak_akses"];
        $queryTugas = mysqli_query($koneksi, "UPDATE user SET nama='$nama', password=MD5('$password'), hak_akses='$hak_akses' WHERE id_user='$getID'") or die($koneksi);
        if ($queryTugas){
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
//Delete User//
    else if(isset($_POST["hapusUser"])){
        $getID = $_POST["getID"];
        $queryTugas = mysqli_query($koneksi, "DELETE FROM user WHERE id_user = '$getID'") or die($koneksi);
        if ($queryTugas){
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

<?php 
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
echo '
        <form method="POST">
            <div class="modal fade" id="edit'.$id_user.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"

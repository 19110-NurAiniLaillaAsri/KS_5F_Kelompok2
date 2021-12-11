<?php
    require 'koneksi.php';
// SIGN IN
    if (isset($_POST["signIn"])){
        $id_user = $_POST["id_user"];
        $pass = $_POST["password"];
        $signin = "SELECT * FROM user WHERE id_user='$id_user' AND password=md5('$pass')";
        $result = mysqli_query($koneksi, $signin);
        
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_array($result);
            if ($row > 0){
                // Set Session
				session_start();
				$_SESSION['id_user'] = $_POST["id_user"];
                if ($row["hak_akses"]=="Pemilik"){
                    $_SESSION["Pemilik"] = true;
                    header("Location:pemilik/index.php");
                }
                else if ($row["hak_akses"]=="Staff Toko"){
                    $_SESSION["Staff Toko"] = true;
                    header("Location:staff/index.php");
                }
                else if ($row["hak_akses"]=="Customer"){
                    $_SESSION["Customer"] = true;
                    header("Location:customer/index.php");
                }
                exit;
            }
        }
        $error = true;
        if (isset($error)){
            ?>
                <script>
                alert("Username/Password salah!");
                </script>
            <?php
        }
    }

// SIGN UP
    if (isset($_POST['signUp'])) {
        $id_user = $_POST['id_user'];
        $pass = $_POST['password'];
        $pass2 = $_POST['password2'];
        $nama = $_POST['nama_user'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];

        //cek data apakah sudah terdaftar
        $result = mysqli_query($koneksi, "SELECT id_user FROM user WHERE id_user = '$id_user'");
        if (mysqli_fetch_assoc($result)) {
            echo "<script>
                alert('Data pengguna telah terdaftar');
                </script>";
            return false;
        }

        //konfirmasi password
        if ($pass !== $pass2) {
            echo "<script>
                alert('Konfirmasi password tidak sesuai');
                </script>";
            return false;
        } else {
            $pass = md5($pass);
            $addToUser = mysqli_query($koneksi, "INSERT INTO user VALUES ('$id_user','$pass','$nama','$no_hp','$alamat','Customer')");
            if ($addToUser) {
                echo "<script>
                alert('Pendaftaran Berhasil!');
                </script>";
            } else {
                die("Connection failed: " . mysqli_connect_error());
            }
        }
    }
?>
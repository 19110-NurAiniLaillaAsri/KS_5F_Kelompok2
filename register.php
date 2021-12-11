<?php 
require 'auth.php';
if (!isset($_SESSION['log'])) {

} else {
    header('location:index.php');
}
?>
<html>
<head>
    <title>Registrasi Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/signup.css">
</head>
<body>
    <div class="container fadeIn firs d-flex wrapper">
        <div class="row content w-75 m-auto">
            <div class="text-center">
                <h3>Sign Up</h3><br>    
                <div class="underline-title"></div>
            </div>
            <form method="POST">
                <div class="col-md-6 m-auto">
                    <div class="form-group mt-2">
                        <label for="id_user">Username</label>
                        <input type="text" name="id_user" class="form-control" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="password2">Konfirmasi Ulang Password</label>
                        <input type="password" name="password2" class="form-control" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="nama_user">Nama</label>
                        <input type="text" name="nama_user" class="form-control" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="nama_user">No HP</label>
                        <input type="text" name="no_hp" class="form-control" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="nama_user">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                </div>
                <div class="text-center">
                    <input id="submit-btn" type="submit" name="signUp" value="Registrasi Akun"/><br><a href="login.php" id="signup">Have an account? Login</a>
                </div>
            </form>    
        </div>
    </div>
<!-- Javascript -->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script> <!-- buat modal --> 
</body>
</html>
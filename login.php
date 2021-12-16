<?php
    require 'auth.php';
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/signin.css">
    <title>Penjualan Motor Bekas</title>
</head>
<body>
    <div class="container fadeIn first d-flex wrapper">
        <div class="row content w-75 m-auto">
            <div class="text-center">
                <h1>Penjualan Motor Bekas</h1>
            </div>
            <div class="col-md-6 m-auto">
                <img src="https://media.istockphoto.com/vectors/funny-bear-on-motorcycle-vector-id1288989678?b=1&k=20&m=1288989678&s=170667a&w=0&h=qCkXjmdJ0125vDAfoIYMcyrAFnRMJPhvSiEDj8liZZ4=" class="img-fluid animated">
            </div>
            <div class="col-md-5 m-auto">
                <h4 class="h4 text-center mb-4">Sign in</h4>
                <form method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="id_user">
                    </div>
                    <div class="form-group mt-3">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" name="signIn" class="btn btn-class mt-3">Login</button>
                    <div class="text-center">
                    <a href="register.php" id="signup">Don't have account yet?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
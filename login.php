<?php 
session_start();
include 'admin/database/db.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // query / perintah insert data ke table user
    $queryLogin = mysqli_query(
        $conn,
        "SELECT * FROM user ORDER BY id DESC"
    );
    // jika query berhasil
    if (mysqli_num_rows($queryLogin)  > 0) {
        $rowAdmin = mysqli_fetch_assoc($queryLogin);
        if ($rowAdmin['username'] == $username || $rowAdmin['email'] == $email || $rowAdmin['password'] == $password) {
            $_SESSION['ADMIN'] = $rowAdmin['username'];
            $_SESSION['ID'] = $rowAdmin['id'];
            header("location:index.php?login=berhasil");
        } else {
            header("location:login.php?error=login");
        }
    } else {
        header("location:login.php?error=login");
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user">
                                        <label for="username">Nama Akse admin</label>
                                        <div class="form-group">
                                            <input type="username" class="form-control form-control-user"
                                                id="" aria-describedby="" name="username"
                                                placeholder="username">
                                        </div>
                                        <label for="email">Email Akses Admin</label>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email"
                                                id="" placeholder="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword"  name="password" placeholder="Password">
                                        </div>
                                        <a href="" type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                        <hr>
                                        
                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>

</body>

</html>
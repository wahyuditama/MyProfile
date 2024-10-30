<?php
session_start();
include 'database/db.php';

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // query / perintah insert data ke table user
  $queryLogin = mysqli_query($conn, "SELECT * FROM pemilik ");
  // jika query berhasil
  if (mysqli_num_rows($queryLogin)  > 0) {
    $rowAdmin = mysqli_fetch_assoc($queryLogin);
    if ($rowAdmin['username'] == $username && $rowAdmin['email'] == $email && $rowAdmin['password'] == $password) {
      $_SESSION['ADMIN'] = $rowAdmin['username'];
      $_SESSION['ID'] = $rowAdmin['id'];
      header("location:index.php?berhasil=login");
    } else {
      header("location:login.php?error=login");
    }
  } else {
    header("location:login.php?error=login");
  }
}




?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<style>
  body {
    background-image: url(../landing_page/assets/img/dark-abstract.jpg);
  }

  .form-control {
    background-color: #4a4a4a;

  }

  label {
    font-weight: bold;
  }
</style>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9 offset-1">
        <section class="pt-5 mt-5">
          <div class="container h-custom pt-5 mt-5 card bg-transparent bg-gradient-to-r from-transparent to-gray-400">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="../landing_page/assets/img/butterfly.png"
                  class="img-fluid" alt="Sample image">
              </div>
              <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="" method="post" class="py-3">
                  <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                    <p class="lead fw-normal mb-0 me-3">Sign in with</p>

                  </div>


                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="form3Example3" class="form-control form-control-lg"
                      placeholder="Enter a username address" name="username" />
                    <label class="form-label" for="form3Example3">Username address</label>
                  </div>


                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form3Example3" class="form-control form-control-lg"
                      placeholder="Enter a valid email address" name="email" />
                    <label class="form-label" for="form3Example3">Email address</label>
                  </div>


                  <div data-mdb-input-init class="form-outline mb-3">
                    <input type="password" id="form3Example4" class="form-control form-control-lg"
                      placeholder="Enter password" name="password" />
                    <label class="form-label" for="form3Example4">Password</label>
                  </div>

                  <div class="d-flex justify-content-between align-items-center">

                    <div class="text-center text-lg-start mt-4 pt-2">
                      <button type="submit" name="login" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                      <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
      class="link-danger">Register</a></p> -->
                    </div>

                </form>
              </div>
            </div>
          </div>

        </section>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
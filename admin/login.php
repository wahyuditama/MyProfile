<?php 
session_start();
include 'database/db.php';

    if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      // query / perintah insert data ke table user
      $queryLogin = mysqli_query($conn,"SELECT * FROM pemilik ");
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
  </head>
  <body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <section class="pt-5 mt-5">
      <div class="container h-custom pt-5 mt-5 card">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
              class="img-fluid" alt="Sample image">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form action="" method="post">
              <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
             <p class="lead fw-normal mb-0 me-3">Sign in with</p>
        <!-- <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
        </button>
  
          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
        <i class="fab fa-twitter"></i>
        </button>
  
        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
        <i class="fab fa-linkedin-in"></i>
        </button> -->
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
      <button  type="submit" name="login" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
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





        
         
        
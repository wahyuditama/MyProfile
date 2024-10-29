<?php
session_start();
include 'database/db.php';

// Jika button simpan di klik
if (isset($_POST['simpan'])) {
    $targetDir = "upload/";
    $foto = $_FILES['foto'];
    $fileName = basename($foto['name']);
    $targetFilePath = $targetDir . time() . "_" . $fileName;

    // Cek jika file adalah gambar dan upload foto
    $uploadImage = 1;
    $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    $imageTypes = ['jpg', 'png', 'jpeg', 'gif'];

    if (in_array($imageFileType, $imageTypes)) {
        if (move_uploaded_file($foto['tmp_name'], $targetFilePath)) {
            echo "Foto berhasil diunggah.";
        } else {
            echo "Error: Foto tidak dapat diunggah.";
            $uploadImage = 0;
        }
    } else {
        echo "Error: Tipe file tidak diperbolehkan atau file terlalu besar.";
        $uploadImage = 0;
    }

    if ($uploadImage) {
        $deskripsi = $_POST['deskripsi'];
        $profesi = $_POST['profesi'];
        $deskripsi_profesi = $_POST['deskripsi_profesi'];
        $website = $_POST['website'];
        $kota = $_POST['kota'];
        $umur = (int) $_POST['umur'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $foto = $targetFilePath;

        $sql = mysqli_query($conn, "INSERT INTO about (deskripsi, profesi, deskripsi_profesi, website, kota, umur, email, date, foto) 
                VALUES ('$deskripsi', '$profesi', '$deskripsi_profesi', '$website', '$kota', $umur, '$email', '$date', '$foto')");

        header("location:about.php?ubah=berhasil");
    }

    $conn->close();
}

// jika button edit di klik
$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$queryEditAbout = mysqli_query($conn, "SELECT * FROM about WHERE id ='$id'");
$rowEditAbout = mysqli_fetch_assoc($queryEditAbout);

// Jika Button Edit Simpan Di klik
if (isset($_POST['edit'])) {
    $deskripsi = $_POST['deskripsi'];
    $profesi = $_POST['profesi'];
    $deskripsi_profesi = $_POST['deskripsi_profesi'];
    $website = $_POST['website'];
    $kota = $_POST['kota'];
    $umur = (int) $_POST['umur'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $foto = $rowEditAbout['foto']; // Gunakan foto lama sebagai default

    // jika user ingin memasukkan gambar
    if (!empty($_FILES['foto']['name'])) {
        $nama_foto = basename($_FILES['foto']['name']);
        $targetFilePath = $targetDir . time() . "_" . $nama_foto;
        $ext = array('png', 'jpg', 'jpeg');
        $extFoto = strtolower(pathinfo($nama_foto, PATHINFO_EXTENSION));

        if (!in_array($extFoto, $ext)) {
            echo "Extensi gambar tidak ditemukan";
            die;
        } else {
            unlink('upload/' . $rowEditAbout['foto']); // Hapus foto lama
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFilePath)) {
                $foto = $targetFilePath; // Perbarui variabel foto dengan path baru
            }
        }
    }

    // Perbarui data
    $update = mysqli_query($conn, "UPDATE about SET 
        deskripsi = '$deskripsi', 
        profesi = '$profesi', 
        deskripsi_profesi = '$deskripsi_profesi', 
        website = '$website', 
        kota = '$kota', 
        umur = $umur, 
        email = '$email', 
        date = '$date', 
        foto = '$foto' 
        WHERE id = $id");

    header("location:about.php?ubah=berhasil");
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

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <!-- Custom styles for this template-->
    <?php include 'layout/css.php' ?>



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'layout/sidebar.php' ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard About</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row justify-content-center">

                        <div class="row">
                            <div class="card" style="width: 58rem;">
                                <div class="card-header"><?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?> About</div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <!-- Left Column (col-6) -->
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="deskripsi">Masukan Deskripsi</label>
                                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                                        value="<?php echo isset($_GET['edit']) ? $rowEditAbout['deskripsi'] : '' ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="profesi">Masukan Nama Profesi Anda</label>
                                                    <input type="text" class="form-control" id="profesi" name="profesi"
                                                        value="<?php echo isset($_GET['edit']) ? $rowEditAbout['profesi'] : '' ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="deskripsi_profesi">Deskripsi Profesi</label>
                                                    <input type="text" class="form-control" id="deskripsi_profesi" name="deskripsi_profesi"
                                                        value="<?php echo isset($_GET['edit']) ? $rowEditAbout['deskripsi_profesi'] : '' ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="website">Website</label>
                                                    <input type="url" class="form-control" id="website" name="website"
                                                        value="<?php echo isset($_GET['edit']) ? $rowEditAbout['website'] : '' ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="website">foto</label>
                                                    <input type="file" class="form-control" id="foto" name="foto"
                                                        value="<?php echo isset($_GET['edit']) ? $rowEditAbout['foto'] : '' ?>">
                                                </div>
                                            </div>

                                            <!-- Right Column (col-6) -->
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="kota">Kota</label>
                                                    <input type="text" class="form-control" id="kota" name="kota"
                                                        value="<?php echo isset($_GET['edit']) ? $rowEditAbout['kota'] : '' ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="umur">Umur</label>
                                                    <input type="number" class="form-control" id="umur" name="umur"
                                                        value="<?php echo isset($_GET['edit']) ? $rowEditAbout['umur'] : '' ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        value="<?php echo isset($_GET['edit']) ? $rowEditAbout['email'] : '' ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="date">Tanggal</label>
                                                    <input type="date" class="form-control" id="date" name="date"
                                                        value="<?php echo isset($_GET['edit']) ? $rowEditAbout['date'] : '' ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <button type="submit" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>" class="btn btn-primary btn-user btn-block">
                                            Masukan disini
                                        </button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <!-- Content Row -->

                        <div class="row">


                        </div>

                        <!-- Content Row -->
                        <div class="row">



                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <!-- End of Footer -->

            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <!-- Bootstrap core JavaScript-->
        <!-- Core plugin JavaScript-->
        <!-- Custom scripts for all pages-->
        <!-- Page level plugins -->
        <!-- Page level custom scripts -->
        <?php include 'layout/js.php' ?>

</body>

</html>
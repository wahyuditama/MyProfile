<?php

session_start();
include 'database/db.php';
$pesan = "";

if (isset($_POST['submit'])) {
    $judul     = $_POST['judul'];
    $paragraf  = $_POST['paragraf'];
    $info  = $_POST['info'];

    if (!empty($_FILES['foto']['name'])) {
        $nama_foto = $_FILES['foto']['name'];
        $ukuran_foto = $_FILES['foto']['size'];


        $ext = array('png', 'jpg', 'jpeg', 'svg');
        $extFoto = pathinfo($nama_foto, PATHINFO_EXTENSION);

        if (!in_array($extFoto, $ext)) {
            echo "Ext tidak ditemukan";
            die;
        } else {

            move_uploaded_file($_FILES['foto']['tmp_name'], 'upload/' . $nama_foto);

            $insert = mysqli_query($conn, "INSERT INTO capabilitas (judul, paragraf, info, foto)
            VALUES ('$judul','$paragraf','$info','$nama_foto')");
        }
    } else {
        $insert = mysqli_query($conn, "INSERT INTO capabilitas (judul, paragraf, info)
            VALUES ('$judul','$paragraf','$info')");
    }

    header("location:keahlian.php?tambah=berhasil");
}

$id  = isset($_GET['edit']) ? $_GET['edit'] : '';
$queryEdit = mysqli_query($conn, "SELECT * FROM capabilitas WHERE id ='$id'");
$rowEdit   = mysqli_fetch_assoc($queryEdit);




if (isset($_POST['edit'])) {
    $judul   = $_POST['judul'];
    $paragraf  = $_POST['paragraf'];
    $info  = $_POST['info'];


    if (!empty($_FILES['foto']['name'])) {
        $nama_foto = $_FILES['foto']['name'];
        $ukuran_foto = $_FILES['foto']['size'];

        $ext = array('png', 'jpg', 'jpeg');
        $extFoto = pathinfo($nama_foto, PATHINFO_EXTENSION);

        if (!in_array($extFoto, $ext)) {
            echo "Extensi gambar tidak ditemukan";
            die;
        } else {
            unlink('upload/' . $rowEdit['foto']);
            move_uploaded_file($_FILES['foto']['tmp_name'], 'upload/' . $nama_foto);

            $update = mysqli_query($conn, "UPDATE capabilitas SET judul='$judul', 
            paragraf='$paragraf', info='$info', foto='$nama_foto' WHERE id='$id'");
        }
    } else {

        $update = mysqli_query($conn, "UPDATE capabilitas SET judul='$judul', 
            paragraf='$paragraf', info='$info' WHERE id='$id'");
    }

    header("location:keahlian.php?ubah=berhasil");
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
                <?php include 'layout/navbar.php' ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Keterampilan </h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row justify-content-center">

                        <div class="col-md-6">
                            <div class="card" style="width: 38rem;">
                                <div class="card-header"><?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?> Keterampilan</div>
                                <?php echo $pesan ?>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="keterampilan">Input Judul keterampialn anda disini</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="" name="judul"
                                                placeholder="" value="<?php echo isset($_GET['edit']) ? $rowEdit['judul'] : '' ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Masukan Paragraf Disini</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="" name="paragraf"
                                                placeholder="" value="<?php echo isset($_GET['edit']) ? $rowEdit['paragraf'] : '' ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Masukan Info/ Keterangan Data Disini</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="" name="info"
                                                placeholder="" value="<?php echo isset($_GET['edit']) ? $rowEdit['info'] : '' ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Masukan foto anda disini</label><br>
                                            <input type="file" class="" name="foto"
                                                id="e" placeholder="" value="<?php echo isset($_GET['edit']) ? $rowEdit['foto'] : '' ?>">
                                        </div>
                                        <button type="submit" name="<?php echo isset($_GET['edit']) ? 'edit' : 'submit' ?>" class="btn btn-primary btn-user btn-block">
                                            Masukan data keterampilan
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
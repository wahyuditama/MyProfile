<?php
session_start();
include 'database/db.php';

$queryAbout = mysqli_query($conn, "SELECT * FROM about");


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    // query / perintah hapus
    $deleteAbout = mysqli_query($conn, "DELETE FROM about  WHERE id ='$id'");
    header("location:about.php?hapus=berhasil");
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
    <link rel="stylesheet" href="css/sb-admin-2.css">
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard About</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->


                    <div class="card  shadow mb-4">
                        <div class="card-body">
                            <?php if (isset($_GET['hapus'])): ?>
                                <div class="alert alert-success" role="alert">
                                    Data berhasil dihapus
                                </div>
                            <?php endif ?>
                            <div align="right" class="mb-3">
                                <a href="tambah-about.php" class="btn btn-primary">Tambah</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>deskripsi</th>
                                            <th>Profesi</th>
                                            <th>deskripsi Profesi</th>
                                            <th>website</th>
                                            <th>Kota</th>
                                            <th>Umur</th>
                                            <th>Email</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        while ($rowAbout = mysqli_fetch_assoc($queryAbout)) { ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td>
                                                    <img width="100" src="upload/<?php echo $rowAbout['foto'] ?>" alt="">
                                                </td>
                                                <td><?php echo $rowAbout['deskripsi'] ?></td>
                                                <td><?php echo $rowAbout['profesi'] ?></td>
                                                <td><?php echo $rowAbout['deskripsi_profesi'] ?></td>
                                                <td><?php echo $rowAbout['website'] ?></td>
                                                <td><?php echo $rowAbout['kota'] ?></td>
                                                <td><?php echo $rowAbout['umur'] ?></td>
                                                <td><?php echo $rowAbout['email'] ?></td>
                                                <td><?php echo $rowAbout['date'] ?></td>
                                                <td>
                                                    <a href="tambah-about.php?edit=<?php echo $rowAbout['id'] ?>" class="btn btn-success btn-sm">
                                                        <span class="tf-icon bx bx-pencil bx-18px ">Edit</span>
                                                    </a>
                                                    <a onclick="return confirm('Apakah anda yakin akan menghapus data ini??')"
                                                        href="about.php?delete=<?php echo $rowAbout['id'] ?>" class="btn btn-danger btn-sm">
                                                        <span class="tf-icon bx bx-trash bx-18px ">Delete</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
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
            <?php include 'layout/footer.php' ?>
            <!-- End of Footer -->

        </div>
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
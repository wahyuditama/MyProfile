<?php
session_start();
include 'database/db.php';

// Jika button simpan di klik

if (isset($_POST['simpan'])) {
    // Ambil data dari form
    $atk = $_POST['atk'];
    $base_atk = $_POST['base_atk'];
    $base_hp = $_POST['base_hp'];
    $base_deff = $_POST['base_deff'];
    $crit_rate = $_POST['crit_rate'];
    $crit_dmg = $_POST['crit_dmg'];

    // jika user ingin memasukan data ke databse
    $sqlAbility = mysqli_query($conn,  "INSERT INTO ability (atk, base_atk, base_hp, base_deff, crit_rate, crit_dmg) 
    VALUES ('$atk', '$base_atk', '$base_hp', '$base_deff', '$crit_rate', '$crit_dmg')");
    // echo "Data berhasil ditambahkan!";
    header("location:ability.php?ubah=berhasil");
}


// jika button edit di klik
$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$queryEditAbility = mysqli_query($conn, "SELECT * FROM ability WHERE id ='$id'");
$rowEditAbility = mysqli_fetch_assoc($queryEditAbility);

// Jika Button Edit Simpan Di klik
if (isset($_POST['edit'])) {
    $atk = $_POST['atk'];
    $base_atk = $_POST['base_atk'];
    $base_hp = $_POST['base_hp'];
    $base_deff = $_POST['base_deff'];
    $crit_rate = $_POST['crit_rate'];
    $crit_dmg = $_POST['crit_dmg'];

    // jika user ingin memasukkan gambar

    // Perbarui data
    $update = mysqli_query($conn, "UPDATE ability SET 
    atk = '$atk', 
    base_atk = '$base_atk', 
    base_hp = '$base_hp', 
    base_deff = '$base_deff',
    crit_rate = '$crit_rate',
    crit_rate = '$crit_rate' 
    WHERE id = '$id'");
    header("location:ability.php?ubah=berhasil");
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
                        <h1 class="h3 mb-0 text-gray-800">Ability/Stat</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row justify-content-center">

                        <div class="row">
                            <div class="card" style="width: 58rem;">
                                <div class="card-header"><?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?> Ability</div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <!-- Kolom Kiri (col-6) -->
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="atk">ATK</label>
                                                    <input type="number" class="form-control" id="atk" name="atk"
                                                        value="<?php echo isset($_GET['edit']) ? $rowEditAbility['atk'] : '' ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="base_atk">Base ATK</label>
                                                    <input type="number" class="form-control" id="base_atk" name="base_atk"
                                                        value="<?php echo isset($_GET['edit']) ? $rowEditAbility['base_atk'] : '' ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="base_hp">Base HP</label>
                                                    <input type="number" class="form-control" id="base_hp" name="base_hp"
                                                        value="<?php echo isset($_GET['edit']) ? $rowEditAbility['base_hp'] : '' ?>">
                                                </div>
                                            </div>

                                            <!-- Kolom Kanan (col-6) -->
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="base_deff">Base Defense</label>
                                                    <input type="number" class="form-control" id="base_deff" name="base_deff"
                                                        value="<?php echo isset($_GET['edit']) ? $rowEditAbility['base_deff'] : '' ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="crit_rate">Crit Rate</label>
                                                    <input type="text" class="form-control" id="crit_rate" name="crit_rate"
                                                        value="<?php echo isset($_GET['edit']) ? $rowEditAbility['crit_rate'] : '' ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="crit_dmg">Crit Damage</label>
                                                    <input type="number" class="form-control" id="crit_dmg" name="crit_dmg"
                                                        value="<?php echo isset($_GET['edit']) ? $rowEditAbility['crit_dmg'] : '' ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tombol Submit -->
                                        <button type="submit" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>" class="btn btn-primary btn-user btn-block">
                                            <?php echo isset($_GET['edit']) ? 'Perbarui Data' : 'Masukkan Data'; ?>
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
                        <span>Copyright &copy; Your ability_header 2021</span>
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
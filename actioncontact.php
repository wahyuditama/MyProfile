<?php

include 'admin/database/db.php';

print_r($_POST); die;

$nama = $_POST['nama'];
$email = $_POST['email'];
$subjek = $_POST['subjek'];
$pesan = $_POST['pesan'];

$send = mysqli_query($conn,"INSERT INTO contact (nama,email,subjek,pesan) VALUES ('$nama', '$email', '$subjek', '$pesan')");

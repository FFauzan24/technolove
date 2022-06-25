<?php
session_start();
include 'koneksi.php';
extract($_POST);
$sql = mysqli_query($koneksi, "Select * From data_user Where username='$username'
and password='$password'");

if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_array($sql);
    $_SESSION['Nama'] = $row['nama'];
    echo "<script>alert('selamat anda berhasil login! Welcome $row[nama]..');
        </script>";
    if ($row['id_level'] == 1) {
        echo "<meta content='0; url=admin/' http-equiv='refresh'>";
    } else {
        echo "<meta content='0; url=user' http-equiv='refresh'>";
    }
} else {
    echo "<script>alert('anda gagal login! silahkan Ulangi');</script>";
    echo "<meta content='0; url=login.php' http-equiv='refresh'>";
}

<?php
extract($_POST);

$allowtypes = array('jpg', 'jpeg', 'png', 'gif', 'pdf');
$target_file = $_FILES['foto']['name'];
$x = explode('.', $target_file);
$ekstensi = strtolower(end($x));
$ukuran = $_FILES['foto']['size'];
$file_tmp = $_FILES['foto']['tmp_name'];
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (isset($simpan)) {
    if (in_array($ekstensi, $allowtypes) === true) {
        move_uploaded_file($file_tmp, '/opt/lampp/htdocs/technolove/data_gambar/'
            . $target_file);
    }
    $tambah = mysqli_query($koneksi, "insert into data_barang values (NULL, 
    '$nama', '$jenis', '$detail', '$harga', '$stok', '$target_file')") or die(mysqli_error($koneksi));

    if ($tambah) {
        $msg = "Upload Data Barang Berhasil";
    } else {
        $msg = "Barang gagal Diupload";
    }
    echo "$msg";
} else {
    echo "Gagal Mengupload Barang";
    mysqli_error($koneksi);
}

<?php
extract($_POST);
include "koneksi.php";
$sql_delete = mysqli_query($koneksi, "Delete From data_barang where id_barang = '$id'");
if ($sql_delete) {
?>
    <script language="javascript">
        alert("Data Berhasil Dihapus");
        document.location = "index.php?menu=tampil_barang";
    </script>
<?php
} else {
?>
    <script language="javascript">
        alert("Data gagal Dihapus");
        document.location = "index.php?menu=tampil_barang";
    </script>
<?php
}
?>
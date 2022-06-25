<?php
$jenis = ['Part Laptop', 'Part Komputer', 'Komponen Lainya'];
$submit = "";
extract($_POST);
if (isset($edit)) {
    $sql_update = mysqli_query($koneksi, "UPDATE data_barang SET Nama ='$nama', 
    jenis ='$jenis', detail ='$detail', harga ='$harga', 
    stok ='$stok' WHERE id_barang = '$id';") or die(mysqli_error($koneksi));

    if ($sql_update) {
        echo "
        <script language=javascript>
            alert('Data Berhasil Diupdate');
            document.location = 'index.php?menu=tampil_barang';
        </script>";
    } else {
        echo "
        <script language=javascript>
        alert('Data Berhasil Diupdate');
        document.location = 'index.php?menu=tampil_barang';
    </script>";
    }
    echo $msg;
} else {
    $tampil = mysqli_query($koneksi, "Select * From data_barang where id_barang='$id'");
    while ($data = mysqli_fetch_array($tampil)) {
?>
        <div class="container">

            <div class="row">
                <div class="col">
                    <div class=" card">
                        <div class="card-header" style="background-color:#007bff; color:white;">
                            Form Edit Data Barang
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?= $data['id_barang']; ?>">
                                <div class="form-group">
                                    <label for="nama">Nama Barang</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['Nama']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="jenis">Jenis</label>
                                    <select name="jenis" id="jenis" class="form-control">
                                        <?php foreach ($jenis as $j) : ?>
                                            <?php if ($j == $data['jenis']) : ?>
                                                <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $j; ?>"><?= $j; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="detail">Detail</label>
                                    <textarea name="detail" id="detail" class="form-control" cols="30" rows="5"><?= $data['detail']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga" value="<?= $data['harga']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="stok">Stok Barang</label>
                                    <input type="text" class="form-control" id="stok" name="stok" value="<?= $data['stok']; ?>">
                                </div>
                                <button type="submit" name="edit" class="btn btn-primary float-right">Edit Data Barang</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
<?php
    }
}
?>
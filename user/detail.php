<?php
$tampil = mysqli_query($koneksi, "Select * From data_barang where id_barang='$id'");
while ($data = mysqli_fetch_array($tampil)) {
?>
    <div class="container">
        <div class="card mt-5">
            <h5 class="card-header">Detail Barang</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <img src="../data_gambar/<?= $data['gambar'] ?>" alt="" height="300px" width="300px">
                    </div>
                    <div class="col-7">
                        <h5 class="card-title"><?= $data['Nama']; ?></h5>
                        <pre class="card-text"><?= $data['detail']; ?></pre>

                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                    </div>
                    <div class="col-7">
                        <h5 class="card-text">RP <?= $data['harga']; ?>.-</h5>
                        <p>Stok : <?= $data['stok']; ?></p>
                        <a href="#" class="btn btn-primary">BELI BARANG</a>
                        <a href="index.php?menu=tampil_barang" class="btn btn-primary">KEMBALI</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
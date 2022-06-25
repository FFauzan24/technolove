    <div class=" container mt-3 mb-5">
        <h3>DAFTAR BARANG</h3>
        <table class="table table-light">
            <thead class="thead thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAMA BARANG</th>
                    <th scope="col">JENIS</th>
                    <th scope="col">DETAIL</th>
                    <th scope="col">HARGA</th>
                    <th scope="col">STOK</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                $tampil = mysqli_query($koneksi, "Select * From data_barang");
                while ($data = mysqli_fetch_array($tampil)) {
                    $no++;
                ?>
                    <tr>
                        <th scope="col"><?= $no; ?></th>
                        <th scope="col"><?= $data['Nama'] ?></th>
                        <th scope="col"><?= $data['jenis'] ?></th>
                        <th scope="col-6"><?= $data['detail'] ?></th>
                        <th scope="col"><?= $data['harga'] ?></th>
                        <th scope="col"><?= $data['stok'] ?></th>
                        <th scope="col-6">
                            <a href="index.php?menu=hapus_barang&id=<?= $data['id_barang']; ?>" class="badge badge-danger" onclick="return confirm('Yakin Hapus Data');">Hapus</a>
                            <a href="index.php?menu=edit_barang&id=<?= $data['id_barang']; ?>" class="badge badge-warning">Edit</a>
                        </th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="row mt-3">
            <div class="col-md-6">
                <a href="index.php?menu=tambah" class="btn btn-btn-primary">Tambah Data Barang</a>
            </div>
        </div>
    </div>
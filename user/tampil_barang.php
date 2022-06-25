<div class="container">
    <div class="row">

        <?php
        $no = 0;
        $tampil = mysqli_query($koneksi, "Select * From data_barang");
        while ($data = mysqli_fetch_array($tampil)) { ?>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="../data_gambar/<?= $data['gambar'] ?>" alt="" height="200px" width="200px">
                    <div class="caption">
                        <p><?= $data['Nama'] ?></p>
                        <h5> RP <?= $data['harga'] ?></h5>
                        <p>
                            <a href="index.php?menu=detail&id=<?= $data['id_barang']; ?>" class="btn btn-primary">Detail</a>
                            <a href="?menu=tampil_barang&beli=<?= $data['id_barang'] ?>" class="btn btn-primary" role="button">BELI</a>
                        </p>

                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
//membuat session
if (isset($_GET['beli'])) {
    if (isset($_SESSION['chart'][$_GET['beli']])) {
        $_SESSION['chart'][$_GET['beli']]++;
    } else {
        $_SESSION['chart'][$_GET['beli']] = 1;
    }
}

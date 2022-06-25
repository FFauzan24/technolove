<div class="container">

    <div class="row mt-3">
        <div class="col">

            <div class="card">
                <div class="card-header" style="background-color:#007bff; color:white;">
                    Form Tambah Data Barang
                </div>
                <div class="card-body">
                    <form action="index.php?menu=simpan" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama Barang</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <select name="jenis" id="jenis" class="form-control">
                                <option value="laptop">Part Laptop</option>
                                <option value="Komputer">Part Komputer</option>
                                <option value="lainya">Komponen Lainya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="detail">Detail</label>
                            <textarea name="detail" id="detail" class="form-control" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok Barang</label>
                            <input type="text" class="form-control" id="stok" name="stok">
                        </div>
                        <div class="form-group">
                            <label for="stok">Gambar Barang</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                <label class="custom-file-label" for="customFile">Pilih Gambar...</label>
                            </div>
                        </div>
                        <button type="submit" name="simpan" class="btn btn-primary float-right">Tambah Data Barang</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
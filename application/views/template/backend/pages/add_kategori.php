<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Kategori Barang</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?php echo base_url('KategoriBarang/addaction') ?>" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">Kode Kategori</label>
                <input type="text" name="kode_kategori" class="form-control" id="exampleInputPassword1" placeholder="Kode Kategori" required>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" id="exampleInputPassword1" placeholder="Nama Kategori" required>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Kategori Barang</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?php
    foreach ($kategori_edit as $key => $value) {
    ?>
        <form action="<?php echo base_url('KategoriBarang/editaction') ?>" method="post">
            <div class="card-body">
                <input type="hidden" name="id_kategori" value="<?= $value->id_kategori; ?>">
                <div class="form-group">
                    <label for="exampleInputPassword1">Kode Kategori</label>
                    <input type="text" value="<?= $value->kode_kategori; ?>" name=" kode_kategori" class="form-control" id="exampleInputPassword1" placeholder="Kode Kategori" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Kategori</label>
                    <input type="text" value="<?= $value->nama_kategori; ?>" name=" nama_kategori" class="form-control" id="exampleInputPassword1" placeholder="Nama Kategori" required>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    <?php } ?>
</div>
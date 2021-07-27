<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Satuan Barang</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?php echo base_url('SatuanBarang/addaction') ?>" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">Nama Satuan</label>
                <input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="Nama Satuan" required>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
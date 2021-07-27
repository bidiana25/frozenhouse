<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Supplier</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?php echo base_url('Supplier/addaction') ?>" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">Nama Supplier</label>
                <input type="text" name="nama_supplier" class="form-control" id="exampleInputPassword1" placeholder="Nama Supplier" required>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Nomor Kontak Supplier</label>
                <input type="text" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="Nomor Kontak" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Alamat Supplier</label>
                <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat Supplier" required>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
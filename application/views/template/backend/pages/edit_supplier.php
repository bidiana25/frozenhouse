<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Supplier</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?php
    foreach ($supplier_edit as $key => $value) {
    ?>
        <form action="<?php echo base_url('Supplier/editaction') ?>" method="post">
            <div class="card-body">
                <input type="hidden" name="id_supplier" value="<?= $value->id_supplier; ?>">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Supplier</label>
                    <input type="text" value="<?= $value->nama_supplier; ?>" name=" nama_supplier" class="form-control" id="exampleInputPassword1" placeholder="Nama Supplier" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Kontak Supplier</label>
                    <input type="text" value="<?= $value->no_hp; ?>" name=" no_hp" class="form-control" id="exampleInputPassword1" placeholder="Nomor Kontak Supplier" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Supplier</label>
                    <input type="text" value="<?= $value->alamat; ?>" name=" alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat Supplier" required>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    <?php } ?>
</div>
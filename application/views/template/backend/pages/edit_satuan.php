<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Satuan Barang</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?php
    foreach ($satuan_edit as $key => $value) {
    ?>
        <form action="<?php echo base_url('SatuanBarang/editaction') ?>" method="post">
            <div class="card-body">
                <input type="hidden" name="id_satuan" value="<?= $value->id_satuan; ?>">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Satuan</label>
                    <input type="text" value="<?= $value->nama; ?>" name="nama" class="form-control" id="exampleInputPassword1" required>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    <?php } ?>
</div>
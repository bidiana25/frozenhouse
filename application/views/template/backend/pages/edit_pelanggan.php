<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Pelanggan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?php
    foreach ($pelanggan_edit as $key => $value) {
    ?>
        <form action="<?php echo base_url('Pelanggan/editaction') ?>" method="post">
            <div class="card-body">
                <input type="hidden" name="id_pelanggan" value="<?= $value->id_pelanggan; ?>">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pelanggan</label>
                    <input type="text" value="<?= $value->nama_pelanggan; ?>" name=" nama_pelanggan" class="form-control" id="exampleInputPassword1" placeholder="Nama Pelanggan" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Kontak Pelanggan</label>
                    <input type="text" value="<?= $value->nohp_pelanggan; ?>" name=" nohp_pelanggan" class="form-control" id="exampleInputPassword1" placeholder="Nomor Kontak Pelanggan" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Pelanggan</label>
                    <input type="text" value="<?= $value->alamat_pelanggan; ?>" name=" alamat_pelanggan" class="form-control" id="exampleInputPassword1" placeholder="Alamat Pelanggan" required>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    <?php } ?>
</div>
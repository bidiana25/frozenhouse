<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Data Penjualan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?php
    foreach ($penjualan_edit as $key => $value) {
    ?>
        <form action="<?php echo base_url('EntryPenjualan/editaction') ?>" method="post">
            <div class="card-body">
                <input type="hidden" name="id_penjualan" value="<?= $value->id_penjualan; ?>">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Barang</label>
                    <select name="barang" class="form-control">
                        <?php
                        $barang = $this->db->get('barang');
                        foreach ($barang->result() as $row) {
                            $selected = ($row->id_barang == $value->barang) ? 'selected' : '';
                        ?>
                            <option value="<?php echo $row->id_barang; ?>" <?= $selected; ?>> <?php echo $row->nama_barang; ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Harga Jual</label>
                    <input type="text" name="harga_jual" value="<?= $value->harga_jual; ?>" class="form-control" id="exampleInputPassword1" placeholder="Nama Barang" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Barang Terjual</label>
                    <input type="number" name="jumlah" value="<?= $value->jumlah; ?>" class="form-control" id="exampleInputPassword1" placeholder="Nama Barang" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Penjualan</label>
                    <input type="date" name="tanggal_penjualan" value="<?= $value->tanggal_penjualan; ?>" class="form-control" id="exampleInputPassword1" placeholder="Harga" required>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    <?php } ?>
</div>
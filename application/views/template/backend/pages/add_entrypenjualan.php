<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data Penjualan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?php echo base_url('EntryPenjualan/addaction') ?>" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">Nama Barang</label>
                <select name="barang" class="form-control">
                    <?php
                    $barang = $this->db->get('barang');
                    foreach ($barang->result() as $row) {
                    ?>
                        <option value="<?php echo $row->id_barang; ?>"> <?php echo $row->nama_barang; ?> </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Harga Jual</label>
                <input type="text" name="harga_jual" class="form-control" id="exampleInputPassword1" placeholder="Harga Jual" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Jumlah Barang Terjual</label>
                <input type="number" name="jumlah" class="form-control" id="exampleInputPassword1" placeholder="Jumlah Barang Terjual" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tanggal Penjualan</label>
                <input type="date" name="tanggal_penjualan" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Penjualan" required>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
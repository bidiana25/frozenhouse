<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data Barang</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?php echo base_url('Barang/insert') ?>" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Kategori Barang</label>
                <select name="kategori_barang" class="form-control">
                    <?php
                    $kategori = $this->db->get('kategori_barang');
                    foreach ($kategori->result() as $row) {

                    ?>
                        <option value="<?php echo $row->id_kategori; ?>"><?php echo $row->kode_kategori . ' ' . '-' . ' ' . $row->nama_kategori; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" id="exampleInputPassword1" placeholder="Nama Barang" required>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Harga</label>
                <input type="text" name="harga" class="form-control" id="exampleInputPassword1" placeholder="Harga" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Satuan</label>
                <select name="satuan" class="form-control">
                    <?php
                    $satuan = $this->db->get('satuan_barang');
                    foreach ($satuan->result() as $row) {

                    ?>
                        <option value="<?php echo $row->id_satuan; ?>"><?php echo $row->nama; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Stok Barang</label>
                <input type="number" name="stok_barang" class="form-control" id="exampleInputPassword1" placeholder="Stok" required>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
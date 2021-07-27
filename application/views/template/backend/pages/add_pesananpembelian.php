<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data Pesanan Pembelian</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?php echo base_url('PesananPembelian/addaction') ?>" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">Nomor PO</label>
                <input type="text" name="nomor_po" class="form-control" id="exampleInputPassword1" placeholder="Nomor PO" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tanggal Pembelian</label>
                <input type="date" name="tanggal_pembelian" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Pembelian" required>
            </div>
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
                <label for="exampleInputPassword1">Satuan Barang</label>
                <select name="satuan" class="form-control">
                    <?php
                    $satuan = $this->db->get('satuan_barang');
                    foreach ($satuan->result() as $row) {
                    ?>
                        <option value="<?php echo $row->id_satuan; ?>"> <?php echo $row->nama; ?> </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Kuantitas</label>
                <input type="text" name="kuantitas" class="form-control" id="exampleInputPassword1" placeholder="Kuantitas" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Supplier</label>
                <select name="supplier" class="form-control">
                    <?php
                    $supplier = $this->db->get('supplier');
                    foreach ($supplier->result() as $row) {
                    ?>
                        <option value="<?php echo $row->id_supplier; ?>"> <?php echo $row->nama_supplier; ?> </option>
                    <?php } ?>
                </select>
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
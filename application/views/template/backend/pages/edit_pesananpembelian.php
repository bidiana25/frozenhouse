<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Data Pesanan Pembelian</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?php
    foreach ($pembelian_edit as $key => $value) {
    ?>
        <form action="<?php echo base_url('PesananPembelian/editaction') ?>" method="post">
            <div class="card-body">
                <input type="hidden" name="id_pembelian" value="<?= $value->id_pembelian; ?>">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nomor PO</label>
                    <input type="text" name="nomor_po" value="<?= $value->nomor_po; ?>" class="form-control" id="exampleInputPassword1" placeholder="Nomor PO" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Pembelian</label>
                    <input type="date" name="tanggal_pembelian" value="<?= $value->tanggal_pembelian; ?>" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Pembelian" required>
                </div>
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
                    <label for="exampleInputPassword1">Satuan Barang</label>
                    <select name="satuan" class="form-control">
                        <?php
                        $satuan = $this->db->get('satuan_barang');
                        foreach ($satuan->result() as $row) {
                            $selected = ($row->id_satuan == $value->satuan) ? 'selected' : '';
                        ?>
                            <option value="<?php echo $row->id_satuan; ?>" <?= $selected; ?>> <?php echo $row->nama; ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Kuantitas</label>
                    <input type="text" name="kuantitas" value="<?= $value->kuantitas; ?>" class="form-control" id="exampleInputPassword1" placeholder="Kuantitas" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Supplier</label>
                    <select name="supplier" class="form-control">
                        <?php
                        $supplier = $this->db->get('supplier');
                        foreach ($supplier->result() as $row) {
                            $selected = ($row->id_supplier == $value->supplier) ? 'selected' : '';
                        ?>
                            <option value="<?php echo $row->id_supplier; ?>" <?= $selected; ?>> <?php echo $row->nama_supplier; ?> </option>
                        <?php } ?>
                    </select>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    <?php } ?>
</div>
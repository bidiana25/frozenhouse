<a href="<?= base_url("PesananPembelian/TambahPembelian"); ?>">
    <i class="fas fa-plus-circle">Tambah Data</i>
</a>
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Nomor PO</th>
            <th>Tanggal Pembelian</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Kuantitas</th>
            <th>Total Harga Pembelian</th>
            <th>Supplier</th>
            <th>Tanggal_penerimaan</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach ($pembelian as $key => $value) {
        ?>
            <tr>

                <td><?php echo $value->nomor_po; ?></td>
                <td><?php echo $value->tanggal_pembelian; ?></td>
                <td><?php echo $value->nama_barang; ?></td>
                <td><?php echo $value->nama; ?></td>
                <td><?php echo $value->kuantitas; ?></td>
                <td><?php echo ($value->harga * $value->kuantitas); ?></td>
                <td><?php echo $value->nama_supplier; ?></td>
                <td><?php if ($value->tanggal_penerimaan == '') {
                        echo "Barang belum diterima";
                    } else {
                        echo $value->tanggal_penerimaan;
                    } ?></td>
                <td>
                    <!--Edit-->
                    <?php if ($value->tanggal_penerimaan == '') { ?>
                        <a href="<?= base_url("PesananPembelian/Edit/" . $value->id_pembelian); ?>">
                            <ion-icon name="create-outline"></ion-icon>
                        </a>
                    <?php } else {
                    } ?>
                    <!--Hapus-->
                    <?php if ($value->tanggal_penerimaan == '') { ?>
                        <a href="<?php echo site_url('PesananPembelian/delete/' . $value->id_pembelian) ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">
                            <ion-icon name="trash-outline"></ion-icon>
                        </a>
                    <?php } else {
                    } ?>
                    <!--Terima Pesanan-->
                    <?php if ($value->tanggal_penerimaan == '') { ?>
                        <a href="<?php echo site_url('PesananPembelian/terima/' . $value->id_pembelian) ?>" onclick="return confirm('Apakah Barang Ini Sudah Diterima?')">
                            <ion-icon name="checkmark-circle-outline"></ion-icon>
                        </a>
                    <?php } else {
                    } ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
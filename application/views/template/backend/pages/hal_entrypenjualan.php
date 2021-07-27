<a href="<?= base_url("EntryPenjualan/TambahPenjualan"); ?>">
    <i class="fas fa-plus-circle">Tambah Data</i>
</a>
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Penjualan</th>
            <th>Nama Barang</th>
            <th>Harga Terjual</th>
            <th>Total Harga</th>
            <th>Jumlah</th>
            <th>Laba</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($penjualan as $key => $value) {
        ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $value->tanggal_penjualan; ?></td>
                <td><?php echo $value->nama_barang; ?></td>
                <td><?php echo $value->harga_jual; ?></td>
                <td><?php echo $value->harga_jual * $value->jumlah; ?></td>
                <td><?php echo $value->jumlah; ?></td>
                <td><?php echo ($value->harga_jual * $value->jumlah) - ($value->harga * $value->jumlah); ?></td>
                <td>
                    <!--Edit-->
                    <a href="<?= base_url("EntryPenjualan/Edit/" . $value->id_penjualan); ?>">
                        <ion-icon name="create-outline"></ion-icon>
                    </a>
                    <!--Hapus-->
                    <a href="<?php echo site_url('EntryPenjualan/delete/' . $value->id_penjualan) ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">
                        <ion-icon name="trash-outline"></ion-icon>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
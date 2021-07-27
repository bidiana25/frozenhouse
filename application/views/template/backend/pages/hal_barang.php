<a href="<?= base_url("Barang/TambahBarang"); ?>">
    <i class="fas fa-plus-circle">Tambah Data</i>
</a>
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Kategori Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Satuan</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($Barang as $key => $value) {
        ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $value->nama_kategori; ?></td>
                <td><?php echo $value->nama_barang; ?></td>
                <td><?php echo $value->harga; ?></td>
                <td><?php echo $value->nama; ?></td>
                <td><?php echo $value->stok_barang; ?></td>
                <td>
                    <!--Edit-->
                    <a href="<?= base_url("Barang/Edit/" . $value->id_barang); ?>">
                        <ion-icon name="create-outline"></ion-icon>
                    </a>
                    <!--Hapus-->
                    <a href="<?php echo site_url('Barang/delete/' . $value->id_barang) ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">
                        <ion-icon name="trash-outline"></ion-icon>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<a href="<?= base_url("SatuanBarang/TambahSatuan"); ?>">
    <i class="fas fa-plus-circle">Tambah Data</i>
</a>
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Satuan Barang</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($satuan as $key => $value) {
        ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $value->nama; ?></td>
                <td>
                    <!--Edit-->
                    <a href="<?= base_url("SatuanBarang/Edit/" . $value->id_satuan); ?>">
                        <ion-icon name="create-outline"></ion-icon>
                    </a>
                    <!--Hapus-->
                    <a href="<?php echo site_url('SatuanBarang/delete/' . $value->id_satuan) ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">
                        <ion-icon name="trash-outline"></ion-icon>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
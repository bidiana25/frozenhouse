<a href="<?= base_url("Supplier/TambahSupplier"); ?>">
    <i class="fas fa-plus-circle">Tambah Data</i>
</a>
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Supplier</th>
            <th>Nomor Kontak Supplier</th>
            <th>Alamat Supplier</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($supplier as $key => $value) {
        ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $value->nama_supplier; ?></td>
                <td><?php echo $value->no_hp; ?></td>
                <td><?php echo $value->alamat; ?></td>
                <td>
                    <!--Edit-->
                    <a href="<?= base_url("Supplier/Edit/" . $value->id_supplier); ?>">
                        <ion-icon name="create-outline"></ion-icon>
                    </a>
                    <!--Hapus-->
                    <a href="<?php echo site_url('Supplier/delete/' . $value->id_supplier) ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">
                        <ion-icon name="trash-outline"></ion-icon>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
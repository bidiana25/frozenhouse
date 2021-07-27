<a href="<?= base_url("Pelanggan/TambahPelanggan"); ?>">
    <i class="fas fa-plus-circle">Tambah Data</i>
</a>
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Nomor Kontak Pelanggan</th>
            <th>Alamat Pelanggan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($pelanggan as $key => $value) {
        ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $value->nama_pelanggan; ?></td>
                <td><?php echo $value->nohp_pelanggan; ?></td>
                <td><?php echo $value->alamat_pelanggan; ?></td>
                <td>
                    <!--Edit-->
                    <a href="<?= base_url("Pelanggan/Edit/" . $value->id_pelanggan); ?>">
                        <ion-icon name="create-outline"></ion-icon>
                    </a>
                    <!--Hapus-->
                    <a href="<?php echo site_url('Pelanggan/delete/' . $value->id_pelanggan) ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">
                        <ion-icon name="trash-outline"></ion-icon>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
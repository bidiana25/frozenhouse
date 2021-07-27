<a href="<?= base_url("KategoriBarang/TambahKategori"); ?>">
    <i class="fas fa-plus-circle">Tambah Data</i>
</a>
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Kategori</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($kategori as $key => $value) {
        ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $value->kode_kategori; ?></td>
                <td><?php echo $value->nama_kategori; ?></td>
                <td>
                    <!--Edit-->
                    <a href="<?= base_url("KategoriBarang/Edit/" . $value->id_kategori); ?>">
                        <ion-icon name="create-outline"></ion-icon>
                    </a>
                    <!--Hapus-->
                    <a href="<?php echo site_url('KategoriBarang/delete/' . $value->id_kategori) ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">
                        <ion-icon name="trash-outline"></ion-icon>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
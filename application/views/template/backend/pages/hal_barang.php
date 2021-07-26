<table id="example1" class="table table-bordered table-striped">
    <thead>
        <button type="button" class="btn btn-block btn-info btn-sm">Tambah Data</button>
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
                <td><?php echo $value->satuan; ?></td>
                <td><?php echo $value->stok_barang; ?></td>
                <td>
                    <!--Edit-->
                    <a href="" class="btn-edit">
                        <i class="icon feather icon-edit"></i>
                    </a>

                    <!--Hapus-->
                    <a href="" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">
                        <i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
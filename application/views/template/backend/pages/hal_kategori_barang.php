<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width: 10px">No</th>
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
                <td></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
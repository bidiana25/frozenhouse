<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width: 10px">No</th>
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
                <td></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
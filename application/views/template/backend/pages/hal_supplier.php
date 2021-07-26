<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width: 10px">No</th>
            <th>Nama Supplier</th>
            <th>Nomor HP Supplier</th>
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
                <td></td>
                <td></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
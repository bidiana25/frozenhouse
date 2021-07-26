<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width: 10px">No</th>
            <th>Nama Pelanggan</th>
            <th>Nomor HP Pelanggan</th>
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
                <td></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
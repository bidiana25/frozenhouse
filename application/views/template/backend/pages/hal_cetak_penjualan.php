<form action="<?php echo base_url('CetakLaporan/pdf'); ?>" method="Post">


    <div class="row">
        <div class="col-3">
            <label>Tanggal Mulai</label>
            <input type="date" class="form-control" name="d1">
        </div>
        <div class="col-3">
            <label>Tanggal Akhir</label>
            <input type="date" class="form-control" name="d2">
        </div>
        <div class="col-3">
            <label>Cetak Laporan</label>
            <button type="submit" class="btn btn-block btn-primary">Cetak Laporan</button>
        </div>

    </div>


</form>
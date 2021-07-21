<!--Hari ini tanggal <?php echo date("F j, Y, g:i a"); ?> !-->

Hari Ini <?php echo format_indo(date("Y-m-d")); ?>
<br /><br />
<div class="row">
    <!-- UNTUK CARD PERTAMA !-->
    <div class="col-xl-3 col-md-6">
        <div class="card prod-p-card card-red">
            <div class="card-body">
                <div class="row align-items-center m-b-30">
                    <div class="col">
                        <h6 class="m-b-5 text-white">Saldo Yang Masuk</h6>
                        <h3 class="m-b-0 f-w-700 text-white"><?php echo rupiah($cash_in_hand); ?></h3>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr />

    <!-- UNTUK CARD KEDUA !-->
    <div class="col-xl-3 col-md-6">
        <div class="card prod-p-card card-blue">
            <div class="card-body">
                <div class="row align-items-center m-b-30">
                    <div class="col">
                        <h6 class="m-b-5 text-white">Jumlah Transaksi</h6>
                        <h3 class="m-b-0 f-w-700 text-white"> <?php echo $total_transaksi; ?> </h3>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-database text-c-blue f-18"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- UNTUK CARD KETIGA !-->
    <div class="col-xl-3 col-md-6">
        <div class="card prod-p-card card-green">
            <div class="card-body">
                <div class="row align-items-center m-b-30">
                    <div class="col">
                        <h6 class="m-b-5 text-white">Total Pendapatan</h6>
                        <h3 class="m-b-0 f-w-700 text-white"><?php echo rupiah($total_pendapatan); ?></h3>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-plus text-c-green f-18"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- UNTUK CARD KEEMPAT !-->
    <div class="col-xl-3 col-md-6">
        <div class="card prod-p-card card-yellow">
            <div class="card-body">
                <div class="row align-items-center m-b-30">
                    <div class="col">
                        <h6 class="m-b-5 text-white">Total Beban</h6>
                        <h3 class="m-b-0 f-w-700 text-white"><?php echo rupiah($total_pengeluaran); ?></h3>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-minus text-c-yellow f-18"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- KONTEN INFO !-->
<div class="card">
    <div class="card-header">
        <h5>Info</h5>
    </div>
    <div class="card-block">
        <div class="card list-view-media">
            <div class="card-block">
                <div class="media">
                    <a class="media-left" href="#">
                        <img class="media-object card-list-img" style="width:125px; height:125px" src="<?= base_url('assets/images/' . $this->session->userdata('photo')); ?>">
                    </a>
                    <div class="media-body">
                        <div class="col-xs-12">
                            <h6 class="d-inline-block">
                                <?php echo $this->session->userdata('nama') ?>
                                <label class="label label-info"><?php echo $this->session->userdata('role') ?></label>
                        </div>
                        <div class="f-13 text-muted m-b-15">
                            <?php echo $this->session->userdata('email') ?>
                        </div>

                        <?php
                        // Cek role user
                        if ($this->session->userdata('role') == 'bendahara') { // Jika role-nya admin
                        ?>
                            <p>Bendahara berwenang untuk merekam transaksi yang terjadi di Sekolah Insan Teladan Pekanbaru</p>
                        <?php
                        } else { // Jika role-nya operator
                        ?>
                            <p> Yayasan memantau alur keuangan dan transaksi yang terjadi di Sekolah Insan Teladan Pekanbaru </p>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<!-- Untuk rupiah pemisah angka koma dan RP !-->
<?php

function rupiah($angka)
{

    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}
?>
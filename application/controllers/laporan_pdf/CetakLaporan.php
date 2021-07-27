<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CetakLaporan extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('EntryPenjualanModel');
    }

    public function index()
    {

        $pdf = new \TCPDF();
        $pdf->SetPrintHeader(false);
        $pdf->SetPrintFooter(false);
        $pdf->AddPage('L',  array(210, 148));
        $pdf->SetAutoPageBreak(true, 0);

        // Add Header

        #.............................paper head





        $pdf->SetFont('', '', 12);









        $read_select = $this->EntryPenjualanModel->select_penjualan();
        foreach ($read_select as $key => $value) {
            $tanggal_penjualan[$key] = $value->tanggal_penjualan;
            $nama_barang[$key] = $value->nama_barang;
            $harga_jual[$key] = $value->harga_jual;
            $total_harga[$key] = $value->harga_jual * $value->jumlah;
            $jumlah[$key] = $value->jumlah;
            $laba[$key] = ($value->harga_jual * $value->jumlah) - ($value->harga * $value->jumlah);
        }
        $total_baris_transaksi = $key;


        $colom_width[0] = 10;
        $colom_width[1] = 40;
        $colom_width[2] = 40;
        $colom_width[3] = 20;
        $colom_width[4] = 25;

        $colom_width[5] = 30;
        $colom_width[6] = 25;


        $no_hal = 1;
        $total_all = 0;
        $total_baris_1_bon = 18;
        $baris_height = 4;

        $jumlah_hal = intval($total_baris_transaksi / $total_baris_1_bon) + 1;
        for ($i = 0; $i <= $total_baris_transaksi; $i++) {
            $rmd = (float)($i / $total_baris_1_bon);
            $rmd = ($rmd - (int)$rmd) * $total_baris_1_bon;
            if (($i >= $total_baris_1_bon and $rmd == 0) or $i == 0) {
                if ($i > 0) {
                    $pdf->SetPrintHeader(false);
                    $pdf->SetPrintFooter(false);
                    $pdf->AddPage('L',  array(210, 148));
                }






                $x_value = $pdf->GetX();
                $y_value = 5;
                $pdf->SetXY($x_value, $y_value);

                $pdf->SetFont('', 'B', 11);
                $pdf->Cell(130, 6, "", 0, 0, 'C');
                $pdf->Cell(30, 6, "Laporan Data Penjualan", 0, 1, 'L');

                $pdf->SetFont('', '', 8);
                $pdf->Cell(130, 4, "", 0, 0, 'C');
                $pdf->Cell(30, 4, '', 0, 1, 'L');











                $pdf->Cell(190, 1, "Hal. " . $no_hal . '/' . $jumlah_hal, 'B', 1, 'R');

                $no_hal = $no_hal + 1;

                $pdf->SetFont('', '', 8);
                $pdf->Cell($colom_width[0], 8, "NO", 'B', 0, 'C');
                $pdf->Cell($colom_width[1], 8, "Tanggal Penjualan", 'BL', 0, 'C');
                $pdf->Cell($colom_width[2], 8, "Nama Barang", 'BL', 0, 'C');
                $pdf->Cell($colom_width[3], 8, "Harga Terjual", 'BL', 0, 'C');
                $pdf->Cell($colom_width[4], 8, "Total Harga", 'BL', 0, 'C');
                $pdf->Cell($colom_width[5], 8, "Jumlah", 'BL', 0, 'C');
                $pdf->Cell($colom_width[6], 8, "Laba", 'BL', 1, 'C');
            }






            $pdf->SetFont('', '', 8);

            $pdf->MultiCell($colom_width[0], $baris_height, ($i + 1) . '.', '0', 'C', 0, 0);
            $pdf->MultiCell($colom_width[1], $baris_height, $tanggal_penjualan[$i], 'L', 'L', 0, 0);
            $pdf->MultiCell($colom_width[2], $baris_height, substr($nama_barang[$i], 0, 20), 'L', 'L', 0, 0);
            $pdf->MultiCell($colom_width[3], $baris_height, number_format(round($harga_jual[$i])), 'L', 'C', 0, 0);

            $pdf->MultiCell($colom_width[4], $baris_height, number_format(round($total_harga[$i])), 'L', 'C', 0, 0);




            $pdf->MultiCell($colom_width[5], $baris_height, number_format(round($jumlah[$i])), 'L', 'R', 0, 0);

            $pdf->MultiCell($colom_width[6], $baris_height, number_format(round($laba[$i])), 'L', 'R', 0, 0);



            $pdf->Cell(0.01, $baris_height, "", '0', 1, 'C');

            $total_all = $total_all + floatval($jumlah[$i]);


            if ($rmd == $total_baris_1_bon - 1) {
                $pdf->MultiCell(150, 8, 'Terbilang : #' . ucwords($this->terbilang($total_all)) . ' Rupiah#', 'T', 'L', 0, 0);
                $pdf->MultiCell(15, 8, 'Total', 'T', 'R', 0, 0);
                $pdf->MultiCell(25, 8, number_format(round($total_all)), 'T', 'R', 0, 1);
                $total_all = 0;

                $pdf->Cell(40, 6, "NB: Barang yang sudah dibeli tidak dapat ditukar/dikembalikan", 0, 1, 'L');

                $pdf->Cell(40, 6, "DITERIMA OLEH:", 0, 0, 'C');
                $pdf->Cell(5, 6, "", 0, 0, 'C');
                $pdf->Cell(40, 6, "DIPERIKSA OLEH:", 0, 0, 'C');
                $pdf->Cell(5, 6, "", 0, 0, 'C');
                $pdf->Cell(40, 6, "", 0, 0, 'C');
                $pdf->Cell(5, 6, "", 0, 0, 'C');
                $pdf->Cell(40, 6, "", 0, 1, 'C');

                $pdf->Cell(40, 12, "", 0, 0, 'C');
                $pdf->Cell(5, 12, "", 0, 0, 'C');
                $pdf->Cell(40, 12, "", 'B', 0, 'C');
                $pdf->Cell(5, 12, "", 0, 0, 'C');
                $pdf->Cell(40, 12, "", 'B', 0, 'C');
                $pdf->Cell(5, 12, "", 0, 0, 'C');
                $pdf->Cell(40, 12, "", 'B', 1, 'C');
            }
        }

        if ($total_baris_1_bon > $i) {
            for ($x = 0; $x < ($total_baris_1_bon - $i); $x++) {
                $pdf->MultiCell($colom_width[0], $baris_height, '', '0', 'C', 0, 0);
                $pdf->MultiCell($colom_width[1], $baris_height, '', 'L', 'L', 0, 0);
                $pdf->MultiCell($colom_width[2], $baris_height, '', 'L', 'L', 0, 0);
                $pdf->MultiCell($colom_width[3], $baris_height, '', 'L', 'C', 0, 0);
                $pdf->MultiCell($colom_width[4], $baris_height, '', 'L', 'C', 0, 0);
                $pdf->MultiCell($colom_width[5], $baris_height, '', 'L', 'R', 0, 0);
                $pdf->MultiCell($colom_width[6], $baris_height, '', 'L', 'R', 0, 0);
                $pdf->Cell(0.01, $baris_height, "", '0', 1, 'C');
            }
        }
        if ($total_baris_1_bon < $i) {
            $rmd = (float)($i / $total_baris_1_bon);
            $rmd = ($rmd - (int)$rmd) * $total_baris_1_bon;
            for ($x = 0; $x < ($total_baris_1_bon - $rmd); $x++) {

                $pdf->MultiCell($colom_width[0], $baris_height, '', '0', 'C', 0, 0);
                $pdf->MultiCell($colom_width[1], $baris_height, '', 'L', 'L', 0, 0);
                $pdf->MultiCell($colom_width[2], $baris_height, '', 'L', 'L', 0, 0);
                $pdf->MultiCell($colom_width[3], $baris_height, '', 'L', 'C', 0, 0);
                $pdf->MultiCell($colom_width[4], $baris_height, '', 'L', 'C', 0, 0);
                $pdf->MultiCell($colom_width[5], $baris_height, '', 'L', 'R', 0, 0);
                $pdf->MultiCell($colom_width[6], $baris_height, '', 'L', 'R', 0, 0);
                $pdf->Cell(0.01, $baris_height, "", '0', 1, 'C');
            }
        }

        $pdf->MultiCell(150, 8, 'Terbilang : #' . ucwords($this->terbilang($total_all)) . ' Rupiah#', 'T', 'L', 0, 0);
        $pdf->MultiCell(15, 8, 'Total', 'T', 'R', 0, 0);
        $pdf->MultiCell(25, 8, number_format(round($total_all)), 'T', 'R', 0, 1);



        $pdf->Cell(40, 6, "DITERIMA OLEH:", 0, 0, 'C');
        $pdf->Cell(10, 6, "", 0, 0, 'C');
        $pdf->Cell(40, 6, "DIPERIKSA OLEH:", 0, 0, 'C');
        $pdf->Cell(10, 6, "", 0, 0, 'C');
        $pdf->Cell(40, 6, "", 0, 0, 'C');
        $pdf->Cell(10, 6, "", 0, 0, 'C');
        $pdf->Cell(40, 6, "", 0, 1, 'C');

        $pdf->Cell(40, 12, "", 0, 0, 'C');
        $pdf->Cell(10, 12, "", 0, 0, 'C');
        $pdf->Cell(40, 12, "", 0, 0, 'C');
        $pdf->Cell(10, 12, "", 0, 0, 'C');
        $pdf->Cell(40, 12, "", 0, 0, 'C');
        $pdf->Cell(10, 12, "", 0, 0, 'C');
        $pdf->Cell(40, 12, "", 0, 1, 'C');

        $pdf->Cell(40, 6, "Tgl:", 'T', 0, 'C');
        $pdf->Cell(10, 6, "", 0, 0, 'C');
        $pdf->Cell(40, 6, "Tgl:", 'T', 0, 'C');
        $pdf->Cell(10, 6, "", 0, 0, 'C');
        $pdf->Cell(40, 6, "", '0', 0, 'C');
        $pdf->Cell(10, 6, "", 0, 0, 'C');
        $pdf->Cell(40, 6, "", 0, 1, 'C');






        $pdf->Output("file.pdf");
    }




    function penyebut($nilai)
    {
        $nilai = abs($nilai);
        $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " " . $huruf[$nilai];
        } else if ($nilai < 20) {
            $temp = $this->penyebut($nilai - 10) . " belas";
        } else if ($nilai < 100) {
            $temp = $this->penyebut($nilai / 10) . " puluh" . $this->penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " seratus" . $this->penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = $this->penyebut($nilai / 100) . " ratus" . $this->penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " seribu" . $this->penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = $this->penyebut($nilai / 1000) . " ribu" . $this->penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = $this->penyebut($nilai / 1000000) . " juta" . $this->penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = $this->penyebut($nilai / 1000000000) . " milyar" . $this->penyebut(fmod($nilai, 1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = $this->penyebut($nilai / 1000000000000) . " trilyun" . $this->penyebut(fmod($nilai, 1000000000000));
        }
        return $temp;
    }

    function terbilang($nilai)
    {
        if ($nilai < 0) {
            $hasil = "minus " . trim($this->penyebut($nilai));
        } else {
            $hasil = trim($this->penyebut($nilai));
        }
        return $hasil;
    }
}

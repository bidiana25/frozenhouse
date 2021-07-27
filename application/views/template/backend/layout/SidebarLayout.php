<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="<?= base_url() ?>assets/dist/img/img_avatar2.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block"><?php echo $this->session->userdata('nama') ?></a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <!-- Untuk Dashboard !-->
            <li class="nav-item">
                <a href="<?= base_url("page/home"); ?>" class="nav-link <?php if ($this->uri->segment(2) == "home") {
                                                                            echo 'active';
                                                                        } ?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item <?=
                                $this->uri->segment(1) == 'Barang' ||
                                    $this->uri->segment(1) == 'KategoriBarang' ||
                                    $this->uri->segment(1) == 'SatuanBarang' ||
                                    $this->uri->segment(1) == 'Supplier' ||
                                    $this->uri->segment(1) == 'Pelanggan' ? 'menu-open' : '' ?>">
                <a href="#" class="nav-link <?=
                                            $this->uri->segment(1) == 'Barang' ||
                                                $this->uri->segment(1) == 'KategoriBarang' ||
                                                $this->uri->segment(1) == 'SatuanBarang' ||
                                                $this->uri->segment(1) == 'Supplier' ||
                                                $this->uri->segment(1) == 'Pelanggan' ? 'active' : '' ?>">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        Data Master
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <?php if ($this->session->userdata('role') == 'persediaan') { ?>
                        <li class="nav-item">
                            <a href="<?= base_url("Barang/"); ?>" class="nav-link 
                        <?php if ($this->uri->segment(1) == "Barang") {
                            echo 'active';
                        } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url("KategoriBarang/"); ?>" class="nav-link <?php if ($this->uri->segment(1) == "KategoriBarang") {
                                                                                                echo 'active';
                                                                                            } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kategori Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url("SatuanBarang/"); ?>" class="nav-link <?php if ($this->uri->segment(1) == "SatuanBarang") {
                                                                                            echo 'active';
                                                                                        } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Satuan Barang</p>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ($this->session->userdata('role') == 'pembelian') { ?>
                        <li class="nav-item">
                            <a href="<?= base_url("Supplier/"); ?>" class="nav-link <?php if ($this->uri->segment(1) == "Supplier") {
                                                                                        echo 'active';
                                                                                    } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Supplier</p>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ($this->session->userdata('role') == 'penjualan') { ?>
                        <li class="nav-item">
                            <a href="<?= base_url("Pelanggan/"); ?>" class="nav-link <?php if ($this->uri->segment(1) == "Pelanggan") {
                                                                                            echo 'active';
                                                                                        } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pelanggan</p>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
            <?php if ($this->session->userdata('role') == 'penjualan') { ?>
                <li class="nav-header">Modul Penjualan</li>
                <li class="nav-item">
                    <a href="<?= base_url("EntryPenjualan/"); ?>" class="nav-link <?php if ($this->uri->segment(1) == "EntryPenjualan") {
                                                                                        echo 'active';
                                                                                    } ?>">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Entry Penjualan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url("Laporan/"); ?>" class="nav-link <?php if ($this->uri->segment(
                                                                                1
                                                                            ) == "Laporan") {
                                                                                echo 'active';
                                                                            } ?>">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Laporan Data Penjualan
                        </p>
                    </a>
                </li>
            <?php } ?>
            <?php if ($this->session->userdata('role') == 'pembelian') { ?>
                <li class="nav-header">Modul Pembelian</li>
                <li class="nav-item">
                    <a href="<?= base_url("PesananPembelian/"); ?>" class="nav-link <?php if ($this->uri->segment(1) == "PesananPembelian") {
                                                                                        echo 'active';
                                                                                    } ?>">
                        <i class="nav-icon fas fa-shopping-bag"></i>
                        <p>
                            Pesanan Pembelian
                        </p>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <p>
                    Transaksi
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('kasirPenjualan') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Penjualan</p>
                    </a>
                </li>
            </ul>
        </li>


        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <p>
                    Laporan
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('kasirCetakFaktur') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Cetak Faktur</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('kasirSemuaPenjualan') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Semua Penjualan</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('kasirJualPertanggal') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Penjualan Pertanggal</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
  </nav>



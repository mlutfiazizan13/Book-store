<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <p>
                    Laporan
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('managerCetakFaktur') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Cetak Faktur</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('managerSemuaPenjualan') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Semua Penjualan</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('managerJualPertanggal') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Penjualan Pertanggal</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('managerSemuaBuku') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Semua Data Buku</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('managerFilterPenulis') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Filter Penulis Buku</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('managerSeringTerjual') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Buku Yang Sering Terjual</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('managerTidakTerjual') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Buku Yang Tidak Pernah Terjual</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pasok Buku</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Filter Pasok Buku</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <p>
                    Pengaturan
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('profil') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Profil</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>


  </nav>



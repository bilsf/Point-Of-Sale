<nav class="navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand" href="{{ url('/dashboard') }}">
            {{-- <img src="{{ asset('master/assets/img/logo-ct-dark.png') }}" class="navbar-brand-img" alt="main_logo"> --}}
            <span class="ms-1 font-weight-bold">A POS</span>
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    @role('admin')
                    <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}">
                        <i class="bi bi-buildings-fill"></i>
                        <span class="ms-2">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('mereks') ? 'active' : '' }}" href="{{ url('mereks') }}">
                        <i class="ni ni-collection text-dark"></i>
                        <span class="ms-2">Merek</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('distributors') ? 'active' : '' }}" href="{{ url('distributors') }}">
                        <i class="ni ni-box-2 text-warning"></i>
                        <span class="ms-2">Distributor</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('barangs') ? 'active' : '' }}" href="{{ url('barangs') }}">
                        <i class="ni ni-bag-17 text-info"></i>
                        <span class="ms-2">Barang</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('users') ? 'active' : '' }}" href="{{ url('users') }}">
                        <i class="ni ni-circle-08 text-info"></i>
                        <span class="ms-2">User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('transaksis') ? 'active' : '' }}" href="{{ url('transaksis') }}">
                        <i class="ni ni-shop text-danger"></i>
                        <span class="ms-2">Transaksi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('items') ? 'active' : '' }}" href="{{ url('items') }}">
                        <i class="ni ni-shop text-danger"></i>
                        <span class="ms-2">Keranjang</span>
                    </a>
                </li>
                @endrole

                @role('kasir')
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('transaksis') ? 'active' : '' }}" href="{{ url('transaksis') }}">
                        <i class="ni ni-shop text-danger"></i>
                        <span class="ms-2">Transaksi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('items') ? 'active' : '' }}" href="{{ url('items') }}">
                        <i class="ni ni-shop text-danger"></i>
                        <span class="ms-2">Keranjang</span>
                    </a>
                </li>
                @endrole
            </ul>
        </div>
    </div>
</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{url('/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">A Pos </span>
        <ion-icon name="logo-apple-ar"></ion-icon>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
              data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
              <li class="nav-item">
                  <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}">
                      {{-- <i class="nav-icon fa-solid fa-house"></i> --}}
                      <i class="nav-icon fas fa-building"></i>                      <p>
                          Dashboard
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ request()->is('mereks') ? 'active' : '' }}" href="{{ url('mereks') }}">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                          Merek
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ request()->is('distributors') ? 'active' : '' }}"
                      href="{{ url('distributors') }}">
                      <i class="nav-icon fas fa-users"></i>
                      <p>
                          Distributor
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ request()->is('barangs') ? 'active' : '' }}" href="{{ url('barangs') }}">
                      <i class="nav-icon fas fa-shopping-cart"></i>
                      <p>
                          Barang
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ request()->is('users') ? 'active' : '' }}" href="{{ url('users') }}">
                      <i class="nav-icon fas fa-user"></i>
                      <p>
                          User
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ request()->is('transaksis') ? 'active' : '' }}"
                      href="{{ url('transaksis') }}">
                      <i class="nav-icon fas fa-cart-plus"></i>
                      <p>
                          Transaksi
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ request()->is('items') ? 'active' : '' }}" href="{{ url('items') }}">
                      <i class="nav-icon fas fa-shopping-cart"></i>
                      <p>
                          Keranjang
                      </p>
                  </a>
              </li>

          </ul>
      </nav>
    </div>
    <!-- /.sidebar -->
</aside>

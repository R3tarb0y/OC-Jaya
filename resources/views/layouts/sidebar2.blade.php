<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('AdminLTE-2/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
          <span>  {{ auth()->user()->name }}
            <br>
            <small>{{ auth()->user()->level }}</small></span>
        </div>

      </div>



      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
            <a href="">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>


        <li class="header">INVENTORY</li>
        <li>
            <a href="{{ route('kategori.index') }}">
                <i class="fa fa-cube"></i> <span>Kategori</span>
            </a>
        </li>
        <li>
            <a href="{{ route('barang.index') }}">
                <i class="fa fa-cube"></i> <span>Barang</span>
            </a>
        </li>
        <li>
            <a href="{{ route('po.index') }}">
                <i class="fa fa-cubes"></i> <span>PO Barang</span>
            </a>
        </li>
        <li>
            <a href="{{ route('barangmasuk.index') }}">
                <i class="fa fa-cart-arrow-down"></i> <span>Barang Masuk</span>
            </a>
        </li>
        <li>
            <a href="{{ route('barangkeluar.index') }}">
                <i class="fa fa-cart-arrow-down"></i> <span>Barang Keluar</span>
            </a>
        </li>
        {{-- <li>
            <a href="{{ route('supplier.index') }}">
                <i class="fa fa-truck"></i> <span>Supplier</span>
            </a>
        </li> --}}
        <li class="header">LAB</li>
        <li>
            <a href="{{ route('oil') }}">
                <i class="fa fa-money"></i> <span>Condemning Limit</span>
            </a>
        </li>
        {{-- <li>
            <a href="{{ route('pembelian.index') }}">
                <i class="fa fa-download"></i> <span>Pembelian</span>
            </a>
        </li>
        <li>
            <a href="{{ route('penjualan.index') }}">
                <i class="fa fa-upload"></i> <span>Penjualan</span>
            </a>
        </li>
        <li>
            <a href="{{ route('transaksi.index') }}">
                <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Aktif</span>
            </a>
        </li>
        <li>
            <a href="{{ route('transaksi.baru') }}">
                <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Baru</span>
            </a>
        </li> --}}
        <li class="header">REPORT</li>
        <li>
            <a href="">
                <i class="fa fa-download"></i> <span>Rekap Barang Masuk</span>
            </a>
        </li>
        <li>
            <a href="">
                <i class="fa fa-upload"></i> <span>Rekap Barang Keluarr</span>
            </a>
        </li>
        {{-- <li class="header">SYSTEM</li>
        <li>
            <a href="{{ route('user.index') }}">
                <i class="fa fa-users"></i> <span>User</span>
            </a>
        </li>
        <li>
            <a href="{{ route("setting.index") }}">
                <i class="fa fa-cogs"></i> <span>Pengaturan</span>
            </a>
        </li>
        @else
        <li>
            <a href="{{ route('transaksi.index') }}">
                <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Aktif</span>
            </a>
        </li>
        <li>
            <a href="{{ route('transaksi.baru') }}">
                <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Baru</span>
            </a>
        </li> --}}

    </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

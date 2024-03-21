<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-car"></i> <!-- Icon mobil -->
    </div>
    <div class="sidebar-brand-text mx-3">Aplikasi Persewaan Mobil</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-car"></i>
      <span>Dashboard</span>
    </a>
  </li>
  @unless(Auth::user()->role == 'penyewa')
  <li class="nav-item">
    <a class="nav-link" href="/penggunas">
        <i class="fas fa-fw fa-book"></i>
        <span>Data Pengguna</span>
    </a>
  </li>
  @endunless
<!-- Dropdown Manajemen Mobil -->
@unless(Auth::user()->role == 'penyewa')
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-car"></i>
        <span>Manajemen Mobil</span>
    </a>
    @if(Auth::user()->role == 'admin')
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/mobils">Data Tambah Mobil</a>
        <a class="dropdown-item" href="/data">Daftar Mobil yang Tersedia</a>
    </div>
    </li> <!-- Close the dropdown menu -->
    @endif
</li> <!-- Close the dropdown -->
@endunless

@if(Auth::user()->role == 'penyewa')
<li class="nav-item">
    <a class="nav-link" href="/data">
        <i class="fas fa-fw fa-car"></i>
        <span>Daftar Mobil yang Tersedia</span>
    </a>
</li>
@endif



  
  <!-- Dropdown Transaksi -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTransaksi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
      <i class="fas fa-fw fa-exchange-alt"></i> <!-- Icon transaksi -->
      <span>Transaksi</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownTransaksi">
      @if(Auth::user()->role == 'admin')
        <a class="dropdown-item" href="{{ route('transaksis.index') }}">Data Peminjaman Mobil</a>
        <a class="dropdown-item" href="{{ route('pengembalians.index') }}">Data Pengembalian Mobil</a>
        <a class="dropdown-item" href="/list">Data Riwayat Peminjaman</a>
        <a class="dropdown-item" href="/kembali">Data Riwayat Pengembalian</a>
        <a class="dropdown-item" href="/pembayaran">Pembayaran</a>
      @elseif(Auth::user()->role == 'penyewa')
        <a class="dropdown-item" href="/list">Data Riwayat Peminjaman</a>
        <a class="dropdown-item" href="/kembali">Data Riwayat Pengembalian</a>
        <a class="dropdown-item" href="/pembayaran">Pembayaran</a>
      @endif
    </div>
</li>

  
  <!-- Profile -->
  <li class="nav-item">
    <a class="nav-link" href="/profile">
      <i class="fas fa-fw fa-user-alt"></i>
      <span>Profile</span>
    </a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
</ul>


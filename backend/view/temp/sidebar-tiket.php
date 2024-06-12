<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="<?= $_SERVER['PHP_SELF'] . '?u=home'; ?>">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#pemesanan-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-ticket"></i><span>Pemesanan</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="pemesanan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=pesan_tiket'; ?>">
          <i class="bi bi-circle"></i><span>Pesan Tiket</span>
        </a>
      </li>
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=riwayat_pemesanan'; ?>">
          <i class="bi bi-circle"></i><span>Riwayat Pemesanan</span>
        </a>
      </li>
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=konfirmasi_pembayaran'; ?>">
          <i class="bi bi-circle"></i><span>Konfirmasi Pembayaran</span>
        </a>
      </li>
    </ul>
  </li><!-- End Pemesanan Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#destinasi-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-map"></i><span>Destinasi</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="destinasi-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=daftar_destinasi'; ?>">
          <i class="bi bi-circle"></i><span>Daftar Destinasi</span>
        </a>
      </li>
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=favorit'; ?>">
          <i class="bi bi-circle"></i><span>Favorit</span>
        </a>
      </li>
    </ul>
  </li><!-- End Destinasi Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#promo-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-tags"></i><span>Promo</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="promo-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=daftar_promo'; ?>">
          <i class="bi bi-circle"></i><span>Daftar Promo</span>
        </a>
      </li>
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=kode_promo'; ?>">
          <i class="bi bi-circle"></i><span>Kode Promo</span>
        </a>
      </li>
    </ul>
  </li><!-- End Promo Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#pengguna-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-person"></i><span>Pengguna</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="pengguna-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=profil'; ?>">
          <i class="bi bi-circle"></i><span>Profil</span>
        </a>
      </li>
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=ubah_password'; ?>">
          <i class="bi bi-circle"></i><span>Ubah Password</span>
        </a>
      </li>
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=logout'; ?>">
          <i class="bi bi-circle"></i><span>Logout</span>
        </a>
      </li>
    </ul>
  </li><!-- End Pengguna Nav -->

</ul>

</aside>

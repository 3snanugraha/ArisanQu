<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="<?= $_SERVER['PHP_SELF'] . '?u=home'; ?>">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#pengaduan-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-exclamation-circle"></i><span>Pengaduan</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="pengaduan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=lihat_pengaduan'; ?>">
          <i class="bi bi-circle"></i><span>Lihat Pengaduan</span>
        </a>
      </li>
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=tambah_pengaduan'; ?>">
          <i class="bi bi-circle"></i><span>Tambah Pengaduan</span>
        </a>
      </li>
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=kelola_pengaduan'; ?>">
          <i class="bi bi-circle"></i><span>Kelola Pengaduan</span>
        </a>
      </li>
    </ul>
  </li><!-- End Pengaduan Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#pengguna-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-people"></i><span>Pengguna</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="pengguna-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=lihat_pengguna'; ?>">
          <i class="bi bi-circle"></i><span>Lihat Pengguna</span>
        </a>
      </li>
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=tambah_pengguna'; ?>">
          <i class="bi bi-circle"></i><span>Tambah Pengguna</span>
        </a>
      </li>
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=kelola_pengguna'; ?>">
          <i class="bi bi-circle"></i><span>Kelola Pengguna</span>
        </a>
      </li>
    </ul>
  </li><!-- End Pengguna Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#laporan-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-bar-chart"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="laporan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=laporan_harian'; ?>">
          <i class="bi bi-circle"></i><span>Laporan Harian</span>
        </a>
      </li>
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=laporan_bulanan'; ?>">
          <i class="bi bi-circle"></i><span>Laporan Bulanan</span>
        </a>
      </li>
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=laporan_tahunan'; ?>">
          <i class="bi bi-circle"></i><span>Laporan Tahunan</span>
        </a>
      </li>
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=cetak_laporan'; ?>">
          <i class="bi bi-circle"></i><span>Cetak Laporan</span>
        </a>
      </li>
    </ul>
  </li><!-- End Laporan Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#berita-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-newspaper"></i><span>Berita</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="berita-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=lihat_berita'; ?>">
          <i class="bi bi-circle"></i><span>Lihat Berita</span>
        </a>
      </li>
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=tambah_berita'; ?>">
          <i class="bi bi-circle"></i><span>Tambah Berita</span>
        </a>
      </li>
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=kelola_berita'; ?>">
          <i class="bi bi-circle"></i><span>Kelola Berita</span>
        </a>
      </li>
    </ul>
  </li><!-- End Berita Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#aktivitas-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-clock-history"></i><span>Aktivitas</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="aktivitas-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=lihat_aktivitas'; ?>">
          <i class="bi bi-circle"></i><span>Lihat Aktivitas</span>
        </a>
      </li>
    </ul>
  </li><!-- End Aktivitas Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#profil-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-person-circle"></i><span>Profil</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="profil-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=lihat_profil'; ?>">
          <i class="bi bi-circle"></i><span>Lihat Profil</span>
        </a>
      </li>
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=edit_profil'; ?>">
          <i class="bi bi-circle"></i><span>Edit Profil</span>
        </a>
      </li>
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=ganti_password'; ?>">
          <i class="bi bi-circle"></i><span>Ganti Password</span>
        </a>
      </li>
    </ul>
  </li><!-- End Profil Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#pengaturan-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-gear"></i><span>Pengaturan</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="pengaturan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=pengaturan_umum'; ?>">
          <i class="bi bi-circle"></i><span>Pengaturan Umum</span>
        </a>
      </li>
      <li>
        <a href="<?= $_SERVER['PHP_SELF'] . '?u=hak_akses'; ?>">
          <i class="bi bi-circle"></i><span>Hak Akses</span>
        </a>
      </li>
    </ul>
  </li><!-- End Pengaturan Nav -->

</ul>

</aside>

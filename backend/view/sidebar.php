<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="<?= $_SERVER['PHP_SELF'] . '?u=home'; ?>">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#arisan-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-people"></i><span>Arisan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="arisan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= $_SERVER['PHP_SELF'] . '?u=data-kelompok'; ?>">
            <i class="bi bi-circle"></i><span>Data Kelompok</span>
          </a>
        </li>
        <li>
          <a href="<?= $_SERVER['PHP_SELF'] . '?u=jadwal_arisan'; ?>">
            <i class="bi bi-circle"></i><span>Jadwal Arisan</span>
          </a>
        </li>
        <li>
          <a href="<?= $_SERVER['PHP_SELF'] . '?u=hasil_undian'; ?>">
            <i class="bi bi-circle"></i><span>Hasil Undian</span>
          </a>
        </li>
        <li>
          <a href="<?= $_SERVER['PHP_SELF'] . '?u=data-peserta'; ?>">
            <i class="bi bi-circle"></i><span>Data Peserta</span>
          </a>
        </li>
        <li>
          <a href="<?= $_SERVER['PHP_SELF'] . '?u=data-pengguna'; ?>">
            <i class="bi bi-circle"></i><span>Data Pengguna</span>
          </a>
        </li>
      </ul>
    </li><!-- End Arisan Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#transaksi-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-receipt"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="transaksi-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= $_SERVER['PHP_SELF'] . '?u=pembayaran'; ?>">
            <i class="bi bi-circle"></i><span>Pembayaran</span>
          </a>
        </li>
        <li>
          <a href="<?= $_SERVER['PHP_SELF'] . '?u=riwayat_transaksi'; ?>">
            <i class="bi bi-circle"></i><span>Riwayat Transaksi</span>
          </a>
        </li>
      </ul>
    </li>
    <!-- End Transaksi Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#akun-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-circle"></i><span>Akun</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="akun-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= $_SERVER['PHP_SELF'] . '?u=profil'; ?>">
            <i class="bi bi-circle"></i><span>Profil</span>
          </a>
        </li>
        <li>
          <a href="<?= $_SERVER['PHP_SELF'] . '?u=pengaturan'; ?>">
            <i class="bi bi-circle"></i><span>Pengaturan</span>
          </a>
        </li>
        <li>
          <a href="<?= $_SERVER['PHP_SELF'] . '?u=logout'; ?>">
            <i class="bi bi-circle"></i><span>Logout</span>
          </a>
        </li>
      </ul>
    </li><!-- End Akun Nav -->

  </ul>

</aside>

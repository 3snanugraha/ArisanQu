<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Transaksi Pembayaran - ArisanQu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../view/assets/img/favicon.png" rel="icon">
  <link href="../view/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i|Nunito:300,300i,400,400i|Poppins:300,300i,400,400i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../view/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../view/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../view/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../view/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../view/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../view/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../view/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../view/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <?php include "header.php"; ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include "sidebar.php"; ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Transaksi Pembayaran</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Transaksi Pembayaran</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card rounded-4">
            <div class="card-body">
              <h5 class="card-title">Transaksi Pembayaran</h5>
              <p>Gunakan formulir di bawah ini untuk mencatat pembayaran dari anggota Arisan.</p>
              <a href="#" data-bs-toggle="modal" data-bs-target="#tambah-transaksi" class="btn btn-brand-primary mt-2 mb-4 rounded-pill"><i class="bi bi-plus-circle"></i><span> Tambah Transaksi</span></a>
              <a href="#" onclick="location.reload();" class="btn btn-secondary mt-2 mb-4 rounded-pill"><i class="bi bi-arrow-clockwise"></i><span> Refresh Data </span></a>

            <!-- Table with stripped rows -->
<div class="table-responsive">
  <table class="table datatable">
    <thead>
      <tr>
        <th scope="col">#No</th>
        <th scope="col">ID Transaksi</th>
        <th scope="col">Nama Anggota</th>
        <th scope="col">Nama Kelompok</th>
        <th scope="col">Jumlah Pembayaran</th>
        <th scope="col">Tanggal Pembayaran</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $transaksiList = getTransaksiLengkap();
      $no = 1;
      foreach ($transaksiList as $transaksi) {
        echo "<tr>
                <th scope='row'><b>{$no}</b></th>
                <td>{$transaksi['transaksi_id']}</td>
                <td>{$transaksi['nama_anggota']}</td>
                <td>{$transaksi['nama_kelompok']}</td>
                <td>Rp " . number_format($transaksi['jumlah'], 0, ',', '.') . "</td>
                <td>{$transaksi['tanggal']}</td>
                <td>
                  <a href='#' class='btn btn-sm btn-outline-warning rounded-pill mt-1' data-bs-toggle='modal' data-bs-target='#edit-transaksi-{$transaksi['transaksi_id']}'><i class='bi bi-pencil-square'></i></a>
                  <a onclick='return confirm(\"Apakah anda yakin akan menghapus data ini?\")' href='#' class='btn btn-sm btn-outline-danger rounded-pill mt-1'><i class='bi bi-trash'></i></a>

                  <!-- Modal Edit Transaksi -->
                  <div class='modal fade' id='edit-transaksi-{$transaksi['transaksi_id']}' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='editModalLabel-{$transaksi['transaksi_id']}' aria-hidden='true'>
                    <div class='modal-dialog modal-lg'>
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <h5 class='modal-title' id='editModalLabel-{$transaksi['transaksi_id']}'>Edit Transaksi</h5>
                          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                          <form method='post'>
                            <div class='d-flex justify-content-center'>
                              <img class='img-fluid' width='120px' src='../view/assets/img/transaction.png' rel='icon'>
                            </div>

                            <h6 class='text-center'>Silahkan isi data dengan lengkap di bawah ini. </h6>
                            <hr>

                            <input type='hidden' class='form-control rounded-pill' name='transaksi_id' value='{$transaksi['transaksi_id']}' readonly>

                            <div class='row mt-2'>
                              <div class='col-3'>
                                <label for='edit_nama_anggota'>Nama Anggota</label>
                              </div>
                              <div class='col-9'>
                                <input type='text' class='form-control rounded-pill' name='nama_anggota' id='edit_nama_anggota' value='{$transaksi['nama_anggota']}' required>
                              </div>
                            </div>

                            <div class='row mt-2'>
                              <div class='col-3'>
                                <label for='edit_nama_kelompok'>Nama Kelompok</label>
                              </div>
                              <div class='col-9'>
                                <input type='text' class='form-control rounded-pill' name='nama_kelompok' id='edit_nama_kelompok' value='{$transaksi['nama_kelompok']}' required>
                              </div>
                            </div>

                            <div class='row mt-2'>
                              <div class='col-3'>
                                <label for='edit_jumlah'>Jumlah Pembayaran</label>
                              </div>
                              <div class='col-9'>
                                <input type='number' class='form-control rounded-pill' name='jumlah' id='edit_jumlah' value='{$transaksi['jumlah']}' required>
                              </div>
                            </div>

                            <div class='row mt-2'>
                              <div class='col-3'>
                                <label for='edit_tanggal'>Tanggal Pembayaran</label>
                              </div>
                              <div class='col-9'>
                                <input type='date' class='form-control rounded-pill' name='tanggal' id='edit_tanggal' value='{$transaksi['tanggal']}' required>
                              </div>
                            </div>

                            <hr>
                            <div class='mt-4 text-center'>
                              <button class='btn btn-brand-primary rounded-pill' type='submit' name='edit-transaksi'>Simpan</button>
                              <button type='button' class='btn btn-secondary rounded-pill' data-bs-dismiss='modal'>Batalkan</button>
                            </div>

                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Modal Edit Transaksi -->
                </td>
              </tr>";
        $no++;
      }
      ?>
    </tbody>
  </table>
</div>
<!-- End Table with stripped rows -->

            </div>
          </div>
        </div>
      </div>
    </section>


  </main><!-- End #main -->

  
  <?php include "modals.php"; ?>

  <!-- Vendor JS Files -->
  <script src="../view/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../view/assets/vendor/simple-datatables/simple-datatables.js"></script>

  <!-- Template Main JS File -->
  <script src="../view/assets/js/main.js"></script>

</body>

</html>

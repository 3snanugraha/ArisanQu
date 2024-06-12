<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Customers - Inventory MRP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../view/assets/img/favicon.png" rel="icon">
  <link href="../view/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
  <?php
  include "header.php";
  ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= --> 
  <?php
  include "sidebar.php";
  ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Pelanggan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Data Pelanggan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">

      <div class="col-lg-12">

        <div class="card rounded-4">
          <div class="card-body">
            <h5 class="card-title">Data Pelanggan</h5>
            <p>Berikut adalah semua data pelanggan gunakan <code>.Search </code> untuk mencari atau memfilter data. gunakan kolom <code>.Aksi </code> untuk mengolah data.</p>
            <a href="#" data-bs-toggle="modal" data-bs-target="#tambah-data-pelanggan" class="btn btn-outline-primary mt-2 mb-4 rounded-pill"><i class="bi bi-plus-circle"></i><span> Tambahkan data </span></a>
            <a href="#" onclick="location.reload();" class="btn btn-outline-warning mt-2 mb-4 rounded-pill"><i class="bi bi-arrow-clockwise"></i><span> Refresh data </span></a>

            <!-- Table with stripped rows -->
            <div class="table-responsive">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#No</th>
                    <th scope="col">ID Pelanggan</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Alamat Pelanggan</th>
                    <th scope="col">Telepon Pelanggan</th>
                    <th scope="col">Tanggal Dibuat</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><b>&nbsp;&nbsp;&nbsp;&nbsp;1</b></th>
                    <td>
                      CUST001
                    </td>
                    <td>
                      John Doe
                    </td>               
                    <td>
                      123 Main St
                    </td>  
                    <td>
                      08123456789
                    </td>
                    <td>2022-06-24</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-outline-warning rounded-pill mt-1"><i class="bi bi-pencil-square"></i></a>
                      <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="/your-path/Router.php?u=del-data-pelanggan&id=CUST001" class="btn btn-sm btn-outline-danger rounded-pill mt-1"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                  <!-- Tambahkan data pelanggan lainnya di sini -->
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

  <!-- ======= Footer ======= -->
  <?php
  include "footer.php";
  ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../view/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../view/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../view/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../view/assets/vendor/echarts/echarts.min.js"></script>
  <script src="../view/assets/vendor/quill/quill.min.js"></script>
  <script src="../view/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../view/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../view/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../view/assets/js/main.js"></script>

</body>

<?php include "modals.php"; ?>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Inventory MRP</title>
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
    <h1 class="brand-primary">Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Kolom Kiri -->
      <div class="col-lg-8">
        <div class="row">

          <!-- Kartu Anggota -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card member-card rounded-5">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                  <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                  <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Anggota Baru <span>| Hari Ini</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-warning">
                    <i class="bi bi-person"></i>
                  </div>
                  <div class="ps-3">
                    <h6>5</h6>
                    <span class="text-success small pt-1 fw-bold">10%</span> <span class="text-muted small pt-2 ps-1">peningkatan</span>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- Akhir Kartu Anggota -->

          <!-- Kartu Kelompok -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card group-card rounded-5">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                  <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                  <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Kelompok Baru <span>| Bulan Ini</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-success text-light">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>3</h6>
                    <span class="text-danger small pt-1 fw-bold">5%</span> <span class="text-muted small pt-2 ps-1">penurunan</span>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- Akhir Kartu Kelompok -->

          <!-- Kartu Arisan -->
          <div class="col-xxl-4 col-xl-12">
            <div class="card info-card arisan-card rounded-5">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                  <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                  <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Arisan Berlangsung <span>| Tahun Ini</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-info text-light">
                    <i class="bi bi-calendar-check"></i>
                  </div>
                  <div class="ps-3">
                    <h6>10</h6>
                    <span class="text-success small pt-1 fw-bold">20%</span> <span class="text-muted small pt-2 ps-1">peningkatan</span>
                  </div>
                </div>

              </div>
            </div>
          </div><!-- Akhir Kartu Arisan -->

          <!-- Laporan -->
          <div class="col-12">
            <div class="card rounded-5">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                  <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                  <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Laporan <span>/Hari Ini</span></h5>

                <!-- Grafik Garis -->
                <div id="reportsChart"></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#reportsChart"), {
                      series: [{
                        name: 'Anggota Baru',
                        data: [5, 7, 8, 12, 6, 10, 14],
                      }, {
                        name: 'Kelompok Baru',
                        data: [2, 4, 1, 3, 2, 3, 5]
                      }, {
                        name: 'Arisan Berlangsung',
                        data: [8, 10, 12, 15, 14, 16, 18]
                      }],
                      chart: {
                        height: 350,
                        type: 'area',
                        toolbar: {
                          show: false
                        },
                      },
                      markers: {
                        size: 4
                      },
                      colors: ['#4154f1', '#2eca6a', '#ff771d'],
                      fill: {
                        type: "gradient",
                        gradient: {
                          shadeIntensity: 1,
                          opacityFrom: 0.3,
                          opacityTo: 0.4,
                          stops: [0, 90, 100]
                        }
                      },
                      dataLabels: {
                        enabled: false
                      },
                      stroke: {
                        curve: 'smooth',
                        width: 2
                      },
                      xaxis: {
                        type: 'datetime',
                        categories: ["2023-01-01T00:00:00.000Z", "2023-02-01T00:00:00.000Z", "2023-03-01T00:00:00.000Z", "2023-04-01T00:00:00.000Z", "2023-05-01T00:00:00.000Z", "2023-06-01T00:00:00.000Z", "2023-07-01T00:00:00.000Z"]
                      },
                      tooltip: {
                        x: {
                          format: 'dd/MM/yy HH:mm'
                        },
                      }
                    }).render();
                  });
                </script>
                <!-- Akhir Grafik Garis -->

              </div>

            </div>
          </div><!-- Akhir Laporan -->
          
          
          </div>
        </div><!-- Akhir Kolom Kiri -->
    
      
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

</html>
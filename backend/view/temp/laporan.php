<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Aplikasi Pengaduan Bullying</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../view/assets/img/favicon.png" rel="icon">
  <link href="../view/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

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
  include "sidebar-laporan.php";
  ?>
  <!-- End Sidebar -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
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

            <!-- Kartu Total Pengaduan -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card total-complaints-card">

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
                  <h5 class="card-title">Total Pengaduan <span>| Hari Ini</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-warning">
                      <i class="bi bi-exclamation-triangle"></i>
                    </div>
                    <div class="ps-3">
                      <h6>50</h6>
                      <span class="text-success small pt-1 fw-bold">5%</span> <span class="text-muted small pt-2 ps-1">peningkatan</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- Akhir Kartu Total Pengaduan -->

            <!-- Kartu Pengaduan Ditangani -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card handled-complaints-card">

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
                  <h5 class="card-title">Pengaduan Ditangani <span>| Bulan Ini</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-success text-light">
                      <i class="bi bi-check-circle"></i>
                    </div>
                    <div class="ps-3">
                      <h6>30</h6>
                      <span class="text-danger small pt-1 fw-bold">2%</span> <span class="text-muted small pt-2 ps-1">penurunan</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- Akhir Kartu Pengaduan Ditangani -->

            <!-- Kartu Pengaduan Belum Ditangani -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card pending-complaints-card">

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
                  <h5 class="card-title">Pengaduan Belum Ditangani <span>| Tahun Ini</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-info text-light">
                      <i class="bi bi-clock"></i>
                    </div>
                    <div class="ps-3">
                      <h6>20</h6>
                      <span class="text-success small pt-1 fw-bold">15%</span> <span class="text-muted small pt-2 ps-1">peningkatan</span>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- Akhir Kartu Pengaduan Belum Ditangani -->

            <!-- Laporan -->
            <div class="col-12">
              <div class="card">

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
                  <h5 class="card-title">Laporan <span>| Hari Ini</span></h5>

                  <!-- Grafik Garis -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Total Pengaduan',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Pengaduan Ditangani',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Pengaduan Belum Ditangani',
                          data: [15, 11, 32, 18, 9, 24, 11]
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
                          categories: ["2022-09-19T00:00:00.000Z", "2022-09-20T00:00:00.000Z", "2022-09-21T00:00:00.000Z", "2022-09-22T00:00:00.000Z", "2022-09-23T00:00:00.000Z", "2022-09-24T00:00:00.000Z", "2022-09-25T00:00:00.000Z"]
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

        <!-- Kolom Kanan -->
        <div class="col-lg-4">

          <!-- Pengguna Terbaru -->
          <div class="card">
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
              <h5 class="card-title">Pengguna Terbaru <span>| Hari Ini</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">32 menit yang lalu</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Pengguna <a href="#" class="fw-bold text-dark">Rahmat Santoso</a> baru saja mendaftar.
                  </div>
                </div><!-- Akhir Item Aktivitas -->

                <div class="activity-item d-flex">
                  <div class="activite-label">1 jam yang lalu</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    Pengguna <a href="#" class="fw-bold text-dark">Indah Permata</a> baru saja mengirim pengaduan.
                  </div>
                </div><!-- Akhir Item Aktivitas -->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 jam yang lalu</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    Pengguna <a href="#" class="fw-bold text-dark">Bagas Wijaya</a> baru saja mengupdate profil.
                  </div>
                </div><!-- Akhir Item Aktivitas -->

                <div class="activity-item d-flex">
                  <div class="activite-label">4 jam yang lalu</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    Pengguna <a href="#" class="fw-bold text-dark">Dina Anggraini</a> baru saja mengirim pengaduan.
                  </div>
                </div><!-- Akhir Item Aktivitas -->

              </div>

            </div>
          </div><!-- Akhir Pengguna Terbaru -->

          <!-- Berita Terbaru -->
          <div class="card">
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
              <h5 class="card-title">Berita Terbaru <span>| Bulan Ini</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="../view/assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Berita 1</a></h4>
                  <p>Deskripsi singkat berita 1.</p>
                </div>

                <div class="post-item clearfix">
                  <img src="../view/assets/img/news-2.jpg" alt="">
                  <h4><a href="#">Berita 2</a></h4>
                  <p>Deskripsi singkat berita 2.</p>
                </div>

                <div class="post-item clearfix">
                  <img src="../view/assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Berita 3</a></h4>
                  <p>Deskripsi singkat berita 3.</p>
                </div>

                <div class="post-item clearfix">
                  <img src="../view/assets/img/news-4.jpg" alt="">
                  <h4><a href="#">Berita 4</a></h4>
                  <p>Deskripsi singkat berita 4.</p>
                </div>

              </div><!-- Akhir Berita -->

            </div>
          </div><!-- Akhir Berita Terbaru -->

        </div><!-- Akhir Kolom Kanan -->

      </div>
    </section>

  </main><!-- Akhir #main -->

  <!-- ======= Footer ======= -->
  <?php
  include "footer.php";
  ?>
  <!-- Akhir Footer -->

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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tentang Saya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyPortfolio
  * Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Navbar ======= -->
  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
      <div class="row align-items-start">
        <div class="col-md-2">
          <ul class="custom-menu">
            <li class="active"><a href="/">Beranda</a></li>
            <li><a href="/#about">Tentang Saya</a></li>
            <li><a href="/#works">Sertifikat</a></li>
            <li><a href="/#contact">Kontak</a></li>
          </ul>
        </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">MyPortfolio.</a>
      <a href="#" class="burger" data-bs-toggle="collapse" data-bs-target="#main-navbar">
        <span></span>
      </a>
    </div>
  </nav>

  <main id="main">

    <section class="section pb-5">
      <div class="container">
        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">

            <h2>Tentang Saya</h2>
            <p class="mb-0">Ketahui saya lebih lanjut</p>
          </div>

        </div>

        <div class="row">
          <div class="col-md-4 ml-auto order-2" data-aos="fade-up">
            <h3 class="h3 mb-4">Skil</h3>
            <ul class="list-unstyled">
              <li class="mb-3">
                <div class="d-flex mb-1">
                  <strong>Komunikasi</strong>
                  <span class="ml-auto">80%</span>
                </div>
                <div class="progress custom-progress">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </li>
              <li class="mb-3">
                <div class="d-flex mb-1">
                  <strong>Organisasi</strong>
                  <span class="ml-auto">80%</span>
                </div>
                <div class="progress custom-progress">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </li>
              <li class="mb-3">
                <div class="d-flex mb-1">
                  <strong>Manajemen Waktu</strong>
                  <span class="ml-auto">90%</span>
                </div>
                <div class="progress custom-progress">
                  <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-7 mb-5 mb-md-0" data-aos="fade-up">
            <p><img src="assets/img/img_g.jpg" alt="Image" class="img-fluid"></p>
            <div class="col-md-4 ml-auto order-1" data-aos="fade-up">
              <ul class="list-unstyled">
                <li class="mb-3">
                  <strong class="d-block mb-1">Nama </strong>
                  <span><?= esc($about['nama']) ?></span>
                </li>
                <li class="mb-3">
                  <strong class="d-block mb-1">Tempat Tanggal Lahir</strong>
                  <span><?= esc($about['ttl']) ?></span>
                </li>
                <li class="mb-3">
                  <strong class="d-block mb-1">Umur</strong>
                  <span><?= esc($about['umur']) ?></span>
                </li>
                <li class="mb-3">
                  <strong class="d-block mb-1">Tempat Tinggal</strong>
                  <span><?= esc($about['tinggal']) ?></span>
                </li>
              </ul>
            </div>
            <p><a href="https://instagram.com/dindaputriik" class="readmore">Find me out!</a></p>
          </div>

        </div>

      </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 social text-md-end">
          <a href="#"><span class="bi bi-twitter"></span></a>
          <a href="#"><span class="bi bi-github"></span></a>
          <a href="#"><span class="bi bi-instagram"></span></a>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
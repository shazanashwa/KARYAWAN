<?php
session_start();
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistem Informasi Karyawan - Home</title>
  <link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      background-image: url('img/background.jpg'); 
      background-size: cover; 
      background-repeat: no-repeat; 
      background-attachment: fixed; 
      font-family: 'Roboto', sans-serif;
    }

    .animated {
      transition: all 0.3s ease-in-out;
    }

    .animated:hover {
      transform: scale(1.05);
    }

    .hero-banner__content h1 {
      font-size: 3rem;
      font-weight: bold;
      color: #2c3e50;
      animation: fadeInUp 1s ease-in-out;
    }

    .hero-banner__content p {
      font-size: 1.5rem;
      color: #16a085;
      animation: fadeInUp 1.5s ease-in-out;
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="#login" rel="page-scroll">Login</a></li> 
              <li class="nav-item"><a class="nav-link" href="#kontak" rel="page-scroll">Kontak</a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <main class="side-main">
    <!--================ Hero Banner start =================-->      
    <section class="hero-banner mb-30px">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="hero-banner__img animated">
              <img class="img-fluid" src="img/logokaryawan.png" alt="Logo Karyawan">
            </div>
          </div>
          <div class="col-lg-5 pt-5">
            <div class="hero-banner__content">
              <h1>Selamat Datang Di PT. Bumi Siak Pusako</h1>
              <p>Memancang Tapak, Mengangkat Marwah</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero Banner end =================-->

    <!--================ Feature section start =================-->      
    <section class="section-margin">
      <div class="container">
        <div class="section-intro pb-85px text-center" id="kontak">
          <h2 class="section-intro__title">Kontak</h2>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="fab fa-facebook-f"></i>
                </span>
                <h3 class="card-feature__title">Facebook</h3>
                <p class="card-feature__subtitle">Nashwa Zalti</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="fab fa-whatsapp"></i>
                </span>
                <h3 class="card-feature__title">Whatsapp</h3>
                <p class="card-feature__subtitle">081277179014</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="fab fa-instagram"></i>
                </span>
                <h3 class="card-feature__title">Instagram</h3>
                <p class="card-feature__subtitle">shazanashwazalti</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Feature section end =================-->      

    <!-- Login Feature Section Start -->
    <section class="section-margin" id="login">
      <div class="row content">
        <div class="col-lg-12 text-center zero-panel">
          <div class="col-lg-12 zero-panel-content">
            <h1>LOGIN</h1>
          </div>
          <br>
          <ul class="list-inline" id="chart-skill">
            <li><a href="login.php" target="_blank"><button class="btn btn-warning" style="font-size: 20px;">Login Admin</button></a></li>
            <br>
            <li><a href="karyawan/login_karyawan.php" target="_blank"><button class="btn btn-primary" style="font-size: 20px;">Login Karyawan</button></a></li>
          </ul>
        </div>
      </div>
    </section>
    <!-- Login Feature Section End -->

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
    <div class="container">
      <div class="row">
        <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget"></div>
        <div class="col-xl-4 col-md-8 mb-4 mb-xl-0 single-footer-widget">
          <div class="info"></div>
        </div>
      </div>
      <div class="footer-bottom row align-items-center text-center text-lg-left">
        <p class="footer-text m-0 col-lg-8 col-md-12">
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Bayu Tutor</a>
        </p>
        <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
          <a href="https://www.facebook.com/zibran.vitadiyatama.7/" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="https://github.com/ZibranovSky" target="_blank"><i class="fab fa-github"></i></a>
          <a href="https://www.linkedin.com/in/muhammad-zibran-fitadiyatama-6550801a9/" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- ================ End footer Area ================= -->

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
</body>
</html>

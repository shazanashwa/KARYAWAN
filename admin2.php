<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Beranda</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <style>
        .stat-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            text-align: center;
            background-color: #f9f9f9;
        }
        .stat-card h3 {
            margin: 0;
            font-size: 2em;
        }
        .stat-card p {
            margin: 0;
            font-size: 1.2em;
            color: #777;
        }
        .chart-container {
            position: relative;
            height: 400px;
            margin-top: 30px;
        }
        .footer {
            background: #343a40;
            color: white;
            padding: 5px 0;
            position: relative;
        }

        .footer .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer p {
            margin: 0;
        }

        .footer .social-icons {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .footer .social-icons li {
            margin: 0 5px;
        }

        .footer .social-icons li a {
            color: white;
            text-decoration: none;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        .footer .social-icons li a:hover {
            color: #B31312;
        }
    </style>
</head>

<body class="animsition">
    <?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location: index.php");
    } else {
        $username = $_SESSION['username'];  
    }
    ?>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="" href="index.html">
                            <!-- Logo can be added here -->
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="admin2.php">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                        </li>
                        <li>
                            <a href="datakaryawan.php">
                                <i class="fas fa-chart-bar"></i>Data Karyawan</a>
                        </li>
                        <li>
                            <a href="datauser.php">
                                <i class="fas fa-table"></i>Data User</a>
                        </li>
                        <li>
                            <a href="datajabatan.php">
                                <i class="far fa-check-square"></i>Data Jabatan</a>
                        </li>
                        <li>
                            <a href="datakarir.php">
                                <i class="far fa-suitcase"></i>Data Karir</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h2>Admin</h2>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                        </li>
                        <li>
                            <a href="datakaryawan.php">
                                <i class="fas fa-chart-bar"></i>Data Karyawan</a>
                        </li>
                        <li>
                            <a href="datauser.php">
                                <i class="fas fa-table"></i>Data User</a>
                        </li>
                        <li>
                            <a href="datajabatan.php">
                                <i class="far fa-check-square"></i>Data Jabatan</a>
                        </li>
                        <li>
                            <a href="datakarir.php">
                                <i class="far fa-suitcase"></i>Data Karir</a>
                        </li>
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <h1>PT. BSP</h1>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <!-- Statistic Cards Section -->
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="stat-card">
                                    <h3>242</h3>
                                    <p>Total Data Pegawai Tetap</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="stat-card">
                                    <h3>27</h3>
                                    <p>Total Data Pegawai PWT</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="stat-card">
                                    <h3>3</h3>
                                    <p>Total Pegawai Pensiun</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="stat-card">
                                    <h3>49</h3>
                                    <p>Total Pegawai Cuti</p>
                                </div>
                            </div>
                        </div>

                        <!-- Chart Section -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2>Selamat Datang, <?php echo $username; ?>!</h2>
                                        <p>Ini adalah Diagram HR Competency Development Activities</p>

                                        <!-- Bar Chart -->
                                        <div class="chart-container">
                                            <canvas id="barChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

    <!-- Custom JS for Chart -->
    <script>
        var ctx = document.getElementById('barChart').getContext('2d');
        var barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Workshops and Seminars', 'In-House Training', 'Training', 'Sertifikasi'],
                datasets: [{
                    label: 'Jumlah',
                    data: [104, 1174, 20, 94],
                    backgroundColor: [
                        '#4D869C', '#7AB2B2', '#ACE2E1', '#86B6F6', '#B4D4FF' 
                    ],
                    borderColor: [
                        '#4D869C', '#7AB2B2', '#ACE2E1', '#86B6F6', '#B4D4FF'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            boxWidth: 20,
                            padding: 15,
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.dataset.label + ': ' + context.raw;
                            }
                        }
                    }
                },
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
</body>
<footer class="footer"> 
  <div class="container"> 
    <p>&copy; 2024 PT. Bumi Siak Pusako</p> 
    <ul class="social-icons">
      <li><a href="https://www.instagram.com/bumisiakpusako?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fab fa-instagram"></i></a></li>
    </ul>
  </div> 
</footer>
</html>

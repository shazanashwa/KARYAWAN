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
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap'); 
 
.header_area { 
  position: absolute; 
  width: 100%; 
  top: 0; 
  z-index: 1000; 
  background: transparent; 
  justify-content: flex-start;
} 
  </style> 
     
<style> 
    body { 
      background-image: url('img/background.jpg');  
      background-size: cover;  
      background-repeat: no-repeat;  
      background-attachment: fixed;  
      font-family: 'Roboto', sans-serif; 
    } 
 
    .main_menu .navbar { 
      padding: 20px 0; 
    } 
 
    .navbar-brand {
  display: flex;
  align-items: center;
  margin-right: 0; /* Hapus margin-right atau set ke 0 untuk memindahkan lebih ke kiri */
}

.navbar-brand img {
  max-height: 50px;
  width: auto;
  margin-right: 5px; /* Jarak antara logo utama dan tambahan */
}

.additional-logos {
  display: flex;
  align-items: center;
  margin-left: 0; /* Hapus margin-left untuk memindahkan logo tambahan lebih ke kiri */
}

.additional-logos img {
  max-height: 50px;
  width: auto;
  margin-left: 5px; /* Jarak antara logo tambahan dan tepi kiri */
}
 
    .navbar-toggler { 
      margin-left: auto; /* Pushes the toggle button to the right */ 
    } 
 
    .additional-logos { 
      display: flex; 
      align-items: center; 
    } 
 
    .additional-logos img { 
      max-height: 50px; 
      width: auto; 
      margin-left: 5px; 
    } 
 
    .hero-banner { 
      height: 100vh; 
      display: flex; 
      align-items: center; 
      justify-content: flex-start; 
      text-align: left; 
      color: white; 
      position: relative; 
      z-index: 1; 
      background-image: url('img/background.jpg'); 
      background-size: cover; 
      background-repeat: no-repeat; 
      background-attachment: fixed; 
      padding-left: 50px; 
    } 
 
    .hero-banner::before { 
      content: ''; 
      position: absolute; 
      top: 0; 
      left: 0; 
      right: 0; 
      bottom: 0; 
      background: rgba(0, 0, 0, 0.5); 
      z-index: -1; 
    } 
 
    .hero-banner__content { 
      max-width: 600px; 
      text-align: left; 
    } 
 
    .hero-banner__content h1 { 
      font-size: 3rem; 
      font-weight: bold; 
      margin-bottom: 20px; 
      line-height: 1.2; 
      text-align: left; /* Aligns text to the left */ 
    } 
    .hero-banner__content p { 
      font-size: 1.5rem; 
      margin-bottom: 30px; 
    } 
 
    .hero-banner__content .btn { 
      font-size: 1.2rem; 
      padding: 10px 30px; 
      border-radius: 50px; 
      background-color: white; 
      color: black; 
      border: none; 
      font-family: 'Poppins', sans-serif; 
      font-weight: bold; 
      transition: all 0.3s ease; 
    } 
 
    .hero-banner__content .btn:hover { 
      background: linear-gradient(45deg, #B31312, #d64f4f); 
      color: white; 
      transform: scale(1.05); 
      box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3); 
    } 
 
    .nav-item .nav-link { 
      font-size: 1.4rem; 
      padding: 10px 20px; 
      color: white; 
      text-decoration: none; 
      position: relative; 
      font-family: 'Poppins', sans-serif; 
      font-weight: 700; 
      transition: color 0.3s ease; 
    } 
 
    .nav-item .nav-link::before { 
      content: ''; 
      position: absolute; 
      left: 0; 
      bottom: -5px;
      width: 100%; 
      height: 2px; 
      background: transparent; 
      transition: background 0.3s ease; 
    } 
 
    .nav-item .nav-link:hover { 
      color: #f0f0f0; 
    } 
 
    .nav-item .nav-link:hover::before { 
      background: white; 
    } 
 
    .nav-item .nav-link { 
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); 
    } 
 
    .about-section { 
      padding: 60px 0; 
      background-color: #f9f9f9; 
      color: #333; 
    } 
 
    .about-content { 
      display: flex; 
      align-items: center; 
      justify-content: flex-start; 
    } 
 
    .about-content img { 
      width: 400px; 
      height: auto; 
      border-radius: 40px; 
      margin-right: 20px; 
    } 
 
    .about-content .text { 
      max-width: 600px; 
    } 
 
    .about-section h2 { 
      font-size: 2rem; 
      font-weight: bold; 
      margin-bottom: 20px; 
      color: red; 
    } 
 
    .about-section p { 
      font-size: 1.2rem; 
      margin-bottom: 30px; 
      line-height: 1.6; 
    } 
 
    .about-section .btn { 
      font-size: 1rem; 
      padding: 8px 20px; 
      border-radius: 30px; 
    } 
 
    .btn { 
      font-size: 1.2rem; 
      padding: 10px 30px; 
      border-radius: 50px; 
      background-color: black; 
      color: white; 
      border: none; 
      font-family: 'Poppins', sans-serif; 
      font-weight: bold; 
      transition: all 0.3s ease; 
      text-decoration: none; 
    } 
 
    .btn:hover { 
      background: linear-gradient(45deg, #B31312, #d64f4f); 
      color: white; 
      transform: scale(1.05); 
      box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3); 
    } 
 
    .contact-section { 
    padding: 80px 0; 
    background-color: #f9f9f9; 
    color: #333; 
  } 
 
  .section-title { 
    font-size: 2.5rem; 
    font-weight: bold; 
    color: #B31312; 
    text-align: center; 
    margin-bottom: 20px; 
  } 
 
  .section-subtitle { 
    font-size: 1.2rem; 
    text-align: center; 
    margin-bottom: 40px; 
  } 
 
  .contact-info { 
    display: flex; 
    justify-content: space-around; 
    flex-wrap: wrap; 
    margin-bottom: 30px; 
  } 
 
  .contact-card { 
    background-color: #fff; 
    border-radius: 10px; 
    padding: 20px; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    flex: 1; 
    margin: 10px; 
    text-align: center; 
    transition: transform 0.3s ease, box-shadow 0.3s ease; 
  } 
 
  .contact-card:hover { 
    transform: translateY(-10px); 
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2); 
  } 
 
  .contact-card i { 
    font-size: 2.5rem; 
    color: #B31312; 
    margin-bottom: 10px; 
    transition: color 0.3s ease; 
  } 
 
  .contact-card h3 { 
    font-size: 1.5rem; 
    margin-bottom: 10px; 
    color: #333; 
  } 
 
  .contact-card p { 
    font-size: 1rem; 
    color: #555; 
  } 
 
  .contact-card a { 
    color: #B31312; 
    text-decoration: none; 
    transition: color 0.3s ease; 
  } 
 
  .contact-card a:hover { 
    color: #d64f4f; 
  } 
 
  .contact-form-container { 
    display: flex; 
    justify-content: center; 
    align-items: center;
  } 
 
  .contact-form { 
    width: 100%; 
    max-width: 600px; 
    background: #fff; 
    border-radius: 10px; 
    padding: 30px; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
  } 
 
  .contact-form .form-group { 
    margin-bottom: 20px; 
  } 
 
  .contact-form .form-control { 
    border-radius: 5px; 
    border: 1px solid #ccc; 
    padding: 15px; 
  } 
 
  .contact-form .btn-primary { 
      font-size: 0.9rem; 
      padding: 8px 20px; 
      border-radius: 20px; 
      background: black; 
      color: white; 
      border: none; 
      font-family: 'Poppins', sans-serif; 
      font-weight: bold; 
      transition: all 0.3s ease; 
      text-decoration: none; 
      display: inline-block; 
      text-align: center; 
    } 
 
    .contact-form .btn-primary:hover { 
      background: linear-gradient(45deg, #B31312, #d64f4f); 
      color: white; 
      transform: scale(1.05); 
      box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.3); 
    }  
    .footer {
      background: #343a40;
      color: white;
      padding: 10px 0;
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
      margin: 0 -2px;
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
<body> 
  <!--================Header Menu Area =================-->
  <header class="header_area"> 
  <div class="main_menu"> 
    <nav class="navbar navbar-expand-lg navbar-light"> 
      <div class="container box_1620"> 
        <a class="navbar-brand" href="index.html"> 
          <img src="img/BSP.png" alt="Logo"> 
        </a> 
        <div class="additional-logos"> 
          <img src="img/skkmigas.png" alt="Additional Logo 1"> 
        </div> 
         
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
        </button> 
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent"> 
          <ul class="nav navbar-nav menu_nav justify-content-end"> 
            <li class="nav-item active"><a class="nav-link">Home</a></li>  
            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>  
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li> 
          </ul> 
        </div>  
      </div> 
    </nav> 
  </div> 
</header>
  <!--================Header Menu Area =================--> 
 
  <!--================ Hero Banner start =================-->       
  <section class="hero-banner"> 
    <div class="container"> 
      <div class="hero-banner__content"> 
        <h1>Selamat Datang Di<br>PT. Bumi Siak Pusako</h1> 
        <p>Memancang Tapak, Mengangkat Marwah</p> 
        <a href="login.php" class="btn btn-primary">Get Started</a> 
      </div> 
    </div> 
  </section> 
  <!--================ Hero Banner end =================--> 
 
  <!--================ About Section =================-->       
  <section id="about" class="about-section"> 
    <div class="container about-content"> 
      <img src="img/minyak.jpg" alt="About Image"> 
      <div class="text"> 
        <h2>Tentang Perusahaan</h2> 
        <p>Berdiri sejak 17 Oktober 2001, PT Bumi Siak Pusako (BSP) bertekad menunaikan amanah masyarakat dalam mengelola Wilayah Kerja (WK) Coastal Plain Pekanbaru (CPP) dengan profesional dan usaha terbaik yang bisa dilakukan.</p> 
        <a href="about_us.php" class="btn">About Us</a> 
      </div> 
    </div> 
  </section> 
  <!--================ About Section end =================--> 
 
  <!--================ Contact Section =================-->       
  <section id="contact" class="contact-section"> 
  <div class="container"> 
    <h2 class="section-title">Kontak Kami</h2> 
    <p class="section-subtitle">Silakan hubungi kami jika Anda memiliki pertanyaan atau komentar. Kami siap membantu Anda!</p> 
 
    <div class="contact-wrapper"> 
      <!-- Contact Information --> 
      <div class="contact-info"> 
        <div class="contact-card"> 
          <i class="fas fa-map-marker-alt"></i> 
          <p> 
            Gedung Surya Dumai, Lt. 4,6,8<br> 
            Jl. Jend. Sudirman No. 395 Pekanbaru - Riau 28116<br> 
            JB Tower Lt. 15, Jl. Kebun Sirih No. 48 -50 Jakarta Pusat 10110<br> 
            Camp Zamrud Siak, Kabupaten Siak - Riau 
          </p> 
        </div> 
        <div class="contact-card"> 
          <i class="fas fa-envelope"></i> 
          <p><a href="mailto:helpdesk@bsp.co.id">helpdesk@bsp.co.id</a></p> 
        </div> 
        <div class="contact-card"> 
          <i class="fas fa-phone"></i> 
          <p>(+62-761) 855-764</p> 
        </div> 
      </div> 
 
      <!-- Contact Form --> 
      <div class="contact-form-container"> 
        <form class="contact-form" action="send_message.php" method="POST"> 
          <div class="form-group"> 
            <input type="text" name="name" placeholder="Nama" class="form-control" required> 
          </div> 
          <div class="form-group"> 
            <input type="email" name="email" placeholder="Email" class="form-control" required> 
          </div> 
          <div class="form-group">
          <textarea name="message" rows="5" placeholder="Pesan" class="form-control" required></textarea> 
          </div> 
          <button type="submit" class="btn btn-primary">Kirim Pesan</button> 
        </form> 
      <div id="notification"></div>
    </div> 
  </div> 
</section> 
<footer class="footer"> 
  <div class="container"> 
    <p>&copy; 2024 PT. Bumi Siak Pusako</p> 
    <ul class="social-icons">
      <li><a href="https://www.instagram.com/bumisiakpusako?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fab fa-instagram"></i></a></li>
    </ul>
  </div> 
</footer>
  <!--================ Contact Section end =================--> 
 
  <script src="vendors/jquery/jquery-3.2.1.min.js"></script> 
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script> 
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script> 
  <script src="js/jquery.ajaxchimp.min.js"></script> 
  <script src="js/mail-script.js"></script> 
</body> 
</html>

 
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

    body {
      background-image: url('img/background.jpg'); 
      background-size: cover; 
      background-repeat: no-repeat; 
      background-attachment: fixed; 
      font-family: 'Roboto', sans-serif;
    }

    .header_area {
      position: absolute;
      width: 100%;
      top: 0;
      z-index: 1000;
      background: transparent;
    }

    .main_menu .navbar {
      padding: 20px 0;
    }

    .navbar-brand {
      display: flex;
      align-items: center;
      margin-right: 10px;
    }

    .navbar-brand img {
      max-height: 50px;
      width: auto;
      margin-right: 5px;
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

    .navbar-toggler {
      margin-left: auto;
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
      text-align: left;
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
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
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
      width: 100%;
      padding: 15px;
      background-color: #B31312;
      border-color: #B31312;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .contact-form .btn-primary:hover {
      background-color: #d64f4f;
      border-color: #d64f4f;
      transform: translateY(-2px);
    }
  </style>
</head>

<body>
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <img src="img/brand-logo.png" alt="Brand Logo">
          </a>
          <div class="additional-logos">
            <a href="index.html">
              <img src="img/first-logo.png" alt="First Logo">
            </a>
            <a href="index.html">
              <img src="img/second-logo.png" alt="Second Logo">
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
              <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <section class="hero-banner" id="home">
    <div class="hero-banner__content">
      <h1>Welcome to Our Employee Information System</h1>
      <p>Efficient and reliable solutions for managing employee data.</p>
      <a class="btn btn-lg" href="#">Get Started</a>
    </div>
  </section>

  <section class="about-section" id="about">
    <div class="container">
      <div class="about-content">
        <img src="img/about.jpg" alt="About Image">
        <div class="text">
          <h2>About Us</h2>
          <p>We provide comprehensive solutions for employee management, ensuring efficient data handling and secure operations.</p>
          <a href="#" class="btn">Learn More</a>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-section" id="contact">
    <div class="container">
      <h2 class="section-title">Contact Us</h2>
      <p class="section-subtitle">We would love to hear from you</p>

      <div class="contact-info">
        <div class="contact-card">
          <i class="fas fa-phone"></i>
          <h3>Call Us</h3>
          <p><a href="tel:+1234567890">+1234567890</a></p>
        </div>
        <div class="contact-card">
          <i class="fas fa-envelope"></i>
          <h3>Email Us</h3>
          <p><a href="mailto:info@example.com">info@example.com</a></p>
        </div>
        <div class="contact-card">
          <i class="fas fa-map-marker-alt"></i>
          <h3>Visit Us</h3>
          <p>123 Business Street, Business City</p>
        </div>
      </div>

      <div class="contact-form-container">
        <form class="contact-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Email" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>
    </div>
  </section>

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>

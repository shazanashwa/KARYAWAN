<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background: url('img/background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5); /* Warna overlay dengan opacity 50% */
            z-index: 1; /* Memastikan overlay di atas latar belakang */
        }

        .header_area {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            z-index: 2;
            justify-content: flex-start; /* Untuk memindahkan logo ke kiri */
        }

        .header_area .navbar {
            display: flex;
            align-items: center;
            max-width: 1000px;
            width: 100%;
        }

        .header_area .navbar-brand img {
            max-width: 50px; /* Ukuran logo utama lebih kecil */
            height: auto;
            margin-right: 10px;
            background: none; /* Pastikan tidak ada background di logo */
            display: block; /* Menghindari spasi ekstra di sekitar gambar */
        }

        .additional-logos img {
            max-width: 50px; /* Ukuran logo tambahan lebih kecil */
            height: auto;
            margin-left: 10px; /* Memberikan jarak antar logo */
            background: none; /* Pastikan tidak ada background di logo */
            display: block; /* Menghindari spasi ekstra di sekitar gambar */
        }

        .container {
            max-width: 1000px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.6);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .button {
            background-color: #e0e0e0;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            flex: 1;
            max-width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            margin: 10px;
        }

        .button img {
            width: 40px; /* Ukuran gambar dalam tombol lebih kecil */
            height: 40px;
            margin-bottom: 10px;
        }

        .button:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .button a {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .button h3 {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <header class="header_area">
        <nav class="navbar">
            <a class="navbar-brand" href="index.html">
                <img src="img/BSP.png" alt="Logo"> <!-- Logo utama dengan ukuran lebih kecil -->
            </a>
            <div class="additional-logos">
                <img src="img/skkmigas.png" alt="Additional Logo 1"> <!-- Logo tambahan dengan ukuran lebih kecil -->
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="about-section">
            <h2>Tentang Kami</h2>
            <p>Berdiri sejak 17 Oktober 2001, PT Bumi Siak Pusako (BSP) bertekad menunaikan amanah masyarakat dalam mengelola Wilayah Kerja (WK) Coastal Plain Pekanbaru (CPP) dengan profesional dan usaha terbaik yang bisa dilakukan.</p>
        </div>
        <div class="buttons">
            <div class="button">
                <a href="mitra.html">
                    <img src="img/partner.png" alt="Mitra">
                    <h3>Mitra</h3>
                </a>
            </div>
            <div class="button">
                <a href="prestasi.html">
                    <img src="img/achievement.png" alt="Prestasi">
                    <h3>Prestasi</h3>
                </a>
            </div>
            <div class="button">
                <a href="kegiatan.html">
                    <img src="img/activity.png" alt="Kegiatan">
                    <h3>Kegiatan</h3>
                </a>
            </div>
        </div>
    </div>
</body>
</html>

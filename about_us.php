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
            flex-direction: column;
            align-items: center;
            overflow-y: scroll;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .header_area {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            z-index: 2;
            justify-content: flex-start;
        }

        .header_area .navbar {
            display: flex;
            align-items: center;
            max-width: 1000px;
            width: 100%;
        }

        .header_area .navbar-brand img {
            max-width: 50px;
            height: auto;
            margin-right: 10px;
            background: none;
            display: block;
        }

        .additional-logos img {
            max-width: 50px;
            height: auto;
            margin-left: 10px;
            background: none;
            display: block;
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
            margin-top: 100px;
        }

        .about-section, .what-we-do-section, .gallery-section {
            margin-bottom: 40px;
        }

        .about-section h2, .what-we-do-section h2, .gallery-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .about-section p, .what-we-do-section p {
            font-size: 1rem;
            line-height: 1.5;
        }

        .what-we-do-steps {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
        }

        .step {
            background: linear-gradient(to bottom, #ff7e7e, #ff3a3a);
            color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            flex: 1;
            max-width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
            margin: 10px;
        }

        .step img {
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
        }

        .step:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .step-number {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .step-description {
            font-size: 1rem;
        }

        .arrow {
            font-size: 2rem;
            color: white;
            margin: 0 10px;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .gallery-item {
            margin: 10px;
            text-align: center;
        }

        .gallery img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: block;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .gallery img:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .gallery-caption {
            margin-top: 8px;
            font-size: 14px;
            color: #333;
        }
        
    </style>
</head>
<body>
    <div class="overlay"></div>
    <header class="header_area">
        <nav class="navbar">
            <a class="navbar-brand" href="index.html">
                <img src="img/BSP.png" alt="Logo">
            </a>
            <div class="additional-logos">
                <img src="img/skkmigas.png" alt="Additional Logo 1">
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="about-section">
            <h2>Tentang Kami</h2>
            <p>Berdiri sejak 17 Oktober 2001, PT Bumi Siak Pusako (BSP) bertekad menunaikan amanah masyarakat dalam mengelola Wilayah Kerja (WK) Coastal Plain Pekanbaru (CPP) dengan professional dan usaha terbaik yang bisa dilakukan.

            Berawal dari 6 Agustus 2002, BSP bersama Pertamina Hulu menandatangani perjanjian Production Sharing Contract (PSC) dengan Badan Pelaksana Kegiatan Usaha Hulu Minyak dan Gas Bumi (BP Migas)—sekarang Satuan Kerja Khusus Minyak dan Gas Bumi (SKK Migas)—untuk mengelola WK CPP selama 20 tahun—terhitung sejak 9 Agustus 2002 hingga 8 Agustus 2022—dengan Parcipating Interest (PI) masing-masing 50 persen.

            Dalam mengelola WK CPP, BSP dan Pertamina Hulu membentuk konsorsium Badan Operasi Bersama PT Bumi Siak Pusako – Pertamina Hulu (BOB BSP – Pertamina Hulu). Pola kerjasama yang diterapkan saat itu, adalah kerja sama konsorsium manajemen dan konsorsium operasi yang dipayungi oleh Joint Management Agreement (JMA) dan Joint Operating Agreement (JOA) sebagai pedoman operasional BOB PT BSP – Pertamina Hulu.

            Selama dua dekade mengelola WK CPP, konsorsium BOP PT BSP – PT Pertmaina Hulu melakukan tugasnya dengan baik. Transfer ilmu dari PT Pertamina Hulu ke BSP di bidang pengelolaan lapangan Migas juga berjalan sesuai harapan. Sumber Daya Manusia (SDM) lokal kian hari kian mumpuni.

            Maka, terhitung sejak 9 Agustus 2022, berkat tata kelola perusahaan yang baik dan kehandalan SDM yang dimiliki BSP, Negara mengamanahkan pengelolaan WK CPP sepenuhnya kepada Badan Usaha Milik Daerah (BUMD) asal Kabupaten Siak Provinsi Riau tersebut hingga 2042.

            Kini, saatnya BSP menunjukkan eksistensinya di kancah Nasional dan Global bahwa perusahaan daerah mampu mengelola lapangan Migas dengan tata kelola perusahaan yang baik.</p>
        </div>
        <div class="what-we-do-section">
            <h2>What We Do</h2>
            <div class="what-we-do-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <img src="img/exploration.png" alt="Exploration">
                    <div class="step-description">Exploration</div>
                </div>
                <div class="arrow">➔</div>
                <div class="step">
                    <div class="step-number">2</div>
                    <img src="img/development.png" alt="Development">
                    <div class="step-description">Development</div>
                </div>
                <div class="arrow">➔</div>
                <div class="step">
                    <div class="step-number">3</div>
                    <img src="img/production.png" alt="Production">
                    <div class="step-description">Production</div>
                </div>
                <div class="arrow">➔</div>
                <div class="step">
                    <div class="step-number">4</div>
                    <img src="img/abandonment.png" alt="Abandonment">
                    <div class="step-description">Abandonment</div>
                </div>
            </div>
        </div>
        <div class="gallery-section">
            <h2>Our Activities</h2>
            <div class="gallery">
                <div class="gallery-item">
                    <img src="img/RUPS.jpg" alt="Rapat Umum Pemegang Saham">
                    <div class="gallery-caption">Rapat Umum Pemegang Saham</div>
                </div>
                <div class="gallery-item">
                    <img src="img/Lokasi Zamrud.jpg" alt="Lokasi Zamrud">
                    <div class="gallery-caption">Lokasi Zamrud</div>
                </div>
                <div class="gallery-item">
                    <img src="img/Camp Pengolahan.jpg" alt="Camp Pengolahan">
                    <div class="gallery-caption">Camp Pengolahan</div>
                </div>
                <div class="gallery-item">
                    <img src="img/desa.jpg" alt="Desa Wisata Dayun">
                    <div class="gallery-caption">Desa Wisata Dayun</div>
                </div>
                <!-- Tambahkan lebih banyak item galeri sesuai kebutuhan -->
            </div>
        </div>
    </div>
</body>

</html>
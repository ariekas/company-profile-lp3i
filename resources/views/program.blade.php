<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tribe LP3I</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles2.css">
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');

        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 75px;
            z-index: 1000;
            padding: 20px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #091057;
            transition: background-color 0.3s ease;
            /* border-bottom: 1px solid #e0e0e0;
    box-shadow: 0 2px 4px rgba(0,0,0,0.2); */
        }

        .nav-logo {
            width: 150px;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            margin-left: auto;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            transition: opacity 0.3s ease;
        }

        .nav-links a:hover {
            opacity: 0.6;
        }

        /* Home Content Section */
        .home-content {
            height: 900px;
            position: relative;
        }

        .home-content-image {
            width: 100%;
            height: 575px;
            position: relative;
        }

        .home-content-image img {
            width: 100%;
            height: 105%;
            object-fit: cover;
        }

        .home-content-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 105%;
            background: rgba(0, 0, 0, 0.5);
        }

        .home-content-content {
            position: absolute;
            top: 245px;
            left: 10%;
            color: white;
            max-width: 750px;
        }

        .home-content-content p {
            font-size: 20px;
            font-weight: 400;
            text-align: justify;
            margin-bottom: 10px;
        }

        .home-content-title {
            font-family: 'Outfit', sans-serif;
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .home-content-text p {
            font-size: 20px;
            font-weight: 500;
            text-align: justify;
            max-width: 1000px;
        }

        .home-content-image-right img {
            position: absolute;
            right: 10%;
            top: 575px;
            transform: translateY(-50%);
            width: 390px;
            height: 580px;
            background: #D9D9D9;
            border-radius: 15px;
        }

        .home-content-text2 {
            max-width: 1200px;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 700px;
            left: 10%;
            right: 0;
        }

        .home-content-text2 h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 20px;
            max-width: 500px;
            color: black;
        }

        .home-content-text2 p {
            font-size: 20px;
            text-align: justify;
            font-weight: 400;
            color: black;
            font-weight: 500;
            max-width: 750px;
        }

        /* Tambahkan media query untuk responsivitas */
        @media (max-width: 768px) {
            .home-content-text2 {
                padding: 0 20px;
            }

            .home-content-text2 h1 {
                font-size: 28px;
            }

            .home-content-text2 h2 {
                font-size: 16px;
            }
        }

        /* Programs Section */
        .programs {
            padding: 210px 0;
            text-align: center;
        }

        .section-title {
            font-size: 40px;
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .section-text {
            font-size: 20px;
            text-align: justify;
            max-width: 1000px;
            font-weight: 500;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Program Cards */
        .program-cards {
            padding: 100px 0 40px;
            max-width: 950px;
            margin: 50px auto;
        }

        .program-card {
            background: #D9D9D9;
            border-radius: 10px;
            height: 125px;
            margin-bottom: 50px;
            display: flex;
            align-items: center;
            padding: 20px 50px;
            position: relative;
            transition: transform 0.3s ease;
            cursor: pointer;
            justify-content: space-between;
        }

        .program-card:hover {
            transform: translateY(-5px);
        }

        .program-icon {
            width: 70px;
            height: 84px;
            margin-right: 30px;
        }

        .program-title {
            color: #091057;
            font-size: 36px;
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
        }

        .program-arrow {
            margin-left: auto;
        }

        .program-arrow a {
            text-align: right;
            font-size: 30px;
            color: #091057;
        }

        /* Program Content Styles */
        .program-content {
            display: none;
            background: #D9D9D9;
            border-radius: 10px;
            margin-top: -65px;
            margin-bottom: 50px;
            padding: 30px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .program-content:hover {
            transform: translateY(-5px);
        }

        .program-content.active {
            display: block;
        }

        .program-detail {
            display: flex;
            align-items: flex-start;
            gap: 30px;
            text-align: left;
        }

        .program-icon-large img {
            width: 100px;
            height: 120px;
        }

        .program-description p {
            color: #333;
            font-size: 18px;
            font-weight: 500;
            line-height: 1.6;
            text-align: justify;
        }

        /* Footer */
        footer {
            background: #091057;
            color: white;
            margin-top: 0;
            padding: 70px 0 30px;
            position: relative;
            animation: fadeInUp 1s ease;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
            padding: 0 5%;
        }

        .footer-img {
            display: flex;
            justify-content: flex-start;
            position: absolute;
            left: 200px;
            right: 0;
            width: 80px;
            height: 87px;
        }

        .text-footer {
            text-align: left;
            line-height: 1.5;
            max-width: 275px;
            margin-left: auto;
        }

        .text-footer h3 {
            font-size: 21px;
            font-weight: 400;
            margin-bottom: 10px;
        }

        .text-footer p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .text-footer img {
            width: 150px;
            height: 93px;
            display: block;
        }

        /* Updated Social Links Styles */
        .social-links {
            display: flex;
            gap: 0px;
            justify-content: flex-start;
            padding: 30px 0;
            position: absolute;
            left: 200px;
            right: 0;
            transform: none;
            bottom: 70px;
        }

        .social-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }

        .social-icon a {
            text-decoration: none;
        }

        .social-icon i {
            font-size: 35px;
            color: #D9D9D9;
            transition: color 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-3px);
        }

        .social-icon:hover i {
            color: #246d91;
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.3);
        }

        .copyright p {
            margin-top: 0px;
            margin-bottom: 0px;
            font-size: 12px;
        }

        .scroll-top {
            position: absolute;
            bottom: 30px;
            right: 30px;
            width: 45px;
            height: 45px;
            background: #D9D9D9;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 100;
            transition: background-color 0.3s ease;
            color: #091057;
            font-size: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 0 20px;
            }

            .nav-links {
                display: none;
            }

            .profile-content {
                flex-direction: column;
            }
        }

        .footer-tlp a {
            display: flex;
            align-items: center;
            cursor: pointer;
            text-decoration: none;
            gap: 10px;
            margin-bottom: 10px;
        }

        .footer-tlp i {
            font-size: 20px;
            color: white;
        }

        .footer-tlp p {
            margin: 0;
            font-size: 18px;
            color: white;
        }

        /* Responsive Footer */
        @media (max-width: 992px) {
            .footer-content {
                padding: 0 80px;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .text-footer {
                text-align: center;
            }

            .footer-tlp a {
                justify-content: center;
            }

            .text-footer img {
                margin: 0 auto;
            }
        }

        @media (max-width: 768px) {
            .footer-content {
                padding: 0 40px;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 0 20px;
            }

            .nav-links {
                display: none;
            }

            .profile-content {
                flex-direction: column;
            }
        }

        .footer-tlp a {
            display: flex;
            align-items: center;
            cursor: pointer;
            text-decoration: none;
            gap: 10px;
            margin-bottom: 10px;
        }

        .footer-tlp i {
            font-size: 20px;
            color: white;
        }

        .footer-tlp p {
            margin: 0;
            font-size: 18px;
            color: white;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .navbar {
                padding: 0 50px;
            }

            .home-content-content {
                left: 50px;
            }

            .home-content-image-right {
                right: 50px;
            }
        }

        @media (max-width: 992px) {
            .home-content-image-right {
                display: none;
            }

            .home-content-content {
                max-width: 80%;
            }

            .footer {
                padding: 57px 50px;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 0 20px;
            }

            .nav-links {
                gap: 20px;
            }

            .nav-links a {
                font-size: 18px;
            }

            .home-content-title {
                font-size: 32px;
            }

            .home-content-text {
                font-size: 18px;
            }

            .program-card {
                padding: 20px;
            }

            .program-title {
                font-size: 24px;
            }
        }

        footer .container {
            padding-left: 12rem;
            padding-right: 12rem;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Update program card styles */
        .program-card {
            cursor: pointer;
        }

        .program-card .bx-chevron-down {
            transition: transform 0.3s ease;
        }

        .program-card.active .bx-chevron-down {
            transform: rotate(180deg);
        }

        /* Responsive Design untuk Mobile dan Desktop */
        @media (max-width: 768px) {

            /* Navbar */
            .navbar {
                padding: 15px 20px;
            }

            .nav-logo {
                width: 120px;
            }

            /* Home Content */
            .home-content {
                height: auto;
                padding-bottom: 250px;
            }

            .home-content-image {
                height: 300px;
            }

            .home-content-content {
                position: relative;
                top: 100px;
                left: 20px;
                right: 20px;
                padding: 0;
            }

            .home-content-title {
                font-size: 32px;
                line-height: 1.2;
            }

            .home-content-content p,
            .home-content-text p {
                font-size: 16px;
                line-height: 1.5;
            }

            .home-content-image-right {
                display: none;
                /* Sembunyikan gambar kanan di mobile */
            }

            .home-content-text2 {
                position: relative;
                top: 120px;
                left: 20px;
                right: 20px;
                margin-bottom: 30px;
            }

            .home-content-text2 h2 {
                font-size: 28px;
                line-height: 1.2;
                margin-bottom: 15px;
            }

            /* Programs Section */
            .programs {
                padding: 50px 0;
                margin-top: 50px;
            }

            .section-title {
                font-size: 28px;
                padding: 0 20px;
                margin-bottom: 20px;
            }

            .section-text {
                font-size: 16px;
                padding: 0 20px;
                margin-bottom: 30px;
            }

            .program-cards {
                padding: 20px;
                margin: 20px auto;
            }

            .program-card {
                flex-direction: row;
                height: auto;
                padding: 15px 20px;
                align-items: center;
            }

            .program-icon {
                width: 40px;
                height: 48px;
                margin-right: 15px;
                margin-bottom: 0;
            }

            .program-title {
                font-size: 20px;
                text-align: left;
            }

            /* Footer */
            footer {
                padding: 50px 20px 30px;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
                padding: 0;
            }

            .footer-img {
                position: static;
                justify-content: center;
                margin-bottom: 20px;
            }

            .text-footer {
                margin: 0 auto;
                text-align: center;
            }

            .social-links {
                position: static;
                justify-content: center;
                padding: 20px 0;
            }
        }

        /* Desktop Styles */
        @media (min-width: 769px) {
            .container {
                max-width: 1200px;
                margin: 0 auto;
            }

            .home-content-content {
                max-width: 50%;
            }

            .program-cards {
                max-width: 950px;
                margin: 50px auto;
            }

            .program-card {
                flex-direction: row;
                align-items: center;
                padding: 20px 50px;
            }

            .footer-content {
                grid-template-columns: repeat(2, 1fr);
                padding: 0 5%;
            }
        }

        /* Tablet Styles */
        @media (min-width: 769px) and (max-width: 1024px) {
            .navbar {
                padding: 15px 40px;
            }

            .home-content-content {
                max-width: 60%;
            }

            .home-content-image-right {
                right: 5%;
            }

            .program-cards {
                max-width: 90%;
            }
        }

        /* Large Desktop Styles */
        @media (min-width: 1200px) {
            .container {
                max-width: 1400px;
            }

            .home-content-content {
                max-width: 750px;
            }
        }

        /* Navbar Updates */
        .menu-icon {
            display: none;
            font-size: 24px;
            color: white;
            cursor: pointer;
        }

        /* Mobile Navigation */
        .mobile-nav {
            display: none;
            position: fixed;
            top: 75px;
            left: 0;
            right: 0;
            background: #091057;
            padding: 20px;
            z-index: 999;
        }

        .mobile-nav a {
            display: block;
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            padding: 15px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .mobile-nav a:last-child {
            border-bottom: none;
        }

        /* Update Media Queries */
        @media (max-width: 768px) {
            .menu-icon {
                display: block;
            }

            .nav-links {
                display: none;
            }

            .mobile-nav.active {
                display: block;
                animation: slideDown 0.3s ease;
            }

            /* Home Content Updates */
            .home-content {
                margin-top: 75px;
            }

            .home-content-content {
                padding: 0 20px;
                top: 180px;
            }

            .home-content-text2 {
                padding: 0 20px;
                top: 600px;
            }

            /* Programs Section Updates */
            .program-card {
                margin: 0 20px 30px;
            }

            .program-title {
                font-size: 24px;
            }

            .program-icon {
                width: 50px;
                height: 60px;
            }

            /* Footer Updates */
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
                padding: 0 20px;
            }

            .footer-img {
                position: static;
                justify-content: center;
                margin-bottom: 30px;
            }

            .social-links {
                position: static;
                justify-content: center;
                padding: 20px 0;
            }
        }

        /* Update untuk spacing yang lebih baik */
        @media (max-width: 576px) {
            .home-content-image {
                height: 300px;
            }

            .home-content-content {
                top: 80px;
            }

            .home-content-text2 {
                top: 100px;
            }

            .programs {
                margin-top: 0;
            }
        }
    </style>
    <section id="home" class="home">
        <div class="home-bg"></div>
        <div class="container">
            <nav class="navbar">
                <a href=""><img src="Image/Logo LP3i Putih.png" alt="Logo" class="nav-logo" /></a>
                <div class="nav-links">
                    <a href="index.html">Beranda</a>
                    <a href="#home-content">Tribe LP3I</a>
                    <a href="#programs">Program & Jurusan</a>
                    <a href="#contact">Hubungi Kami</a>
                </div>
                <div class="menu-icon">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>

            <!-- Tambahkan mobile navigation -->
            <div class="mobile-nav">
                <a href="index.html">Beranda</a>
                <a href="#home-content">Tribe LP3I</a>
                <a href="#programs">Program & Jurusan</a>
                <a href="#contact">Hubungi Kami</a>
            </div>
        </div>
    </section>

    <section id="home-content" class="home-content">
        <div class="home-content-image">
            <img src="Image/Model LP3i 5.JPG" alt="Model LP3I">
            <div class="home-content-overlay"></div>
        </div>
        <div class="home-content-content">
            <p>Yuk, pilih tribe yang paling cocok untuk kamu</p>
            <h1 class="home-content-title">Apa Itu Tribe?</h1>
            <p class="home-content-text">Tribe adalah pengelompokkan individu berdasarkan minat, bakat, sifat dan
                program studi di LP3I yang bisa menunjang masa depan karir kamu karena pemilihan bidang studi yang tepat
                untuk didalami dan dijalankan nanti ketika bekerja. Yuk, tentukan Tribe yang paling tepat untuk kamu.
                Jangan sampai salah pilih ya!
            </p>
        </div>
        <div class="home-content-text2">
            <h2>Penting untuk mengetahui Tribe kamu</h2>
            <p>Dengan memahami Tribe apa yang cocok, kamu akan lebih semangat belajar karena pada dasarnya kamu menyukai
                topik pelajarannya. Hal ini membuat kamu dapat memahami konsep – konsep ilmu didalamnya menjadi sangat
                mudah. Setelah lulus dan memasuki dunia kerja, kamu juga akan lebih cepat berhasil membangun karir
                karena skill yang didapat selama belajar sesuai dengan minat dan bakatmu.
            </p>
        </div>
        <div class="home-content-image-right">
            <img src="Image/Model LP3i 4.JPG" alt="">
        </div>
    </section>

    <section id="programs" class="programs">
        <h2 class="section-title">Jurusan & Program Studi</h2>
        <p class="section-text">Politeknik LP3I Jakarta memiliki tiga jurusan yaitu Jurusan Administrasi, Jurusan
            Komputer dan Jurusan Komunikasi. Jurusan Administrasi Memiliki dua Program studi yaitu Sarjana Terapan/D4
            Administrasi Bisnis Internasional dan Diploma Tiga/D3 Administrasi Bisnis. Jurusan Komputer memiliki dua
            Program studi yaitu Manajemen Informatika (D3) dan Komputerisasi Akutansi (D3) dan Jurusan Komunikasi
            memiliki satu Program Studi yaitu Hubungan Masyarakat (D3).
        </p>
        <div class="program-cards">
            <!-- Program Card 1 -->
            <div class="program-card" onclick="toggleContent('business-content')">
                <img src="Image/business.png" alt="Business Icon" class="program-icon">
                <h3 class="program-title">Business</h3>
                <div class="program-arrow">
                    <i class='bx bx-chevron-down bx-lg'></i>
                </div>
            </div>
            <div id="business-content" class="program-content">
                <div class="program-detail">
                    <div class="program-description">
                        <h1>Administrasi Bisnis</h1>
                    </div>
                    <div class="program-description">
                        <p>Ini peluang karir untuk kamu!
                            Human Resources Administrator ( Staf Administrasi HRD), Marketing Administrasi (Staf
                            Marketing, Staf Administrasi Penjualan, Tenaga Digital Marketing), Production & Logistic
                            Administrator (Bagian Administrasi Produksi, Staf Administrasi Logistik, Staf Supplay
                            Chain), Finace Administrator (Staf Administrasi Keuangan), Enterpreneur (Wirausaha).
                        </p>
                    </div>
                    <div class="program-description">
                        <h1>Administrasi Bisnis Internasional</h1>
                    </div>
                    <div class="program-description">
                        <p>Ini peluang karir untuk kamu!
                            Tenaga Business Development, Trade Marketing specialist (Tenaga Administrasi Marketing,
                            Marketing Digital), Ekspor Impor (Staf Ekspor, Staf Impor, Staf Logistik, Staf Supplay
                            Chain), Commodity Business (Wakil Perantara Perdagangan Efek (WPPE), Staf Konsultan Bisnis
                            Komoditi), Enterpreneur (Wirausaha).
                        </p>
                    </div>
                </div>
            </div>
            <!-- Program Card 2 -->
            <div class="program-card" onclick="toggleContent('technology-content')">
                <img src="Image/technology.png" alt="Technology Icon" class="program-icon">
                <h3 class="program-title">Technology</h3>
                <div class="program-arrow">
                    <i class='bx bx-chevron-down bx-lg'></i>
                </div>
            </div>
            <div id="technology-content" class="program-content">
                <div class="program-detail">
                    <div class="program-description">
                        <h1>Manajemen Informatika</h1>
                    </div>
                    <div class="program-description">
                        <p>Ini peluang karir untuk kamu!
                            Junior Web Progammer, Junior Mobile Programmer, UI/Ux Designer, Netwoek Administrator.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Program Card 3 -->
            <div class="program-card" onclick="toggleContent('communication-content')">
                <img src="Image/communication.png" alt="Communication Icon" class="program-icon">
                <h3 class="program-title">Communication</h3>
                <div class="program-arrow">
                    <i class='bx bx-chevron-down bx-lg'></i>
                </div>
            </div>
            <div id="communication-content" class="program-content">
                <div class="program-detail">
                    <div class="program-description">
                        <h1>Hubungan Masyarakat </h1>
                    </div>
                    <div class="program-description">
                        <p>Ini peluang karir untuk kamu!
                            Public Relaction Officer, Pelaksana Kampanya Humas, Social Media Strategic, Praktisi
                            Corporate Comunicatios, Marketing Public Relations Officer, Pengelola Media, Penyiar,
                            Presenter Event Organizer, MC & Protokler Content Creator.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Program Card 4 -->
            <div class="program-card" onclick="toggleContent('finance-content')">
                <img src="Image/finance.png" alt="Finance Icon" class="program-icon">
                <h3 class="program-title">Finance</h3>
                <div class="program-arrow">
                    <i class='bx bx-chevron-down bx-lg'></i>
                </div>
            </div>
            <div id="finance-content" class="program-content">
                <div class="program-detail">
                    <div class="program-description">
                        <h1>Komputerisasi Akutansi</h1>
                    </div>
                    <div class="program-description">
                        <p>Ini peluang karir untuk kamu!
                            Accounting officer / Staf Akutansi, Tax Officer / Staf Pajak, Account Officer (A/R, A/P.
                            dll) Staf Akun tertentu, Budgeting Officer / Staf Anggaran, Asisten / Junior Auditor /
                            Anggota Pemeriksa (Teknis).
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div id="contact" class="container">
            <div class="footer-content">
                <div>
                    <div class="footer-img">
                        <img src="Image/Logo LP3i Putih.png" alt="Logo" />
                    </div>
                    <div class="social-links">
                        <div class="social-icon">
                            <a href="https://www.facebook.com/lp3i.depok"><i class="bx bxl-facebook-circle"></i></a>
                        </div>
                        <div class="social-icon">
                            <a href="https://www.instagram.com/lp3i.depok"><i class="bx bxl-instagram"></i></a>
                        </div>
                        <div class="social-icon">
                            <a href="https://www.tiktok.com/@lp3i.depok"><i class="bx bxl-tiktok"></i></a>
                        </div>
                        <div class="social-icon">
                            <a href="https://www.youtube.com/@pljdepok"><i class="bx bxl-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-footer">
                    <h3>Alamat Kampus</h3>
                    <p>
                        Jl. Raya Bogor KM.38 No.56, Sukamaju, Kec. Cilodong, Depok, Jawa Barat 16415
                    </p>
                    <div class="footer-tlp">
                        <a href="#">
                            <i class="bx bxl-whatsapp"></i>
                            <p>+62 899 6911 888</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>© 2024 LP3I | All rights reserved.</p>
            </div>
            <div class="scroll-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
                <i class="bx  bx-chevron-up"></i>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
<script>
    const sections = document.querySelectorAll('.profile, .program, .blog');
    const blogCards = document.querySelectorAll('.blog-card');
    const homeContent = document.querySelector('.home-content');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
                entry.target.classList.remove('fade-out');
            } else {
                // Tambahkan class fade-out ketika section keluar dari viewport
                entry.target.classList.add('fade-out');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '-50px'
    });

    sections.forEach(section => {
        section.style.animationPlayState = 'paused';
        observer.observe(section);
    });

    blogCards.forEach(card => {
        observer.observe(card);
    });

    observer.observe(homeContent);

    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });

    // Menutup menu saat link diklik
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('active');
        });
    });

    // Menutup menu saat scroll
    window.addEventListener('scroll', () => {
        if (navLinks.classList.contains('active')) {
            navLinks.classList.remove('active');
        }
    });

    // Program Dropdown Function
    function toggleContent(contentId) {
        const content = document.getElementById(contentId);
        const allContents = document.querySelectorAll('.program-content');
        const allCards = document.querySelectorAll('.program-card');

        // Tutup semua konten yang terbuka kecuali yang sedang diklik
        allContents.forEach(item => {
            if (item.id !== contentId) {
                item.classList.remove('active');
                // Cari card yang berhubungan dan hapus class active-nya
                const relatedCard = item.previousElementSibling;
                if (relatedCard) {
                    relatedCard.classList.remove('active');
                }
            }
        });

        // Toggle konten yang diklik
        content.classList.toggle('active');

        // Toggle class active pada card yang diklik
        const clickedCard = content.previousElementSibling;
        if (clickedCard) {
            clickedCard.classList.toggle('active');
        }
    }

    // Tambahkan event listener untuk setiap program card
    document.querySelectorAll('.program-card').forEach(card => {
        card.addEventListener('click', function() {
            const contentId = this.getAttribute('onclick').match(/'([^']+)'/)[1];
            toggleContent(contentId);
        });
    });

    // Menu Icon Functionality
    const menuIcon = document.querySelector('.menu-icon');
    const mobileNav = document.querySelector('.mobile-nav');
    const navLinksMobile = document.querySelectorAll('.mobile-nav a');

    menuIcon.addEventListener('click', () => {
        mobileNav.classList.toggle('active');
        // Change menu icon
        const icon = menuIcon.querySelector('i');
        if (mobileNav.classList.contains('active')) {
            icon.classList.remove('bx-menu');
            icon.classList.add('bx-x');
        } else {
            icon.classList.remove('bx-x');
            icon.classList.add('bx-menu');
        }
    });

    // Close mobile nav when clicking a link
    navLinksMobile.forEach(link => {
        link.addEventListener('click', () => {
            mobileNav.classList.remove('active');
            const icon = menuIcon.querySelector('i');
            icon.classList.remove('bx-x');
            icon.classList.add('bx-menu');
        });
    });

    // Close mobile nav when clicking outside
    document.addEventListener('click', (e) => {
        if (!mobileNav.contains(e.target) && !menuIcon.contains(e.target)) {
            mobileNav.classList.remove('active');
            const icon = menuIcon.querySelector('i');
            icon.classList.remove('bx-x');
            icon.classList.add('bx-menu');
        }
    });
</script>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LP3I Landing Page</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Pixelify+Sans:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');

        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
        }

        /* Typography */
        h1 {
            font-size: 40px;
            font-weight: 700;
            font-family: 'Outfit', sans-serif;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        p {
            font-size: 24px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        /* Home Section */
        .home {
            position: relative;
            height: 100%;
            min-height: 730px;
            width: 100%;
            color: white;
            background: url('Image/Model LP3i 3.JPG') no-repeat;
            background-size: cover;
        }

        .home-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
            z-index: 1;
        }

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

        .home-content {
            position: relative;
            z-index: 2;
            padding: 220px 0 100px;
            /* max-width: 440px; */
        }

        .home-content h1 {
            margin-top: 40px;
            font-family: 'Outfit' sans-serif;
            font-size: 50px;
            max-width: 450px;
        }

        .home-content p {
            max-width: 600px;
            font-size: 20px;
            font-weight: 400;
        }

        .btn {
            background: #4B70F5;
            color: white;
            padding: 15px 40px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-block;
            font-weight: 600;
            margin-top: 30px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background: #091057;
        }

        /* Profile Section */
        .profile {
            padding: 125px 0;
            animation: fadeInUp 1s ease;
        }

        .profile-content {
            display: flex;
            gap: 60px;
            margin-bottom: 80px;
            align-items: center;
        }

        .profile-image img {
            width: 400px;
            height: 550px;
            background: #D9D9D9;
            border-radius: 10px;
            flex-shrink: 0;
            object-fit: cover;
        }

        .profile-text {
            flex: 1;
        }

        .profile-text h2 {
            max-width: 400px;
            font-family: 'Outfit' sans-serif;
            font-size: 40px;
            margin-bottom: 40px;
        }

        .profile-text p {
            max-width: 650px;
            text-align: justify;
            font-weight: 500;
            font-size: 20px;
        }

        .profile-text2 h2 {
            text-align: right;
            margin-left: auto;
            font-family: 'Outfit' sans-serif;
            max-width: 350px;
            font-size: 40px;
            margin-bottom: 40px;
        }

        .profile-text2 p {
            max-width: 650px;
            text-align: justify;
            font-weight: 500;
            font-size: 20px;
        }

        /* Program Section */
        .program {
            padding: 125px 70px 80px;
            text-align: center;
            background: url('Image/Model LP3i 2.JPG') no-repeat;
            background-size: cover;
            position: relative;
            color: white;
            z-index: 1;
            animation: fadeInUp 1s ease;
            -webkit-animation: fadeInUp 1s ease;
        }

        .program::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: -1;
        }


        .program h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 26px;
            font-weight: 700;
        }

        .program h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .program-btn {
            background: #4B70F5;
            display: inline-block;
            border-radius: 30px;
            margin-bottom: 60px;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -ms-border-radius: 30px;
            -o-border-radius: 30px;
        }

        .program-grid {
            display: flex;
            justify-content: center;
            /* flex-wrap: wrap; */
            gap: 15px;
            margin-top: 25px;
        }

        .program-card {
            background: #f5f5f5;
            border-radius: 10px;
            padding: 10px;
            aspect-ratio: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
            animation: fadeInRight 0.8s ease;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin: 10px;
        }

        .program-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .program-icon {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .program-icon img {
            width: 180px;
            height: 190px;
            object-fit: contain;
        }

        .program>* {
            position: relative;
            z-index: 2;
        }

        @media (max-width: 1024px) {
            .program-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .program-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .program-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Program Studi Section */
        .program-studi {
            padding: 100px;
            background: #174861;
        }

        .program-studi-wrapper {
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .program-studi-text {
            flex: 1;
        }

        .program-studi-text h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 35px;
            color: white;
            margin-bottom: 30px;
        }

        .program-studi-text p {
            font-size: 18px;
            color: white;
            text-align: justify;
        }

        .program-studi-text {
            flex: 2;
        }

        .program-studi-image img {
            height: 300px;
            width: 450px;
            ;
            border-radius: 10px;
            object-fit: cover;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .program-studi-wrapper {
                flex-direction: column;
            }

            .program-studi-text {
                text-align: center;
            }

            .program-studi-image img {
                max-width: 100%;
            }
        }

        /* Mitra Perusahaan Section */
        .mitra-perusahaan {
            justify-content: center;
            text-align: center;
            margin-top: 150px;
            padding: 100px;
            position: relative;
            z-index: 1;
        }

        .mitra-perusahaan h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 23px;
            color: #001F3F;
            position: relative;
            z-index: 2;
        }

        .mitra-perusahaan h2 {
            font-family: 'Outfit', sans-serif;
            margin-bottom: 70px;
            color: #091057;
            position: relative;
            z-index: 2;
        }

        /* Blog Section */
        .blog {
            padding: 150px;
            text-align: center;
            margin-top: 100px;
            animation: fadeInUp 1s ease;
        }

        .blog h3 {
            font-family: 'Outfit', sans-serif;
            color: #001F3F;
            font-size: 23px;
        }

        .blog h2 {
            font-family: 'Outfit', sans-serif;
            color: #091057;
        }

        .blog-grid {
            display: flex;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 20px;
            margin-top: 40px;
            margin-bottom: 60px;
            justify-items: center;
            justify-content: space-between;
        }

        .blog-card {
            font-family: 'Lato', sans-serif;
            text-align: left;
            font-size: 18px;
            max-width: 350px;
            width: 500px;
            font-weight: 500;
            display: flex;
            text-decoration: none;
            flex-direction: column;
            align-items: center;
            animation: fadeInRight 0.8s ease;
            -webkit-animation: fadeInRight 0.8s ease;
            margin-bottom: 20px;
        }

        .blog-image {
            width: 350px;
            height: 200px;
            background: #D9D9D9;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .blog-card p {
            color: #091057;
            font-size: 18px;
            font-weight: 600;
        }

        /* Footer */
        footer {
            background: #091057;
            color: white;
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

        /* Animasi Section */
        .hidden {
            opacity: 0;
            transform: translateY(50px);
            transition: all 1s ease;
        }

        .show {
            opacity: 1;
            transform: translateY(0);
        }

        /* Tambahkan keyframes untuk animasi fade out */
        @keyframes fadeOutDown {
            from {
                opacity: 1;
                transform: translateY(0);
            }

            to {
                opacity: 0;
                transform: translateY(30px);
            }
        }

        @keyframes fadeOutLeft {
            from {
                opacity: 1;
                transform: translateX(0);
            }

            to {
                opacity: 0;
                transform: translateX(-50px);
            }
        }

        @keyframes fadeOutRight {
            from {
                opacity: 1;
                transform: translateX(0);
            }

            to {
                opacity: 0;
                transform: translateX(50px);
            }
        }

        /* Modifikasi style section yang ada */
        .profile.fade-out {
            animation: fadeOutDown 1s ease forwards;
        }

        .program.fade-out {
            animation: fadeOutDown 1s ease forwards;
        }

        .blog.fade-out {
            animation: fadeOutDown 1s ease forwards;
        }

        .blog-card.fade-out {
            animation: fadeOutRight 0.8s ease forwards;
        }

        .home-content.fade-out {
            animation: fadeOutLeft 1s ease forwards;
        }

        footer.fade-out {
            animation: fadeOutDown 1s ease forwards;
        }

        /* Tambahkan keyframes untuk animasi fade in */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Tambahkan animasi untuk setiap section */
        .profile {
            animation: fadeInUp 1s ease;
        }

        .program {
            animation: fadeInUp 1s ease;
        }

        .blog {
            animation: fadeInUp 1s ease;
        }

        .blog-card {
            animation: fadeInRight 0.8s ease;
        }

        .home-content {
            animation: fadeInLeft 1s ease;
        }

        /* Tambahkan style untuk animasi footer jika diinginkan */
        footer {
            animation: fadeInUp 1s ease;
        }

        /* Responsive Design for Mobile */
        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 0 20px;
            }

            .navbar {
                padding: 10px 20px;
            }

            .nav-links {
                display: none;
            }

            .home-content {
                padding: 150px 0 50px;
            }

            .profile-content {
                flex-direction: column;
                align-items: center;
            }

            .profile-image-1,
            .profile-image-2 {
                width: 100%;
                height: auto;
            }

            .program-grid {
                grid-template-columns: 1fr;
            }

            .blog-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }

            .social-links {
                justify-content: center;
            }

            .profile-image img {
                width: 100%;
                height: auto;
                aspect-ratio: 3/4;
                max-width: 360px;
            }

            .program {
                padding: 120px 20px 60px;
            }
        }

        /* Responsive Design for Desktop */
        @media (min-width: 769px) {
            .nav-links {
                display: flex;
            }

            .profile-content {
                flex-direction: row;
            }

            .program-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .blog-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .hamburger {
            display: none;
            cursor: pointer;
        }

        .hamburger i {
            font-size: 30px;
            color: white;
        }

        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }

            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 75px;
                left: 0;
                right: 0;
                background-color: #091057;
                padding: 20px;
                text-align: center;
            }

            .nav-links a {
                margin-bottom: 15px;
                padding: 10px;
            }

            .nav-links.active {
                display: flex;
            }

            /* Navbar */
            .navbar {
                padding: 10px 20px;
            }

            .nav-logo {
                width: 120px;
            }

            /* Home Section */
            .home-content {
                padding: 150px 20px 50px;
            }

            .home-content h1 {
                font-size: 35px;
                max-width: 100%;
            }

            .home-content p {
                font-size: 16px;
            }

            /* Profile Section */
            .profile {
                padding: 60px 20px;
            }

            .profile-content {
                flex-direction: column;
                gap: 30px;
                margin-bottom: 40px;
            }

            .profile-image img {
                width: 100%;
                height: auto;
                max-width: 350px;
            }

            .profile-text h2,
            .profile-text2 h2 {
                font-size: 28px;
                text-align: center;
                margin: 0 auto 20px;
            }

            .profile-text p,
            .profile-text2 p {
                font-size: 16px;
            }

            /* Program Section */
            .program {
                padding: 60px 20px;
            }

            .program-grid {
                flex-direction: column;
                align-items: center;
            }

            .program-card {
                width: 100%;
                max-width: 280px;
            }

            /* Program Studi Section */
            .program-studi {
                padding: 60px 20px;
            }

            .program-studi-wrapper {
                flex-direction: column;
            }

            .program-studi-image img {
                width: 100%;
                height: auto;
            }

            /* Blog Section */
            .blog {
                padding: 60px 20px;
            }

            .blog-grid {
                flex-direction: column;
                align-items: center;
            }

            .blog-card {
                width: 100%;
                max-width: 320px;
            }

            .blog-image {
                width: 100%;
                height: 180px;
            }

            /* Footer */
            footer {
                padding: 50px 20px 30px;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .footer-img {
                position: static;
                justify-content: center;
                margin-bottom: 20px;
            }

            .social-links {
                position: static;
                justify-content: center;
                padding: 20px 0;
            }

            .text-footer {
                margin: 0 auto;
                text-align: center;
            }
        }

        /* Desktop Styles */
        @media (min-width: 769px) {
            .container {
                padding: 0 40px;
            }

            .nav-links {
                display: flex;
            }

            .profile-content {
                flex-direction: row;
                gap: 60px;
            }

            .program-grid {
                flex-direction: row;
                justify-content: center;
            }

            .blog-grid {
                flex-direction: row;
                justify-content: space-between;
            }

            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* Tambahan untuk perangkat besar (min-width: 1200px) */
        @media (min-width: 1200px) {
            .container {
                max-width: 1200px;
                margin: 0 auto;
            }
        }
    </style>
    <section id="home" class="home">
        <div class="home-bg"></div>
        <div class="container">
            <nav class="navbar">
                <a href=""><img src="Image/Logo LP3i Putih.png" alt="Logo" class="nav-logo" /></a>
                <div class="hamburger">
                    <i class="bx bx-menu"></i>
                </div>
                <div class="nav-links">
                    <a href="#home">Beranda</a>
                    <a href="#profile">Tentang Kami</a>
                    <a href="#program">Program Pendidikan</a>
                    <a href="#blog">Blog</a>
                    <a href="#contact">Hubungi Kami</a>
                </div>
            </nav>
            <div class="home-content">
                <h1>Awali Kariermu Dari Sini</h1>
                <p>
                    LP3I Jakarta hadir di Indonesia untuk menjawab tantangan dari Dunia Usaha dan Dunia Industri.
                </p>
                <a href="#" class="btn">Daftar Sekarang</a>
            </div>
        </div>
    </section>

    <section id="profile" class="profile">
        <div class="container">
            <div class="profile-content">
                <div class="profile-image">
                    <img src="Image/LP3i 5.jpg" alt="">
                </div>
                <div class="profile-text">
                    <h2>Apa itu Politeknik LP3I Jakarta?</h2>
                    <p>
                        Politeknik LP3I Jakarta adalah Instutusi Pendidikan Tinggi Vokasi Bisnis dan Teknologi, yang
                        sudah ada di Indonesia sejak Tahun 2003. Politeknik LP3I yang menaungi Pendidikan jenjang D3 dan
                        D4. Saat ini Politeknik LP3I Jakarta terdapat di 9 (Sembilan) titik dan tersebar di Jadecitabek.
                    </p>
                </div>
            </div>
            <div class="profile-content">
                <div class="profile-text2">
                    <h2>Pendidikan vokasi di LP3I</h2>
                    <p>
                        Pendididkan di LP3I berorientasi pada Pendidikan vokasional (70% praktek, 30% teori), magang dan
                        penempatan kerja. Program penempatan kerja kami salah satu yang terbaik di Indonesia. Di LP3I,
                        mahasiswa yang berkualitas dan kompeten dan sesuai dengan persyaratan akan membantu penempatan
                        kerja hingga bekerja di perusahaan atau berwirausaha.
                    </p>
                </div>
                <div class="profile-image">
                    <img src="Image/LP3i 4.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="program" class="program">
        <div class="program-bg"></div>
        <div class="container">
            <h2>Pilih program LP3I</h2>
            <h3>sesuai TRIBE-mu</h3>
            <a href="{{ route('showProgram') }}" class="btn program-btn">Cari Tahu Disini</a>
            <div class="program-grid">
                <div class="program-card">
                    <div class="program-icon">
                        <img src="Image/business.png" alt="Business" />
                    </div>
                </div>
                <div class="program-card">
                    <div class="program-icon">
                        <img src="Image/technology.png" alt="Technology" />
                    </div>
                </div>
                <div class="program-card">
                    <div class="program-icon">
                        <img src="Image/communication.png" alt="Communication" />
                    </div>
                </div>
                <div class="program-card">
                    <div class="program-icon">
                        <img src="Image/finance.png" alt="Finance" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="program-studi" class="program-studi">
        <div class="container">
            <div class="program-studi-wrapper">
                <div class="program-studi-text">
                    <h2>Kenapa penting untuk tahu program studi yang cocok denganmu?</h2>
                    <p>Dengan memahami Program Studi apa yang cocok, kamu akan lebih semangat belajar karana pada
                        dasarnya ini
                        pas dengan bakat dan minat, sehingga kamu menyukai topik pelajarannya. Hal ini membuat kamu
                        dapat
                        memahami konsep-konsep ilmu dan aplikasi didalamnya menjadi sangat mudah dan senang.
                    </p>
                </div>
                <div class="program-studi-image">
                    <img src="Image/Model LP3i 1.JPG" alt="Program Studi">
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="mitra-perusahaan" class="mitra-perusahaan">
        <div class="container">
            <h3>Puluhan Mitra</h3>
            <h2>Penempatan Kerja</h2>
            <div>
                <img src="Image/Mitra Kerja LP3i.png" alt="">
            </div>
        </div>
    </section> -->

    <section id="blog" class="blog">
        <div class="container">
            <h3>Blog Terkini</h3>
            <h2>Beberapa tampilan blog ter update</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($blogs as $blog)
                    <div class="col">
                        <div class="card h-100 shadow-sm" style="border: none; border-radius: 15px; overflow: hidden;">
                            <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" alt="{{ $blog->image }}"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 1.25rem; font-weight: bold; color: #333;">
                                    {{ $blog->judul }}</h5>
                                <p class="card-text" style="font-size: 0.9rem; color: #666;">
                                    {{ strip_tags($blog->deskripsi) }}</p>
                            </div>
                            <div class="card-footer bg-transparent border-top-0">
                            <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-primary"
    style="background-color: #007bff; border: none; border-radius: 25px; padding: 8px 20px; font-size: 0.9rem;">
    Baca Selengkapnya
</a>

                            </div>
                        </div>
                    </div>
                @endforeach
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
                <i class="bx bx-chevron-up"></i>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
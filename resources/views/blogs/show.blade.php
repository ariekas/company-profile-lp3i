<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
<link rel="stylesheet" href="styles.css" />
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Pixelify+Sans:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        overflow-x: hidden;
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

        .navbar {
            padding: 10px 20px;
        }

        .nav-logo {
            width: 120px;
        }
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

.footer-tlp a {
            display: flex;
            align-items: center;
            cursor: pointer;
            text-decoration: none;
            gap: 10px;
            margin-bottom: 10px;
            margin-top: 20px;
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

        /* Container utama untuk halaman blog */
.page-blog {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    margin-top: 50px;
}

/* Styling untuk gambar blog */
.page-blog img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Kontainer judul dan deskripsi */
.page-blog .content {
    margin-top: 20px;
}

/* Styling untuk judul blog */
.page-blog h2 {
    font-size: 2.5rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 15px;
}

/* Styling untuk deskripsi blog */
.page-blog p {
    font-size: 1.125rem;
    line-height: 1.75;
    color: #555;
    margin-bottom: 25px;
}

/* Styling untuk tombol kembali */
.page-blog .back-link {
    font-size: 1rem;
    font-weight: 600;
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.page-blog .back-link:hover {
    color: #0056b3;
}

/* Responsif untuk ukuran layar kecil */
@media (max-width: 768px) {
    .page-blog img {
        height: auto;
    }

    .page-blog h2 {
        font-size: 2rem;
    }

    .page-blog p {
        font-size: 1rem;
    }
}

</style>
   



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
<div class="page-blog">
    <div class="content">
        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->image }}" class="blog-image">
        <div class="content-body">
            <h2 class="blog-title">
                {{ $blog->judul }}
            </h2>
            <p class="blog-description">
                {!! $blog->deskripsi !!}
            </p>
        </div>
        <div class="back-button">
            <a href="{{ url()->previous() }}" class="back-link">
                ← Kembali
            </a>
        </div>
    </div>
</div>

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
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
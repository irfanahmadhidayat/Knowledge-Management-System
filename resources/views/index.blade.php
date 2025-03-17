<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Knowledge Management System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
</head>
<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="header-container container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <h1 class="sitename">Printing <span>Company</span></h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <div class="d-flex gap-2">
                <a href="login.html" class="btn btn-outline-primary">Login</a>
                <a href="register.html" class="btn btn-primary">Register</a>
            </div>
        </div>
    </header>

    <main class="main">
        <section id="hero" class="hero section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h1 class="mb-3">
                                Kelola Pengetahuan
                                Perusahaan dengan Mudah Melalui Platform<br>
                                <span class="accent-text">Knowledge Management System</span>
                            </h1>
                            <p class="mb-3">
                                Platform untuk berbagi, mengakses, dan mengelola informasi dalam perusahaan.
                                Bantu tim Anda meningkatkan produktivitas dengan akses cepat ke sumber daya yang dibutuhkan.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                            <img src="{{ asset('asset/img/Landing.png') }}" alt="Hero Image" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-lg-3 col-md-6">
                      <div class="stat-item">
                        <div class="stat-icon">
                          <i class="bi bi-file-earmark-text"></i>
                        </div>
                        <div class="stat-content">
                          <h4>100+ Materi</h4>
                          <p class="mb-0">Dokumen & pengetahuan tersedia</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                      <div class="stat-item">
                        <div class="stat-icon">
                          <i class="bi bi-people"></i>
                        </div>
                        <div class="stat-content">
                          <h4>50+ Pengguna</h4>
                          <p class="mb-0">Tim & karyawan aktif</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                      <div class="stat-item">
                        <div class="stat-icon">
                          <i class="bi bi-chat-dots"></i>
                        </div>
                        <div class="stat-content">
                          <h4>2000+ Feedback</h4>
                          <p class="mb-0">Masukan & saran diberikan</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                      <div class="stat-item">
                        <div class="stat-icon">
                          <i class="bi bi-lightbulb"></i>
                        </div>
                        <div class="stat-content">
                          <h4>1000+ Ide Baru</h4>
                          <p class="mb-0">Inovasi dari tim</p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 align-items-center justify-content-between">
                    <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                        <span class="about-meta">TENTANG KAMI</span>
                        <h2 class="about-title">Optimalkan Manajemen Pengetahuan dalam Industri Percetakan</h2>
                        <p class="about-description">
                            Knowledge Management System (KMS) kami dirancang khusus untuk membantu perusahaan percetakan dalam mengelola dan berbagi informasi dengan lebih efisien. Dengan platform ini, tim produksi, desain, dan manajemen dapat dengan mudah mengakses, berbagi, serta memberikan umpan balik terhadap materi dan prosedur kerja yang telah disediakan.
                        </p>

                        <div class="row feature-list-wrapper">
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li><i class="bi bi-check-circle-fill"></i> Akses dokumen produksi secara real-time</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Sistem manajemen file desain dan cetak</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Pemberian feedback antar tim produksi</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li><i class="bi bi-check-circle-fill"></i> Dashboard analitik untuk monitoring proyek</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Pencatatan histori revisi desain</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Akses kontrol berbasis peran dalam tim</li>
                                </ul>
                            </div>
                        </div>

                        <div class="info-wrapper">
                            <div class="row gy-4">
                                <div class="col-lg-5">
                                    <div class="profile d-flex align-items-center gap-3">
                                        <img src="{{ asset('asset/img/irfan.jpg') }}" alt="CEO Profile" class="profile-image">
                                        <div>
                                            <h4 class="profile-name">Irfan Ahmad Hidayat</h4>
                                            <p class="profile-position">CEO & Founder</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="contact-info d-flex align-items-center gap-2">
                                        <i class="bi bi-telephone-fill"></i>
                                        <div>
                                            <p class="contact-label">Hubungi kami</p>
                                            <p class="contact-number">+62 812-3456-7890</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="image-wrapper">
                            <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                                <img src="{{ asset('asset/img/Printing.jpg') }}" alt="Business Collaboration" class="img-fluid main-image rounded-4">
                                <img src="{{ asset('asset/img/Printing_People.jpg') }}" alt="Team Training" class="img-fluid small-image rounded-4">
                            </div>
                            <div class="experience-badge floating">
                                <h3>5+ <span>Tahun</span></h3>
                                <p>Pengalaman dalam pengelolaan pengetahuan industri percetakan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <script src="assets/js/main.js"></script>
</body>
</html>

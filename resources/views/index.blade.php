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
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <div class="d-flex gap-2">
                <a href="login.html" class="btn btn-outline-primary">Login</a>
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

        <section id="about" class="about section bg-light py-5">
            <div class="section-title text-center">
                <h2>Tentang Kami</h2>
                <p>Optimalkan Manajemen Pengetahuan dalam Industri Percetakan</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 align-items-center justify-content-between">
                    <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                        <p class="about-description">
                            Knowledge Management System (KMS) kami dirancang khusus untuk membantu perusahaan percetakan dalam mengelola dan berbagi informasi dengan lebih efisien. Dengan platform ini, tim dapat dengan mudah mengakses, berbagi, serta memberikan umpan balik terhadap materi dan prosedur kerja yang telah disediakan.
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

        <section id="services" class="services section bg-white py-5">
            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <h2>Layanan Kami</h2>
                    <p>Solusi terbaik untuk manajemen pengetahuan dalam industri percetakan</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4" data-aos="flip-left" data-aos-delay="200">
                        <div class="card service-card shadow-lg border-0 rounded">
                            <div class="card-body text-center">
                                <div class="icon-box rounded-circle bg-primary text-white mx-auto mb-3">
                                    <i class="bi bi-cloud-arrow-up-fill display-4"></i>
                                </div>
                                <h5 class="fw-bold">Manajemen Dokumen</h5>
                                <p class="text-muted">Kelola dan akses dokumen perusahaan secara mudah dan aman di satu tempat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="flip-left" data-aos-delay="300">
                        <div class="card service-card shadow-lg border-0 rounded">
                            <div class="card-body text-center">
                                <div class="icon-box rounded-circle bg-success text-white mx-auto mb-3">
                                    <i class="bi bi-people-fill display-4"></i>
                                </div>
                                <h5 class="fw-bold">Kolaborasi Tim</h5>
                                <p class="text-muted">Fasilitasi komunikasi dan kolaborasi antar tim secara real-time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="flip-left" data-aos-delay="400">
                        <div class="card service-card shadow-lg border-0 rounded">
                            <div class="card-body text-center">
                                <div class="icon-box rounded-circle bg-danger text-white mx-auto mb-3">
                                    <i class="bi bi-bar-chart-line-fill display-4"></i>
                                </div>
                                <h5 class="fw-bold">Analitik & Laporan</h5>
                                <p class="text-muted">Monitor kinerja perusahaan dengan laporan dan dashboard analitik.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact section bg-light py-5">
            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <h2 class="text-uppercase fw-bold">Hubungi Kami</h2>
                    <p class="text-muted">Hubungi kami untuk konsultasi lebih lanjut mengenai solusi yang kami tawarkan.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <form class="p-4 shadow-lg rounded bg-white animate__animated animate__fadeInUp">
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Nama</label>
                                <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label fw-bold">Pesan</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan Anda"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer bg-dark text-light py-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 text-center text-md-start mb-2 mb-md-0">
                        <h5 class="fw-bold">Kontak Kami</h5>
                        <p class="mb-1"><i class="bi bi-geo-alt-fill"></i> Jl. Suka suka kamu, Magelang</p>
                        <p class="mb-1"><i class="bi bi-envelope-fill"></i> info@printingcompany.com</p>
                        <p class="mb-0"><i class="bi bi-telephone-fill"></i> +62 888-999-1111</p>
                    </div>
                    <div class="col-lg-6 col-md-6 text-center text-md-end">
                        <h5 class="fw-bold">Ikuti Kami</h5>
                        <a href="#" class="text-light me-3"><i class="bi bi-facebook fs-4"></i></a>
                        <a href="#" class="text-light me-3"><i class="bi bi-instagram fs-4"></i></a>
                        <a href="#" class="text-light me-3"><i class="bi bi-twitter fs-4"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-linkedin fs-4"></i></a>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <p class="mb-0">&copy; 2025 Printing Company. All Rights Reserved.</p>
                </div>
            </div>
            <button onclick="scrollToTop()" class="scroll-top">
                <i class="bi bi-arrow-up"></i>
            </button>
        </footer>




    </main>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <script>
        window.onscroll = function() {
            let button = document.querySelector(".scroll-top");
            if (document.documentElement.scrollTop > 100) {
                button.classList.add("show-scroll");
            } else {
                button.classList.remove("show-scroll");
            }
        };

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let sections = document.querySelectorAll("section");
            let navLinks = document.querySelectorAll(".navmenu ul li a");

            window.addEventListener("scroll", function() {
                let current = "";

                sections.forEach((section) => {
                    let sectionTop = section.offsetTop - 100;
                    let sectionHeight = section.clientHeight;

                    if (pageYOffset >= sectionTop && pageYOffset < sectionTop + sectionHeight) {
                        current = section.getAttribute("id");
                    }
                });

                navLinks.forEach((link) => {
                    link.classList.remove("active");
                    if (link.getAttribute("href").includes(current)) {
                        link.classList.add("active");
                    }
                });
            });
        });
    </script>

    <script src="assets/js/main.js"></script>
</body>

</html>
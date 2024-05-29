<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GEOUINMA - 2</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('home_assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('home_assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('home_assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('home_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home_assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('home_assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home_assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home_assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('home_assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('home_assets/css/style.css') }}" rel="stylesheet">
    <style>
        .icon-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 15px;
            border: 1px solid #ddd;
            /* Optional: For visual separation */
            margin: 10px;
            background: #fff;
            /* Optional: For a background color */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            /* Optional: For subtle shadow */
            border-radius: 10px;
            /* Optional: For rounded corners */
        }

        .image-container {
            width: 100%;
            height: 300px;
            /* Adjust height as needed */
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            border-bottom: 1px solid #ddd;
            margin-bottom: 10px;
            /* Optional: For visual separation */
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;


        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="{{ route('user.index') }}">GEOUINMA - 2<span>.</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Building</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('user.markers') }}">Maps</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="#about" class="get-started-btn scrollto">Get Started</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>KAMPUS II UIN MAULANA MALIK IBRAHIM MALANG<span>.</span></h1>
                    <h2>Jl. Ir. Soekarno No. 1, Dadaprejo, Kecamatan Junrejo, Batu, Jawa Timur</h2>
                </div>
            </div>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset('home_assets/img/uin.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                        data-aos-delay="100">
                        <h3>About</h3>
                        <p>
                            GEOUINMA - 2 merupakan sebuah website sistem informasi yang dirancang untuk memudahkan
                            mahasiswa, dosen, staf, dan pengunjung dalam menavigasi Kampus 2 UIN Malang yang terletak di
                            Jl. Raya Dadaprejo No.1, Dadaprejo, Kecamatan Junrejo, Kota Batu, Jawa Timur 65233. Melalui
                            peta interaktif yang tersedia, pengguna dapat dengan mudah menemukan berbagai lokasi penting
                            seperti gedung perkuliahan, laboratorium, perpustakaan, kantin, dan fasilitas lainnya.
                            Selain itu, setiap lokasi dilengkapi dengan informasi detail termasuk deskripsi, jam
                            operasional, dan kontak yang bisa dihubungi. Fitur pencarian dan penunjuk arah yang intuitif
                            memastikan pengguna dapat menemukan rute tercepat ke tujuan mereka. Website ini terus
                            diperbarui secara berkala untuk menyediakan informasi yang akurat dan terkini, membantu
                            seluruh civitas akademika dan pengunjung luar kampus dalam menjelajahi lingkungan Kampus 2
                            UIN Malang dengan mudah dan efisien.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Building Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Building</h2>
                    <div class="d-flex justify-content-between align-items-center">
                        <p>List of Building</p>
                        <form action="{{ route('user.search') }}" method="get"
                            style="display: flex; flex-direction: row; align-items: center;">
                            <input class="form-control w-50 me-2" type="text" name="search"
                                placeholder="Search Building" value="{{ request()->query('search') }}">
                            <input class="button btn btn-warning" type="submit" value="Search">
                        </form>
                    </div>
                </div>


                <div class="row">
                    @foreach ($buildings as $building)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                            data-aos-delay="100">
                            <div class="icon-box">
                                <div class="image-container" data-aos="fade-left" data-aos-delay="100">
                                    <img src="{{ $building->image_path }}" class="img-fluid" alt="">
                                </div>
                                <h4><a href="">{{ $building->name }}</a></h4>
                                <p>{{ $building->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            </div>

        </section>
        <!-- End Building Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Check our Team</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('home_assets/img/team/team-1.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Fairus Inam Pratama</h4>
                                <span>NIM. 210605110095</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('home_assets/img/team/team-2.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Arneizha Biktarinanda</h4>
                                <span>NIM. 210605110100</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="{{ asset('home_assets/img/team/team-3.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Yudistira Ramadani</h4>
                                <span>NIM. 210605110123</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="{{ asset('home_assets/img/team/team-2.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Nafiah Nur Muttaqin</h4>
                                <span>NIM. 210605110127</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('home_assets/img/team/team-2.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Wanda Levia Dwi Safitr</h4>
                                <span>NIM. 210605110141</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>GEOUINMA-2<span>.</span></h3>
                            <p>
                                Jl. Ir. Soekarno No. 1, Dadaprejo, Kecamatan Junrejo<br>
                                Batu, Jawa Timur<br><br>
                                <strong>Phone :</strong> +62 845 5678 0921<br>
                                <strong>Email :</strong> geouinma2@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>GEOUINMA-2</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">Kelompok 3</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('home_assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('home_assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('home_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('home_assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('home_assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('home_assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('home_assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('home_assets/js/main.js') }}"></script>

</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#feed01" />
    <title>KAIN PELANGI</title>
    <link rel="shortcut icon" href="{{ url('public') }}/assets/images/logo/logo.ico">
    <meta name="author" content="Themezinho">
    <meta name="description" content="For all kind of exhibition museum website">
    <meta name="keywords" content="wandau, exhibition, museum, art, history, entry, ticket, contemporary, modern, booking, visit, culture, life, centuries, roots, fancy, themezinho">

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="Wandau | Art & History Museum">
    <meta property="og:image" content="http://www.themezinho.net/wandau/preview.png">
    <meta property="og:site_name" content="wandau">
    <meta property="og:title" content="wandau">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.themezinho.net/wandau">

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@wandau">
    <meta name="twitter:creator" content="@wandau">
    <meta name="twitter:title" content="wandau">
    <meta name="twitter:description" content="Wandau | Art & History Museum">
    <meta name="twitter:image" content="http://www.themezinho.net/wandau/preview.png">

    <!-- FAVICON FILES -->
    <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
    <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
    <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
    <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
    <link href="ico/favicon.png" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ url('public') }}/frontview/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/frontview/css/odometer.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/frontview/css/fancybox.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/frontview/css/swiper.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/frontview/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/frontview/css/style.css">

    <!-- page css -->
    <!-- <link href="{{ url('public') }}/assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet"> -->

    <!-- Core css -->
    <!-- <link href="{{ url('public') }}/assets/css/app.min.css" rel="stylesheet"> -->

    <style>
        .page-header {
            position: relative;
            background-size: cover;
            background-position: center;
            color: white;
            /* Optional: warna teks putih agar kontras dengan background gelap */
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Overlay hitam dengan opasitas 50% */
            z-index: 1;
        }

        .page-header>* {
            position: relative;
            z-index: 2;
            /* Konten di atas overlay */
        }

        body {
            margin: 0;
            padding: 0;
            height: 2000px;
            /* For scrolling purpose */
        }

        .navbar-custom {
            transition: background-color 0.3s ease;
            background-color: #000;
            /* Default color */
        }

        .navbar-transparent {
            background-color: transparent !important;
        }

        .smooth-scroll {
            padding-top: 50px;
            /* Adjust if needed to prevent content from being hidden under the navbar */
        }
    </style>

</head>

<body>
    <div class="preloader" id="preloader">
        <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
            <path d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z">
            </path>
        </svg>
        <div class="inner">
            <canvas class="progress-bar" id="progress-bar" width="200" height="200"></canvas>
            <figure><img src="{{ url('public') }}/assets/images/logo/logo.png" alt="Image"></figure>
            <small>Loading</small>
        </div>
        <!-- end inner -->
    </div>
    <!-- end preloder -->
    <div class="page-transition">
        <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
            <path d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z">
            </path>
        </svg>
    </div>
    <x-section.navbar />
    <!-- end page-transition -->
    <div class="smooth-scroll">
        <div class="section-wrapper" data-scroll-section>
            <div class="search-box">
                <div class="container">
                    <div class="form">
                        <h3>SEARCH EVENT</h3>
                        <input type="search" placeholder="What are you looking for ?">
                        <input type="submit" value="SEARCH">
                    </div>
                    <!-- end form -->
                    <div class="search-events">
                        <ul>
                            <li>
                                <h5><a href="#">Artemisia Gentileschi talk with Maria</a></h5>
                                <small>15 August – 31 October 2020</small>
                            </li>
                            <li>
                                <h5><a href="#">Artemisia Gentileschi talk with Maria</a></h5>
                                <small>15 August – 31 October 2020</small>
                            </li>
                            <li>
                                <h5><a href="#">Artemisia Gentileschi talk with Maria</a></h5>
                                <small>15 August – 31 October 2020</small>
                            </li>
                        </ul>
                    </div>
                    <!-- end search-events -->
                </div>
            </div>
            <!-- end search-box -->
            <aside class="side-widget">
                <svg viewBox="0 0 600 1080" preserveAspectRatio="none" version="1.1">
                    <path d="M540,1080H0V0h540c0,179.85,0,359.7,0,539.54C540,719.7,540,899.85,540,1080z"></path>
                </svg>
                <figure class="logo"> <img src="{{ url('public') }}/assets/images/logo/kain.png" alt="Image">
                </figure>
                <!-- end logo -->
                <div class="inner">
                    <div class="widget">
                        <figure><img src="{{ url('public') }}/frontview/images/Gallery.jpg" alt="Image"></figure>
                        <p>deskripsi Kain Pelangi</p>
                        <!-- <p>
                            Kain Pelangi adalah wastra asal Ketapang, Kalimantan Barat yang dibuat dari nilai-nilai
                            tradisi Keraton Matan Tanjungpura. Disebut kain pelangi karena wastra ini memiliki banyak
                            warna yang cerah. Pada awalnya tradisi melangi dibuat dengan perwarnaan alami dari kulit
                            kayu dan umbi-umbian. Motif kain pelangi menggunakan pola geomtris, bunga, daun dan suluran
                            yang dibuat sedemikian rupa. Kain pelangi ini diproduksi kembali dengan makna baru tanpa meninggalkan
                            nilai-nilai tradisi yang telah diwariskan.
                        </p> -->
                    </div>
                    <!-- end widget -->
                    <div class="widget">
                        <h6 class="widget-title">Opening Hours</h6>
                        <p>Tuesday ‒ Friday: 09:00 ‒ 17:00<br>
                            Friday ‒ Monday: 10:00 ‒ 20:00</p>
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end inner -->
                <div class="display-mobile">
                    <div class="custom-menu">
                        <ul>
                            <li><a href="#">Eng</a></li>
                            <li><a href="#">Rus</a></li>
                        </ul>
                    </div>
                    <!-- end custom-menu -->
                    <div class="site-menu">
                        <ul>
                            <li><a href="visit.html">Beranda</a></li>
                            <li><a href="{{ url('sejarah') }}">Sejarah</a></li>
                            <li><a href="collections.html">Collections</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <!-- end site-menu -->
                </div>
                <!-- end display-mobile -->
            </aside>

            <!-- end navbar -->
            <!-- end slider -->
            <main>

                {{ $slot }}
                <!-- end content-section -->
                <x-section.footer />
                <!-- end footer -->
            </main>

        </div>
    </div>

    <!-- JS FILES -->
    <script src="{{ url('public') }}/frontview/js/jquery.min.js"></script>
    <script src="{{ url('public') }}/frontview/js/bootstrap.min.js"></script>
    <script src="{{ url('public') }}/frontview/js/gsap.min.js"></script>
    <script src="{{ url('public') }}/frontview/js/locomotive-scroll.min.js"></script>
    <script src="{{ url('public') }}/frontview/js/ScrollTrigger.min.js"></script>
    <script src="{{ url('public') }}/frontview/js/kinetic-slider.js"></script>
    <script src="{{ url('public') }}/frontview/js/fancybox.min.js"></script>
    <script src="{{ url('public') }}/frontview/js/odometer.min.js"></script>
    <script src="{{ url('public') }}/frontview/js/swiper.min.js"></script>
    <script src="{{ url('public') }}/frontview/js/scripts.js"></script>
    <!-- Core Vendors JS -->
    <script src="{{ url('public') }}/assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="{{ url('public') }}/assets/vendors/select2/select2.min.js"></script>
    <script src="{{ url('public') }}/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="{{ url('public') }}/assets/js/pages/dashboard-default.js"></script>
    <script src="{{ url('public') }}/assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('public') }}/assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script src="{{ url('public') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

    <!-- Summernote -->
    <script src="{{ url('public') }}/assets/plugins/summernote/summernote-bs4.min.js"></script>

    <!-- Core JS -->
    <script src="{{ url('public') }}/assets/js/app.min.js"></script>

    <script>
        $(document).on('click', '.detail-trigger', function(event) {
            event.preventDefault();
            var id = $(this).data('id');
            var nama = $(this).data('nama');
            var deskripsi = $(this).data('deskripsi');

            var modal = $('#detailModal');
            modal.find('.modal-title').text('Detail Produk ' + nama);
            modal.find('#modalNama').text(nama);
            modal.find('#modalDeskripsi').text(deskripsi);
            modal.modal('show');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar-custom');
                if (window.scrollY > 50) {
                    navbar.classList.add('navbar-dark-bg');
                } else {
                    navbar.classList.remove('navbar-dark-bg');
                }
            });
        });
    </script>
</body>

</html>
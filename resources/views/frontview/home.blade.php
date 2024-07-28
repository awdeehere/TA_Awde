<x-base>
    <header class="slider">
        <div class="swiper-container slider-images">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-background="{{ url('/') }}/frontview/images/1.jpg">
                    <div class="mobile-slide" data-background="{{ url('/') }}/frontview/images/slide-mobile01.jpg">
                    </div>
                </div>
                <div class="swiper-slide" data-background="{{ url('/') }}/frontview/images/2.jpg">
                    <div class="mobile-slide" data-background="{{ url('/') }}/frontview/images/slide-mobile02.jpg">
                    </div>
                </div>
                <div class="swiper-slide" data-background="{{ url('/') }}/frontview/images/Gallery.jpg">
                    <div class="mobile-slide" data-background="{{ url('/') }}/frontview/images/slide-mobile03.jpg">
                    </div>
                </div>
            </div>
            <!-- end swiper-wrapper -->
            <div class="container-fluid slider-nav">
                <div class="swiper-pagination"></div>
                <!-- end swiper-pagination -->
                <div class="swiper-fraction"></div>
                <!-- end swiper-fraction -->
                <div class="button-prev"><i class="far fa-chevron-down"></i></div>
                <!-- end swiper-button-prev -->
                <div class="button-next"><i class="far fa-chevron-up"></i></div>
                <!-- end swiper-button-next -->
            </div>
            <!-- end slider-nav -->
        </div>
        <!-- end slider-images -->
        <div class="swiper-container slider-texts">
            <svg width="580" height="400" class="svg-morph">
                <path id="svg_morph" d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
            </svg>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <h1 style="color: rgb(0, 0, 0);">KAIN <br>PELANGI </h1>
                        <p style="color: rgb(0, 0, 0);">Wastra Kraton Matan Tanjungpura</p>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <h1 style="color: rgb(0, 0, 0);">KAIN <br>PELANGI </h1>
                        <p>Memperkuat Identitas Budaya Lokal <br>
                            Warna, Cinta, dan Harmoni</p>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <h1 style="color: rgb(0, 0, 0);">KAIN <br>PELANGI </h1>
                        <p>Kekayaan Warisan Leluhur Kita,<br>
                            Cerminan Sejarah Ketapang</p>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->
        </div>
        <!-- end slider-texts -->
        <div class="play-now"> <a href="https://youtu.be/o7Mg9ImyUoI?si=em1L2SzN5bcCdBak" data-fancybox data-width="640" data-height="360" class="play-btn"></a>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                <defs>
                    <path id="circlePath" d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                </defs>
                <circle cx="150" cy="100" r="75" fill="none" />
                <g>
                    <use xlink:href="#circlePath" fill="none" />
                    <text>
                        <textPath xlink:href="#circlePath">PUTAR SEKARANG - PUTAR SEKARANG - PUTAR SEKARANG</textPath>
                    </text>
                </g>
            </svg>
        </div>
        <!-- end play-now -->
    </header>
    <!-- Data Produk Populer -->
    <section class="content-section" data-background="#fffbf7">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3>Kain Pelangi Ketapang: <br> Warisan Budaya Penuh Warna</h3>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <div class="col-lg-7">
                    <figure class="image-box" data-scroll data-scroll-speed="-1"> <img src="{{ url('/') }}/images/nage.jpg" alt="Image">
                    </figure>
                </div>
                <!-- end col-7 -->
                <div class="col-lg-5">
                    <div class="side-icon-list right-side">
                        <ul>
                            <li>
                                <figure> <img src="{{ url('/') }}/frontview/images/icon01.png" alt="Image">
                                </figure>
                                <div class="content">
                                    <h5>Jam Buka</h5>
                                    <p>Setiap Hari<br>
                                        Jam : 11.00-19.00 WIB</p>
                                </div>
                                <!-- end content -->
                            </li>
                            <li>
                                <figure> <img src="{{ url('/') }}/frontview/images/icon02.png" alt="Image">
                                </figure>
                                <div class="content">
                                    <h5>Book Online</h5>
                                    <p>Some exhibitions and events carry <br>
                                        a separate charge</p>
                                    <a href="#">Join Now and Book Online</a>
                                </div>
                                <!-- end content -->
                            </li>
                            <li>
                                <figure> <img src="{{ url('/') }}/frontview/images/icon03.png" alt="Image">
                                </figure>
                                <div class="content">
                                    <h5>Alamat Kami</h5>
                                    <p>Jalan Merak No. 9<br>
                                        Ketapang Kalimantan Barat 78813</p>
                                </div>
                                <!-- end content -->
                            </li>
                        </ul>
                    </div>
                    <!-- end side-icon-list -->
                </div>
                <!-- end col-5 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Data Pengrajim -->
    <section class="content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title">

                        <h2>Produk Populer</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-9 -->
                <div class="col-lg-3"></div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="exhibition-box" data-scroll data-scroll-speed="-1">
                        <figure> <a href="#"><img src="{{ url('/') }}/frontview/images/event01.jpg" alt="Image" class="img"></a>
                            <div class="info">
                                <figure class="i"><img src="{{ url('/') }}/frontview/images/icon-info.png" alt="Image"></figure>
                                <span>50% off exhibitions</span>
                            </div>
                            <!-- end info -->
                        </figure>
                        <div class="content-box">
                            <h4><a href="#">Artemisia Gentileschi
                                    talk with Maria</a></h4>
                            <p> 15 August – 31 October 2020 </p>
                        </div>
                        <!-- end content-box -->
                    </div>
                    <!-- end exhibition-box -->
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="exhibition-box" data-scroll data-scroll-speed="1">
                        <figure> <a href="#"><img src="{{ url('/') }}/frontview/images/event02.jpg" alt="Image" class="img"></a>
                            <div class="info">
                                <figure class="i"><img src="{{ url('/') }}/frontview/images/icon-info.png" alt="Image"></figure>
                                <span>50% off exhibitions</span>
                            </div>
                            <!-- end info -->
                        </figure>
                        <div class="content-box">
                            <h4><a href="#">Arctic culture and
                                    climate Exhibition</a></h4>
                            <p> 22 Oct 2020 - 21 Feb 2021</p>
                        </div>
                        <!-- end content-box -->
                    </div>
                    <!-- end exhibition-box -->
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="exhibition-box" data-scroll data-scroll-speed="-0.5">
                        <figure> <a href="#"><img src="{{ url('/') }}/frontview/images/event03.jpg" alt="Image" class="img"></a>
                            <div class="info">
                                <figure class="i"><img src="{{ url('/') }}/frontview/images/icon-info.png" alt="Image"></figure>
                                <span>50% off exhibitions</span>
                            </div>
                            <!-- end info -->
                        </figure>
                        <div class="content-box">
                            <h4><a href="#">Thomas Becket murder and
                                    the making of a saint</a></h4>
                            <p> 22 Apr 2021 - 22 Aug 2021</p>
                        </div>
                        <!-- end content-box -->
                    </div>
                    <!-- end exhibition-box -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section no-bottom-spacing bottom-white" data-background="#fffbf7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <figure><img src="{{ url('/') }}/assets/images/logo/logo.png" alt="Image">
                        </figure>
                        <h2>Warisan Budaya Abad Sembilan Belas</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <div class="col-lg-4 col-md-6">
                    <div class="text-content" data-scroll data-scroll-speed="-1">
                        <h6>The challenge</h6>
                        <p>In the 1980s, “the UK’s national
                            museums faced political pressure
                            from the <strong>Conservative</strong> government
                            to charge for admission, to make
                            them less dependent on
                            government funding".</p>
                    </div>
                    <!-- end text-content -->
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="text-content" data-scroll data-scroll-speed="0.5">
                        <h6>The initiative</h6>
                        <p>In 1997, the new Labour government
                            made a commitment to reinstate
                            free entry for <strong>national</strong> museums in
                            order to have a more diverse range
                            of visitors. “Following a campaign
                            led by the museums themselves, </p>
                    </div>
                    <!-- end text-content -->
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="text-content" data-scroll data-scroll-speed="1">
                        <h6>The impact</h6>
                        <p>The national museums which
                            dropped charges all saw <strong>substantial</strong> increases to their
                            visitor numbers, an average of
                            70 percent. In the first year after
                            free admission was introduced
                            visitor figures.</p>
                    </div>
                    <!-- end text-content -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="clearfix spacing-100"></div>
        <div class="horizontal-scroll">
            <div class="scroll-inner" data-scroll data-scroll-direction="horizontal" data-scroll-speed="5">
                <div class="scroll-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="{{ url('/') }}/frontview/images/image01.jpg" alt="Image">
                                </figure>
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-4 offset-md-1">
                                <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="{{ url('/') }}/frontview/images/image02.jpg" alt="Image">
                                </figure>
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-2 offset-md-1">
                                <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="{{ url('/') }}/frontview/images/image03.jpg" alt="Image">
                                </figure>
                            </div>
                            <!-- end col-3 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end scroll-wrapper -->
                <div class="scroll-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="{{ url('/') }}/frontview/images/image01.jpg" alt="Image">
                                </figure>
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-4 offset-md-1">
                                <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="{{ url('/') }}/frontview/images/image02.jpg" alt="Image">
                                </figure>
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-2 offset-md-1">
                                <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="{{ url('/') }}/frontview/images/image03.jpg" alt="Image">
                                </figure>
                            </div>
                            <!-- end col-3 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- end scroll-wrapper -->
            </div>
            <!-- end scroll-inner -->
        </div>
        <!-- end horizontal-scroll -->
    </section>
    <!-- end content-section -->
    <!-- end content-section -->
    <!-- end content-section -->

    <section class="content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <figure><img src="{{ url('/') }}/assets/images/logo/logo.png" alt="Image">
                        </figure>
                        <h6>Dapatkan Pembaruan dan Berita Terkini</h6>
                        <h2>Berita Terbaru</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="container">
            <div class="row">
                @foreach ($artikel as $index => $artikel)
                <div class="col-12">
                    <div class="recent-news">
                        <div class="content-box"> <small>{{ $artikel->tanggal }}</small>
                            <h3>{{ $artikel->judul }}</h3>
                            <a href="{{ url('artikel', $artikel->slug) }}" class="custom-link">Lanjutkan Membaca</a>
                        </div>
                        <!-- end content-box -->
                        @php
                        // Tentukan nilai data-scroll-speed, -1 untuk index ganjil, 1 untuk index genap
                        $scrollSpeed = ($index % 2 == 0) ? 1 : -1;
                        @endphp
                        <figure data-scroll data-scroll-speed="{{ $scrollSpeed }}">
                            <img src="{{ asset($artikel->thumbnail) }}" alt="Image">
                        </figure>
                    </div>
                    <!-- end recent-news -->
                </div>
                @endforeach
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
</x-base>
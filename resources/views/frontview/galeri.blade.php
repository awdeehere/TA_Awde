<x-base>
    <header class="slider">
        <div class="swiper-container slider-images">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-background="{{ url('public') }}/frontview/images/carousel-1.jpg">
                    <div class="mobile-slide" data-background="{{ url('public') }}/frontview/images/carousel-1.jpg">
                    </div>
                </div>
                <div class="swiper-slide" data-background="{{ url('public') }}/frontview/images/carousel-2.jpg">
                    <div class="mobile-slide" data-background="{{ url('public') }}/frontview/images/carousel-2.jpg">
                    </div>
                </div>
                <div class="swiper-slide" data-background="{{ url('public') }}/frontview/images/carousel-3.jpg">
                    <div class="mobile-slide" data-background="{{ url('public') }}/frontview/images/carousel-3.jpg">
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
                <path id="svg_morph"
                    d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
            </svg>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <h1 style="color: rgb(0, 0, 0);">Galeri <br> Kain Pelangi</h1>
                        <p style="color: rgb(0, 0, 0);">Wastra Kraton Matan Tanjungpura</p>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <h1 style="color: rgb(0, 0, 0);">Galeri <br> Kain Pelangi</h1>
                        <p style="color: rgb(0, 0, 0);">Memperkuat Identitas Budaya Lokal <br>
                            Warna, Cinta, dan Harmoni</p>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <h1 style="color: rgb(0, 0, 0);">Galeri <br> Kain Pelangi</h1>
                        <p style="color: rgb(0, 0, 0);"> Kekayaan Warisan Leluhur Kita,<br>
                            Cerminan Sejarah Ketapang</p>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->
        </div>
        <!-- end slider-texts -->
        <div class="play-now" style="color: rgb(255, 255, 255);"> <a
                href="https://youtu.be/o7Mg9ImyUoI?si=em1L2SzN5bcCdBak" data-fancybox data-width="640" data-height="360"
                class="play-btn"></a>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300"
                xml:space="preserve">
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

    <!-- Penghargaan -->
    <section class="content-section" data-background="#000" style="padding: 20px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="section-title text-center" style="padding: 20px;">
                    <figure><img src="{{ url('public') }}/assets/images/logo/logo.png" alt="Image"></figure>
                    <h3 style="color : #ffc107; font-family: 'Cinzel';">Penghargaan yang Telah Didapatkan</h3>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                @foreach ($penghargaan as $index => $p)
                    <div class="col-lg-4 col-md-6">
                        <div class="image-content-box" data-scroll data-scroll-speed="{{ ($index % 5) + 1 }}">
                            <figure>
                                <img src="{{ url('public') }}/{{ $p->foto }}" alt="Image">
                            </figure>
                            <div class="content-box" data-background="#ffc107" style="padding: 15px;">
                                <h3>{{ $p->nama }}</h3>
                                <p><strong>{{ $p->tahun }}</strong></p>
                            </div>
                            <!-- end content-box -->
                        </div>
                        <!-- end image-content-box -->
                    </div>
                @endforeach
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    

    <!-- Pengrajin -->
    <section class="content-section no-bottom-spacing" data-background="#000">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <figure><img src="{{ url('public') }}/assets/images/logo/logo.png" alt="Image"></figure>
                        {{-- <h6>Visit the National Wandau Museum</h6> --}}
                        <h3 style="color : #ffc107; font-family: 'Cinzel';">Berkenalan dengan Para Pengrajin</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            @foreach ($pengrajin as $index => $p)
                <div class="row g-0">
                    <div class="col-lg-4">
                        <div class="image-icon-box" data-scroll data-scroll-speed="{{ ($index % 5) + 1 }}">
                            {{-- <figure class="icon"></figure> --}}
                            <figure class="content-image">
                                <img src="{{ url('public') }}/{{ $p->foto }}" alt="Image">
                            </figure>
                            <div class="content-box" style="background-color : #ffc107">
                                <b>{{ sprintf('%02d', $index + 1) }}.</b>
                                <h4>{{ $p->nama }}</h4>
                                <div class="expand">
                                    <p>{{ strip_tags($p->deskripsi) }}</p>
                                    {{-- <a href="#" class="custom-link">Learn More</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-base>

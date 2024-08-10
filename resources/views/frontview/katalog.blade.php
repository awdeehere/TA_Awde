<x-base>
    <header class="slider">
        <div class="swiper-container slider-images">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-background="{{ url('public') }}/frontview/images/produk-1.jpg">
                    <div class="mobile-slide" data-background="{{ url('public') }}/frontview/images/produk-1.jpg">
                    </div>
                </div>
                <div class="swiper-slide" data-background="{{ url('public') }}/frontview/images/produk-2.jpg">
                    <div class="mobile-slide" data-background="{{ url('public') }}/frontview/images/produk-2.jpg">
                    </div>
                </div>
                <div class="swiper-slide" data-background="{{ url('public') }}/frontview/images/produk-3.jpg">
                    <div class="mobile-slide" data-background="{{ url('public') }}/frontview/images/produk-3.jpg">
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
                        <h1 style="color: rgb(0, 0, 0);">Katalog <br> Kain Pelangi</h1>
                        <p style="color: rgb(0, 0, 0);">Wastra Kraton Matan Tanjungpura</p>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <h1 style="color: rgb(0, 0, 0);">Katalog <br> Kain Pelangi</h1>
                        <p style="color: rgb(0, 0, 0);">Memperkuat Identitas Budaya Lokal <br>
                            Warna, Cinta, dan Harmoni</p>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <h1 style="color: rgb(0, 0, 0);">Katalog <br> Kain Pelangi</h1>
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
    <!-- end page-header -->
    <section class="content-section" data-background="#000">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <figure><img src="{{ url('public') }}/assets/images/logo/logo.png" alt="Image"></figure>
                        <h2 style="color : #ffc107; font-family: 'Cinzel';">Produk Kain Pelangi</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($produk as $index => $p)
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-box" data-scroll data-scroll-speed="{{ ($index % 5) + 1 }}">
                            <div id="carousel{{ $index }}" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @foreach ($p->carousels as $index => $carousel)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}"
                                            class="{{ $index == 0 ? 'active' : '' }}"></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner">
                                    @foreach ($p->carousels as $index => $carousel)
                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                            <img src="{{ url('public') }}/{{ $carousel->foto }}"
                                                alt="{{ $carousel->alt_text }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $p->id }}">
                            <h4 class="mt-3">{{ $p->nama_motif }}</h4>
                        </a> -->
                            <h4 class="mt-3">
                                <a href="#" style="color: #ffc107;" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{ $p->id }}">
                                    {{ $p->nama_motif }}
                                </a>
                            </h4>
                            <p style="color : #ffff; font-size: 23px;">{{ $p->hak_cipta }}</p>
                        </div>
                        <!-- end collection-box -->
                    </div>
                @endforeach
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
</x-base>

<!-- Modal -->
@foreach ($produk as $index => $p)
    <div class="modal fade" id="exampleModal{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content" style="background-color: #000; border: 2px solid #ffc107;">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="carouselExampleIndicators{{ $p->id }}" class="carousel slide"
                                    data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @foreach ($p->carousels as $index => $carousel)
                                            <li data-target="#carouselExampleIndicators{{ $p->id }}"
                                                data-slide-to="{{ $index }}"
                                                class="{{ $index == 0 ? 'active' : '' }}"></li>
                                        @endforeach
                                    </ol>
                                    <div class="carousel-inner">
                                        @foreach ($p->carousels as $index => $carousel)
                                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                <img class="d-block w-100"
                                                    src="{{ url('public') }}/{{ $carousel->foto }}"
                                                    alt="{{ $carousel->alt_text }}">
                                            </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev"
                                        href="#carouselExampleIndicators{{ $p->id }}" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-custom-icon" aria-hidden="true">
                                            <i class="fas fa-chevron-left"></i>
                                        </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next"
                                        href="#carouselExampleIndicators{{ $p->id }}" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-custom-icon" aria-hidden="true">
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h2 class="font-weight-bold" style="font-family: 'Cinzel', serif; color: #FFD700;">
                                    {{ $p->nama_motif }}</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <dt class="font-weight-bold" style="color: #FFD700;">HAK CIPTA</dt>
                                        <dd style="color: #FFF;">{{ $p->hak_cipta }}</dd>
                                        <dt class="font-weight-bold" style="color: #FFD700;">WARNA</dt>
                                        <dd style="color: #FFF;">{{ $p->warna }}</dd>
                                        <dt class="font-weight-bold" style="color: #FFD700;">LEBAR KAIN</dt>
                                        <dd style="color: #FFF;">{{ $p->lebar_kain }}</dd>
                                        <dt class="font-weight-bold" style="color: #FFD700;">JENIS PRODUK</dt>
                                        <dd style="color: #FFF;">{{ $p->jenis_produk }}</dd>
                                    </div>
                                    <div class="col-md-12">
                                        <dt class="font-weight-bold" style="color: #FFD700;">CARA PERAWATAN</dt>
                                        <dd style="color: #FFF;">{{ strip_tags($p->cara_perawatan) }}</dd>
                                        <dt class="font-weight-bold" style="color: #FFD700;">DESKRIPSI</dt>
                                        <dd style="color: #FFF;">{{ strip_tags($p->deskripsi) }}</dd>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

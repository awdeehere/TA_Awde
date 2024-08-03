<x-base>
    <header class="page-header" data-background="{{ url('public') }}/frontview/images/3.jpg">
        <div class="inner">
            <svg width="580" height="400" class="svg-morph">
                <path id="svg_morph"
                    d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
            </svg>
            <h1>Galeri</h1>
            <p>Selamat datang di galeri kain pelangi kami. Temukan keindahan dan keragaman warna dalam setiap helai kain
                yang kami tawarkan. Nikmati koleksi eksklusif kami yang memadukan seni dan kualitas dalam setiap
                detailnya.</p>
        </div>
        <!-- end inner -->
    </header>
    <!-- Penghargaan -->

    <section class="content-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <div class="text-box">
                        <h2>Penghargaan</h2>
                        <p></p>
                    </div>
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
                            <div class="content-box">
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

    <section class="content-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <div class="text-box">
                        <h2>Pengrajin</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                @foreach ($pengrajin as $index => $p)
                    <div class="col-lg-4 col-md-6">
                        <div class="image-content-box" data-scroll data-scroll-speed="{{ ($index % 5) + 1 }}">
                            <figure>
                                <img src="{{ url($p->foto) }}" alt="Image">
                            </figure>
                            <div class="content-box">
                                <h3>{{ $p->nama }}</h3>
                                <p><strong>{{ $p->deskripsi }}</strong></p>
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
    <!-- end content-section -->
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-box">
                        <h3>Collection Details</h3>
                        <p>This exhibition is a rare chance to experience two of Yayoi Kusama’s Infinity Mirror Rooms.
                            These
                            immersive installations will transport you into Kusama’s unique vision of endless
                            reflections.</p>

                        <p>Infinity Mirrored Room – Filled with the Brilliance of Life is one of Kusama’s largest
                            installations
                            to date and was made for her 2012 retrospective at the gallery. It is shown alongside
                            Chandelier of
                            Grief, a room which creates the illusion of a boundless universe of rotating crystal
                            chandeliers. </p>

                        <p>A small presentation of photographs – some on display for the first time – provides
                            historical
                            context for the global phenomenon that Kusama’s mirrored rooms have become today.</p>
                    </div>
                    <!-- end text-box -->
                </div>
                <!--end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
</x-base>

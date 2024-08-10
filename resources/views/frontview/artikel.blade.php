<x-base>
    <header class="page-header" data-background="{{ url('public') }}/images/galeri.jpg" alt="Image">
        <div class="inner">
          <svg width="580" height="400" class="svg-morph">
            <path id="svg_morph" d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
          </svg>
          <h1>Artikel</h1>
          <p>For the latest updates about reopening, booking tickets and what's happening at the Museum, sign up to our newsletter</p>
        </div>
        <!-- end inner --> 
      </header>
    <!-- end page-header -->
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-post">
                        <figure data-scroll data-scroll-speed="-1"><img
                                src="{{ url('public') }}/{{ $artikel->thumbnail }}" alt="Image">
                        </figure>
                        <div class="content-box"> <small> {{ $artikel->tanggal }} </small>
                            <h3 style="text-align: center;"> {{ $artikel->judul }} </h3>
                            <dd style="color: #FFF;">{{ strip_tags($artikel->konten) }}</dd>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>

    <!-- JS FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="js/locomotive-scroll.min.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <script src="js/kinetic-slider.js"></script>
    <script src="js/fancybox.min.js"></script>
    <script src="js/odometer.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/scripts.js"></script>
    </body>
</x-base>

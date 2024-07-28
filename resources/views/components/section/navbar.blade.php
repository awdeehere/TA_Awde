<nav class="navbar navbar-expand-lg fixed-top navbar-custom " style="background-color:black">
    <div class="logo"> <a href="index.html"> <img src="{{ url('/') }}/assets/images/logo/kain.png" alt="Image"> </a>
    </div>
    <!-- end logo -->
    <div class="custom-menu">
        <ul>
            <li><a href="#"> </a></li>
            <li><a href="#"> </a></li>
        </ul>
    </div>
    <!-- end custom-menu -->
    <div class="site-menu">
        <ul>
            <li><a href="{{ url('home') }}" style="color: #FDCC05">Beranda</a></li>
            <!-- <li><a href="{{ url('home') }}">Beranda</a></li> -->
            <li><a href="{{ url('galeri') }}" style="color: #FDCC05">Galeri</a></li>
            <li><a href="{{ url('katalog') }}" style="color: #FDCC05">Katalog</a></li>
            <li><a href="{{ url('about') }}" style="color: #FDCC05">Tentang Kami</a></li>
        </ul>
    </div>
    <!-- end site-menu -->
    <div class="search-button" style="color: #FDCC05"> <i class="far fa-search"></i> </div>
    <!-- end search-button -->
    <div class="hamburger-menu">
        <svg class="hamburger" width="30" height="30" viewBox="0 0 30 30">
            <path class="line line-top" d="M0,9h30" />
            <path class="line line-center" d="M0,15h30" />
            <path class="line line-bottom" d="M0,21h30" />
        </svg>
    </div>
    <!-- end hamburger-menu -->
    <!-- <div class="navbar-button"> <a href="membership.html">KUIS</a> </div> -->
    <!-- end navbar-button -->
</nav>
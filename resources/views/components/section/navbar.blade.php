<nav class="navbar navbar-expand-lg fixed-top navbar-custom " style="background-color:black">
    <div class="logo"> <a href="index.html"> <img src="{{ url('public') }}/assets/images/logo/kain.png" alt="Image"> </a>
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
            <li>
                <a href="{{ url('home') }}" 
                   class="{{ request()->is('home') ? 'active' : '' }}" 
                   style="color: #FDCC05">Beranda</a>
            </li>
            <li>
                <a href="{{ url('galeri') }}" 
                   class="{{ request()->is('galeri') ? 'active' : '' }}" 
                   style="color: #FDCC05">Galeri</a>
            </li>
            <li>
                <a href="{{ url('katalog') }}" 
                   class="{{ request()->is('katalog') ? 'active' : '' }}" 
                   style="color: #FDCC05">Katalog</a>
            </li>
            <li>
                <a href="{{ url('info') }}" 
                   class="{{ request()->is('info') ? 'active' : '' }}" 
                   style="color: #FDCC05">Apa Itu Kain Pelangi?</a>
            </li>
            <li>
                <a href="{{ url('about') }}" 
                   class="{{ request()->is('about') ? 'active' : '' }}" 
                   style="color: #FDCC05">Tentang Kami</a>
            </li>
        </ul>
    </div>
    
    {{-- <!-- end site-menu -->
    <div class="search-button" style="color: #FDCC05"> <i class="far fa-search"></i> </div>
    <!-- end search-button --> --}}
    
    <div class="hamburger-menu">
        <svg class="hamburger" width="30" height="30" viewBox="0 0 30 30">
            <path class="line line-top" d="M0,9h30" />
            <path class="line line-center" d="M0,15h30" />
            <path class="line line-bottom" d="M0,21h30" />
        </svg>
    </div>
</nav>
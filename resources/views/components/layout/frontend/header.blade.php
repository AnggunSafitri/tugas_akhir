<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="#" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ url('public') }}/assets/img/webe.png" alt="">
            <h1>Yayasan WeBe<span>.</span></h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <x-layout.frontend.header.menu-item label="WeBeranda" url="webenest" />
                <x-layout.frontend.header.menu-item label="WeBerita" url="weberita" />
                <x-layout.frontend.header.menu-item label="GiatWebe" url="giat_webe" />
                <x-layout.frontend.header.menu-item label="Profil" url="profil" />
                <x-layout.frontend.header.menu-item label="Kontak" url="kontak" />
                
                <x-layout.frontend.header.menu-item label="Anggota!" url="login" />
              
            </ul>
        </nav><!-- .navbar -->

    </div>
</header>

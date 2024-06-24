

<aside class="main-sidebar sidebar-dark-light elevation-4 position-fixed" style="background-color: #1450a3">
    <a href="index3.html" class="brand-link" style="background-color: #accdf1; color:#114279">
        <img src="{{ url('public') }}/dist/img/custom/logo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">Yayasan WeBe</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('public') }}/dist/img/custom/user1.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#"
                    class="d-block">{{ auth()->check() ? auth()->user()->nama : 'Pengguna Tidak Terotentikasi' }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                @if (Auth::guard('anggota')->user())
                    <x-layout.sidebar.menu-item url="anggota/dashboard" label="Dashboard" icon="fas fa-th" />
                    <x-layout.sidebar.menu-item url="anggota/berita-anggota" label="Berita" icon="fas fa-book" />
                    <x-layout.sidebar.menu-item url="anggota/giat-anggota" label="Giat" icon="fas fa-copy" />
                @endif
                @if (Auth::guard('admin')->user())
                    <x-layout.sidebar.menu-item url="admin/dashboard" label="Dashboard" icon="fas fa-th" />
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Master Data
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <x-layout.sidebar.menu-item url="admin/admin" label="Admin" icon="fas fa-circle" />
                            <x-layout.sidebar.menu-item url="admin/anggota" label="Anggota" icon="fas fa-circle" />
                        </ul>
                    </li>
                    <x-layout.sidebar.menu-item url="admin/berita" label="Berita" icon="fas fa-book" />
                    <x-layout.sidebar.menu-item url="admin/giat" label="Giat" icon="fas fa-copy" />
                    <x-layout.sidebar.menu-item url="admin/profil" label="Profil" icon="fas fa-user" />
                    <x-layout.sidebar.menu-item url="admin/kontak" label="Kontak" icon="fas fa-phone-volume" />
                @endif

            </ul>
        </nav>
    </div>
</aside>

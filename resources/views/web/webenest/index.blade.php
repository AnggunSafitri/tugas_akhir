<x-front>
    @include('menu.menu')
    <style>
        .hero .carousel-item::before {
            content: "";
            background-color: rgba(0, 0, 0, 0.377);
            position: absolute;
            inset: 0;
        }
    </style>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down">Selamat Datang Di <span>Yayasan WeBe</span></h2>
                        <p data-aos="fade-up">Mari Mengenal Lebih Dekat Mengenai Yayasan WeBe</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="{{ url('profil') }}"
                            class="btn-get-started">Profil Yayasan</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active"
                style="background-image: url({{ url('public') }}/assets/img/hero-carousel/dugong.jpg)">
            </div>
            <div class="carousel-item"
                style="background-image: url({{ url('public') }}/assets/img/hero-carousel/lautt.jpg)">
            </div>
            <div class="carousel-item"
                style="background-image: url({{ url('public') }}/assets/img/hero-carousel/pelapis.jpg)">
            </div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- End Hero Section -->
    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Giat WeBe</h2>
                <p>Giat WeBe adalah salah satu kegiatan utama yang diadakan oleh Yayasan WeBe</p>
            </div>

            <div class="row gy-4">
                @foreach ($list_giat as $giat)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card-bg"
                                        style="background-image: url({{ url("public/$giat->foto") }});">
                                    </div>
                                </div>
                                
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $giat->nama }}</h4>
                                        <p class="deskripsi" style=" ">{{ $giat->deskripsi }}</p>
                                        <a href="{{ url('giat_webe', $giat->id) }}" class="readmore stretched-link">Baca
                                            Selengkapnya</a>
                                    </div>
                              
                            </div>
                        </div>
                        <style>
                            .deskripsi {
                                display: -webkit-box;
                                -webkit-line-clamp: 2;
                                -webkit-box-orient: vertical;
                                overflow: hidden;
                                /* white-space:nowrap; text-overflow:ellipsis; overflow:hidden; max-width:200px; */
                            }
                        </style>
                    </div><!-- End Card Item -->
                @endforeach
            </div>

        </div>
    </section><!-- End Constructions Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">



            <div class=" section-header">
                <h2>WeBerita</h2>
                <p>WeBerita adalah salah satu insiatif dari Yayasan weBe yang berfokus pada penyebaran informasi
                    dan berita terkait dengan kegiatan Yayasan WeBe</p>
            </div>

            <div class="row gy-5">
                @foreach ($list_berita as $berita)
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ url("public/$berita->foto") }}"
                                    style="height:350px; width:500px; background-size: cover;" class="img-fluid"
                                    alt="">
                                <span class="post-date">{{ $berita->tanggal }}</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">{{ $berita->judul }}</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span
                                            class="ps-2">{{ $berita->anggota->nama }}</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Webe</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="{{ url('weberita', $berita->id) }}" class="readmore stretched-link"><span>Baca
                                        Selengkapnya</span><i class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->
                @endforeach
            </div>

        </div>
    </section>
    <!-- End Recent Blog Posts Section -->
</x-front>

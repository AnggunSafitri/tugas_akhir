<x-front>

    <x-layout.frontend.breadcrumbs menu="Berita" gambar="pondok.jpg" />
    @include('menu.menu')
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">
            <div class=" section-header">
                <h2>WeBerita</h2>
                <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
            </div>



            <div class="row gy-5">
                @foreach ($list_berita->where('status', '2') as $berita)
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden" style="height:50%;">
                                <img src="{{ url("public/$berita->foto") }}" class="img-fluid" alt="">
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

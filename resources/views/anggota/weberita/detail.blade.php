<x-anggota title="Berita | Detail">
    <x-layout.anggota.breadcrumbs menu="Berita Detail" gambar="dugong.jpg" />
    @include('menu.menu')
    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-5">

                <div class="col-lg-8">

                    <article class="blog-details">

                        <div class="post-img">
                            <img src="{{ url("public/$berita->foto") }}" alt="" class="img-fluid">
                        </div>

                        <h2 class="title">{{ $berita->judul }}</h2>

                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                                    <a>{{ $berita->anggota->nama }}</a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                    <a>{{ $berita->tanggal_string }}</a>
                                </li>
                            </ul>
                        </div><!-- End meta top -->

                        <div class="content">
                            <p>
                                {{ $berita->deskripsi }}
                            </p>
                        </div><!-- End post content -->

                    </article><!-- End blog post -->


                </div>

                <div class="col-lg-4">

                    <div class="sidebar">

                        <div class="sidebar-item recent-posts">
                            <h3 class="sidebar-title">Berita Terbaru</h3>

                            <div class="mt-3">
                                @foreach ($list_berita->where('status', '2') as $berita)
                                    @if (Auth::guard('anggota')->user()->id == $berita->id_anggota)
                                        <div class="post-item mt-3">
                                            <img src="{{ url("public/$berita->foto") }}" alt="">
                                            <div>
                                                <h4><a
                                                        href="{{ url('anggota/weberita', $berita->id) }}">{{ $berita->judul }}</a>
                                                </h4>
                                                <time datetime="">{{ $berita->tanggal }}</time>
                                            </div>
                                        </div><!-- End recent post item-->
                                    @endif
                                @endforeach
                               
                            </div>

                        </div><!-- End sidebar recent posts-->


                    </div><!-- End Blog Sidebar -->

                </div>
            </div>

        </div>
    </section><!-- End Blog Details Section -->
    </x-frontend>

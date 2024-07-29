<x-anggota>
    <x-layout.anggota.breadcrumbs menu="Giat" gambar="pelapis.jpg"/>
    @include('menu.menu')
        <!-- ======= Constructions Section ======= -->
        <section id="constructions" class="constructions">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Giat WeBe</h2>
                    <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt
                        quis dolorem
                        dolore earum</p>
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
                                            <a href="{{ url('anggota/giat_webe', $giat->id) }}" class="readmore stretched-link">Baca
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
</x-front>
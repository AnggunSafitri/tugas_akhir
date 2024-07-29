<x-anggota>
    @include('menu.menu')
    <x-layout.anggota.breadcrumbs menu="Profil" gambar="biru.jpg" />
    <!-- ======= Service Details Section ======= -->
    <main id="main">
        <!-- ======= Alt Services Section ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">
                @foreach ($list_profil as $profil)
                    <div class="row justify-content-around gy-4">
                        <div class="col-md-6">
                            <div class="" style="background-image: url(assets/img/alt-services.jpg);"
                                data-aos="zoom-in" data-aos-delay="100">
                                <img src="{{ url("public/$profil->foto") }}"
                                    style=" height: 95%; width: 100%; background-size: cover;" alt="">
                            </div>
                        </div>
                        {{-- <div class="col-md-6"> --}}

                        <div class="col-lg-6 d-flex flex-column justify-content-center">
                            <h3 class="post-title">{{ $profil->nama }}</h3>
                            <p>{{ $profil->deskripsi }}</p>
                            <p>{{ $profil->sejarah }}</p>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-patch-check flex-shrink-0"></i>
                                <div>
                                    <h4><a href="" class="stretched-link">Pengalaman</a></h4>
                                    <span>{!!nl2br ($profil->experience)!!}</span>
                                </div>
                            </div><!-- End Icon Box -->
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-patch-check flex-shrink-0"></i>
                                <div>
                                    <h4><a href="" class="stretched-link">Proyek</a></h4>
                                    <span>{!!nl2br ($profil->project)!!}</span>
                                </div>
                            </div><!-- End Icon Box -->

                        </div>
                    </div>
                @endforeach

            </div>
        </section><!-- End Alt Services Section -->
    </main>
    {{-- <section id="service-details" class="service-details">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            @foreach ($list_profil as $profil)
                <div class="row">

                    <div class="col-lg-8">
                        <img src="{{url("public/$profil->foto")}}" alt=""
                            class="img-fluid services-img">

                        <h3 class="post-title">{{$profil->nama}}</h3>
                        <p>{{$profil->deskripsi}}</p>
                        <ul>
                            <h1>
                                Pengalaman
                            </h1>
                            <li><i></i> <span>{!!nl2br ($profil->experience)!!}</span>
                            </li>
                            <h1>
                                proyek
                            </h1>
                            <li><i></i> <span>{!!nl2br ($profil->project)!!}</span>
                            </li>
                        </ul>
                        <p>{{$profil->sejarah}}</p>
                    </div>

                </div>
            @endforeach
        </div>
    </section><!-- End Service Details Section --> --}}
</x-front>

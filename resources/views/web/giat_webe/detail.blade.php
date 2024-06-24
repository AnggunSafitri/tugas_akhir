<x-front>
    <x-layout.frontend.breadcrumbs menu="Giat" gambar="pelapis.jpg" />
    @include('menu.menu')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row position-relative">
                <div class="col-lg-7 about-img" style="background-image: url('{{ url("public/$giat->foto") }}');"></div>

                <div class="col-lg-7">
                    <h2 class="card-title">{{$giat->nama}}</h2>
                    <div class="our-story">
                        
                        <h3><span class="post-date">{{$giat->tanggal}}</span></h3>
                        <p>{{$giat->deskripsi}}</p>
                       
                        <div class="watch-video d-flex align-items-center position-relative">
                            <i class="bi bi-play-circle"></i>
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch
                                Video</a>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <br><br><br>
    <!-- End About Section -->
</x-front>

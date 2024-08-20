<x-anggota>

    <x-layout.anggota.breadcrumbs menu="Berita" gambar="pondok.jpg" />
    @include('menu.menu')
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">
            <div class=" section-header">
                <h2>WeBerita</h2>
                <p>WeBerita adalah salah satu insiatif dari Yayasan weBe yang berfokus pada penyebaran informasi
                    dan berita terkait dengan kegiatan Yayasan WeBe</p>
            </div>
            @if (auth()->guard('anggota')->check())
                <div class="col-lg-12">


                    <div class="form-group row mb-0 mt-4">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modaltambahberita">
                                <span class="fa fa-plus"></span> Tambah Berita
                            </button>
                        </div>
                    </div>

                </div>
                <hr>
            @endif


            <div class="row gy-5">
                @foreach ($list_berita->where('status', '2') as $berita)
                    @if (Auth::guard('anggota')->user()->id == $berita->id_anggota)
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

                                    <a href="{{ url('anggota/weberita', $berita->id) }}"
                                        class="readmore stretched-link"><span>Baca
                                            Selengkapnya</span><i class="bi bi-arrow-right"></i></a>

                                </div>

                            </div>
                        </div><!-- End post item -->
                    @endif
                @endforeach
            </div>

        </div>
    </section>
    <!-- End Recent Blog Posts Section -->

    <div class="modal fade" id="modaltambahberita" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Berita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form method="POST" action="{{ url('anggota/weberita') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="fileInput">Judul Berita :</label>
                                <input type="text" class="form-control" name="judul" placeholder="Judul Berita"
                                    required>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="basic-url" class="form-label">Gambar</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="foto" id="basic-url"
                                            aria-describedby="basic-addon3 basic-addon4" accept=".jpg, .png, .jpeg">
                                        <span class="input-group-text" id="basic-addon3">Masukkan Gambar Berita</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 mt-4">
                                <label for="fileInput">Deskripsikan :</label>
                                <textarea class="form-control" name="deskripsi" id="summernote" required> </textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 mt-4">
                                <label for="fileInput">Link Video :</label>
                                <input name="link_youtube" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal"> Batal</button>
                        <button class="btn btn-primary"> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
   

    {{-- @push('script')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    @endpush
        <script>
            document.getElementById('showConfirmationModal').addEventListener('click', function() {
                $('#confirmationModal').modal('show');
            });
        
            document.getElementById('confirmSave').addEventListener('click', function() {
                var confirmationCode = document.getElementById('confirmationCode').value;
                if (confirmationCode === "kode yang benar") { // Ganti dengan logika verifikasi kode yang sesuai
                    document.getElementById('newsForm').submit();
                } else {
                    alert('Kode konfirmasi salah.');
                }
            });
        </script> --}}
    </x-front>

<x-anggota>

    <x-layout.anggota.breadcrumbs menu="Berita" gambar="pondok.jpg" />
    @include('menu.menu')
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">
            <div class=" section-header">
                <h2>WeBerita</h2>
                <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
            </div>
            @if (auth()->guard('anggota')->check())
                <div class="col-lg-12">
                    <form method="POST" action="{{ url('weberita') }}" id="newsForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="fileInput">Judul Berita :</label>
                                <input type="text" class="form-control" name="judul" placeholder="Judul Berita"
                                    required>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="basic-url" class="form-label">Sah Lupak Poto nye</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="foto" id="basic-url"
                                            aria-describedby="basic-addon3 basic-addon4" accept=".jpg, .png, .jpeg">
                                        <span class="input-group-text" id="basic-addon3">Masukan Aam Poto nye</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 mt-4">
                                <label for="fileInput">Deskripsikan :</label>
                                <textarea name="deskripsi" class="form-control summernote" required> </textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-4">
                            <div class="col-sm-12">
                                <button class="btn btn-primary float-end" data-toggle="modal"
                                    data-target="#confirmationModal"><span class="fa fa-save"></span> Simpan</button>
                            </div>
                        </div>
                    </form>
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

    <!-- Modal Konfirmasi -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog"
        aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi Simpan Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="confirmationCode">Masukkan Kode Konfirmasi:</label>
                        <input type="text" class="form-control" id="confirmationCode" placeholder="Kode Konfirmasi"
                            required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="confirmSave">Simpan</button>
                </div>
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

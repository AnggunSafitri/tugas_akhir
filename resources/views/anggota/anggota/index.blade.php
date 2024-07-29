<x-anggota>
    <x-layout.anggota.breadcrumbs menu="Profil Anggota" gambar="pelapis.jpg" />
    @include('menu.menu')

    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mb-sm-5">
                    <div class="card card-style1 border-0">
                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                            <button type="button" class="btn btn-warning float-end" data-bs-toggle="modal"
                                data-bs-target="#modalEdit{{ $anggota->id }}">
                                <span class="fa fa-edit"></span> Edit
                            </button>

                            <div class="row align-items-center mt-3">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <img src="{{ url("public/$anggota->foto") }}"
                                        style="object-fit: cover; position: static; width: 50%;"
                                        onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                </div>
                                <div class="col-lg-6 px-xl-10">
                                    <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                        <h1 class="text-white mb-0">{{ $anggota->nama }}</h1>

                                    </div>

                                    <ul class="list-unstyled mb-1 mt-10" style="margin-top: 5%">
                                        <li class="mb-2 mb-xl-3 display-28"><span
                                                class="display-26 text-secondary me-2 font-weight-600">Username:</span>
                                            {{ $anggota->username }}</li>
                                        <li class="mb-2 mb-xl-3 display-28"><span
                                                class="display-26 text-secondary me-2 font-weight-600">Email:</span>
                                            {{ $anggota->username }}</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modalEdit{{ $anggota->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Anggota</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <form method="POST" action="{{ url('anggota/profil', $anggota->id) }}"
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-left">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $anggota->nama }}" class="form-control" name="nama">
                            </div>
                        </div>

                        <div class="form-group row mt-2">
                            <label class="col-sm-3 col-form-label text-left">Username</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $anggota->username }}" class="form-control" name="username">
                            </div>
                        </div>

                        <div class="form-group row mt-2">
                            <label class="col-sm-3 col-form-label text-left">Email</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $anggota->email }}" class="form-control" name="email">
                            </div>
                        </div>


                        <div class="form-group row mt-2">
                            <label class="col-sm-3 col-form-label text-left">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group row mt-2">
                            <label class="col-sm-3 col-form-label text-left">Poto</label>
                            <div class="col-md-4">
                                <img src="{{ url("public/$anggota->foto") }}"
                                style="object-fit: cover; position: static; width: 50%;"
                                onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                            </div>
                            <div class="col-sm-5">
                                <input type="file" value="{{ $anggota->foto }}" class="form-control" name="foto">
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
</x-front>

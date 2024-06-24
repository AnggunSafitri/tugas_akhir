<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail Berita</div>
            <x-button.back url="admin/berita" id="{{ $berita->id }}" />
            <a href="{{url('admin/berita', $berita->id)}}/edit" class="btn btn-warning float-right">
                <i class="fas fa-edit"></i>
                Edit 
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 order-2 order-md-1">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Foto </span>
                                    <img src="{{ url("public/$berita->foto") }}" style="width:auto; height:auto"
                                        onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 order-1 order-md-2">
                    <dt>Judul</dt>
                    <p class="text-black">{{ $berita->judul }}</p>
                    <dt>Tanggal</dt>
                    <p class="text-black">{{ $berita->tanggal }}</p>
                    <dt>Penulis Berita</dt>
                    <p class="text-black">{{ $berita->anggota->nama }}</p>
                    <dt>Deskripsi</dt>
                    <p class="text-black">{{ $berita->deskripsi }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app>

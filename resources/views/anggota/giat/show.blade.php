<x-app>
    <div class="card">
        <div class="card-header">
            <x-button.back url="anggota/giat-anggota"/>
            <div class="card-title">Detail Giat WeBe</div>
            <a href="{{url('anggota/giat-anggota', $giat->id)}}/edit" class="btn btn-warning float-right">
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
                                    <img src="{{ url("public/$giat->foto") }}" style="width:auto; height:auto"
                                        onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 order-1 order-md-2">
                    <dt>Nama</dt>
                    <p class="text-black">{{ $giat->nama }}</p>
                    <dt>Tanggal</dt>
                    <p class="text-black">{{ $giat->tanggal }}</p>
                    <dt>Penulis</dt>
                    <p class="text-black">{{ $giat->anggota->nama }}</p>
                    <dt>Deskripsi</dt>
                    <p class="text-black">{{ $giat->deskripsi }}</p>
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</x-app>

<x-app>
    <div class="card">
        <div class="card-header">
            <x-button.back url="admin/profil"/>
            <div class="card-title">Detail Profil WeBe</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 order-2 order-md-1">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Foto </span>
                                    <img src="{{ url("public/$profil->foto") }}" style="width:auto; height:auto"
                                        onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 order-1 order-md-2">
                    <dt>Nama</dt>
                    <p class="text-black">{{ $profil->nama }}</p>
                    <dt>Deskripsi</dt>
                    <p class="text-black">{{ $profil->deskripsi }}</p>
                    <dt>Sejarah</dt>
                    <p class="text-black">{{ $profil->sejarah }}</p>
                    <dt>Experience</dt>
                    <p class="text-black">{{ $profil->experience }}</p>
                    <dt>Project</dt>
                    <p class="text-black">{{ $profil->project }}</p>
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</x-app>

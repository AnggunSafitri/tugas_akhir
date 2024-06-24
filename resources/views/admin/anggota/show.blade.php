<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail Anggota</div>
            <x-button.back url="admin/anggota" id="{{ $anggota->id }}" />
            <a href="{{url('admin/anggota', $anggota->id)}}/edit" class="btn btn-warning float-right">
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
                                    <img src="{{ url("public/$anggota->foto") }}" style="width:auto; height:auto"
                                        onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 order-1 order-md-2">
                    <dt>Nama</dt>
                    <p class="text-black">{{ $anggota->nama }}</p>
                    <dt>Username</dt>
                    <p class="text-black">{{ $anggota->username }}</p>
                    <dt>Email</dt>
                    <p class="text-black">{{ $anggota->email }}</p>
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</x-app>

<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail Admin</div>
            <x-button.back url="admin/admin" id="{{ $admin->id }}" />
            <a href="{{url('admin/admin', $admin->id)}}/edit" class="btn btn-warning float-right">
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
                                    <img src="{{ url("public/$admin->foto") }}" style="width:auto; height:auto"
                                        onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 order-1 order-md-2">
                    <dt>Nama</dt>
                    <p class="text-black">{{ $admin->nama }}</p>
                    <dt>Username</dt>
                    <p class="text-black">{{ $admin->username }}</p>
                    <dt>Email</dt>
                    <p class="text-black">{{ $admin->email }}</p>
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</x-app>

<x-app>
    <div class="card">
        <div class="card-header">
            <x-button.back url="admin/admin"/>
            <div class="card-title">
                Edit Data Admin
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('admin/admin', $admin->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$admin->nama}}" class="form-control" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Username</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$admin->username}}" class="form-control" name="username">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Email</label>
                    <div class="col-sm-10">
                        <input type="email" value="{{$admin->email}}" class="form-control" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-sm-12">
                        <button class="btn btn-primary float-right"><span class="fa fa-save"></span>
                            Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app>
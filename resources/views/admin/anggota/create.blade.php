<x-app>
    <div class="card">
        <div class="card-header">
            <x-button.back url="admin/anggota"/>
            <div class="card-title">
                Tambah Data Anggota
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('admin/anggota')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama"
                            placeholder="Nama Anggota" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="username"
                            placeholder="Username Anggota" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email"
                            placeholder="Email Anggota" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password"
                            placeholder="Password Anggota" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg" required>
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
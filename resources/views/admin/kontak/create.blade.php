<x-app>
    <div class="card">
        <div class="card-header">
            <x-button.back url="admin/kontak"/>
            <div class="card-title">
                Tambah Data Kontak
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('admin/kontak')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama"
                            placeholder="Nama" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email"
                            placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Nomor HP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nohp"
                            placeholder="Nomor HP" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Link Instagram</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="link_ig"
                            placeholder="Link IG">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat"
                            placeholder="Alamat" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jabatan"
                            placeholder="Jabatan" required>
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
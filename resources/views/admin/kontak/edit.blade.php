<x-app>
    <div class="card">
        <div class="card-header">
            <x-button.back url="admin/kontak"/>
            <div class="card-title">
                Edit Data Kontak
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('admin/kontak', $kontak->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{ $kontak->nama }}" class="form-control" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Email</label>
                    <div class="col-sm-10">
                        <input type="email" value="{{ $kontak->email }}" class="form-control" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Nomor HP</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{ $kontak->nohp }}" class="form-control" name="nohp">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Link Instagram</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{ $kontak->link_ig }}" class="form-control" name="link_ig">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{ $kontak->alamat }}" class="form-control" name="alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{ $kontak->jabatan }}" class="form-control" name="jabatan">
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

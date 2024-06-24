<x-app>
    <div class="card">
        <div class="card-header">
            <x-button.back url="anggota/giat-anggota"/>
            <div class="card-title">
                Tambah Giat WeBe
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('anggota/giat-anggota')}}" enctype="multipart/form-data">
                @csrf
                <input type="text" name="id_anggota" value="{{Auth::guard('anggota')->user()->id}}" hidden>
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama"
                            placeholder="Nama Giat" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal"
                            placeholder="Tanggal Giat" required>
                    </div>
                </div>
               
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="deskripsi"
                            placeholder="Deskripsi Giat" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="foto" required>
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
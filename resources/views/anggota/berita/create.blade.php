<x-app>
    <div class="card">
        <div class="card-header">
            <x-button.back url="anggota/berita-anggota"/>
            <div class="card-title">
                Tambah Berita
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('anggota/berita-anggota')}}" enctype="multipart/form-data">
                @csrf
                <input type="text" name="id_anggota" value="{{Auth::guard('anggota')->user()->id}}" hidden>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="judul"
                            placeholder="Judul Berita" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal"
                            placeholder="Tanggal Berita" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="deskripsi"
                            placeholder="Deskripsi Berita" required>
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
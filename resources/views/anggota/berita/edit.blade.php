<x-app>
    <div class="card">
        <div class="card-header">
            <x-button.back url="anggota/berita-anggota"/>
            <div class="card-title">
                Edit Data Berita
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('anggota/berita-anggota', $berita->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$berita->judul}}" class="form-control" name="judul">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" value="{{$berita->tanggal}}" class="form-control" name="tanggal">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Penulis Giat</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$berita->anggota->nama}}" readonly class="form-control" name="penulis_giat">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$berita->deskripsi}}" class="form-control" name="deskripsi">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" value="{{$berita->foto}}" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
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
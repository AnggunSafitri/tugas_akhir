<x-app>
    <div class="card">
        <div class="card-header">
            <x-button.back url="anggota/giat-anggota"/>
            <div class="card-title">
                Edit Data Giat 
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('anggota/giat-anggota', $giat->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$giat->nama}}" class="form-control" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" value="{{$giat->tanggal}}" class="form-control" name="tanggal">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Penulis Giat</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$giat->anggota->nama}}" rea class="form-control" name="penulis_giat">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$giat->deskripsi}}" class="form-control" name="deskripsi">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" value="{{$giat->foto}}" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
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
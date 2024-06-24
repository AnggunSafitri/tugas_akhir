<x-app>
    <div class="card">
        <div class="card-header">
            <x-button.back url="admin/berita"/>
            <div class="card-title">
                Tambah Berita
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('admin/berita')}}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Penulis Berita</label>
                    <div class="col-sm-10">
                        <select name="id_anggota" class="form-control">
                            <option value=""> Pilih Anggota</option>
                            @foreach ($list_anggota as $anggota)
                                <option value="{{ $anggota->id }}">{{ $anggota->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

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
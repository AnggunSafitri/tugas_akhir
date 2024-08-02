<x-app>
    <div class="card">
        <div class="card-header">
            <x-button.back url="admin/profil"/>
            <div class="card-title">
                Edit Data Profil
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('admin/profil', $profil->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Nama Yayasan</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$profil->nama}}" class="form-control" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$profil->deskripsi}}" class="form-control" name="deskripsi">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Sejarah</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$profil->sejarah}}" class="form-control" name="sejarah">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Experience</label>
                    <div class="col-sm-10">
                        <textarea class="summernote" name="experience">{{$profil->experience}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Project</label>
                    <div class="col-sm-10">
                        <textarea class="summernote" name="project">{{$profil->project}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" value="{{$profil->foto}}" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
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
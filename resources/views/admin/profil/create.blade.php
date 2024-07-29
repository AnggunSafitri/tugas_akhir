<x-app>
    <div class="card">
        <div class="card-header">
            <x-button.back url="admin/profil"/>
            <div class="card-title">
                Tambah Profil
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('admin/profil')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Nama Yayasan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama"
                            placeholder="Nama Yayasan" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="deskripsi" id="" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Sejarah</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="sejarah" id="" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Experience</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="experience" id="" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Project</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="project" id="" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-left">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="foto"
                            placeholder="Foto" required>
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
<x-app>
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Tambah Berita WeBe
                    </h3>
                    <a href="{{ url('anggota/berita-anggota/create') }}" class="btn btn-primary float-right">
                        <i class="fas fa-plus">
                        </i>
                        Tambah Berita WeBe
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="100px">No</th>
                                <th width="150px">Aksi</th>
                                <th>Judul</th>
                                <th>Penulis Berita</th>
                                <th>Tanggal</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_berita as $berita)
                                <tr>
                                    <td class="text-center"> {{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-button.info url="anggota/berita-anggota" id="{{ $berita->id }}" />
                                            <x-button.edit url="anggota/berita-anggota" id="{{ $berita->id }}" />
                                            <x-button.delete id="{{ $berita->id }}" />
                                        </div>
                                    </td>
                                    <td class="text-center"> {{ $berita->judul }}</td>
                                    <td class="text-center"> {{ $berita->anggota->nama }}</td>
                                    <td class="text-center"> {{ $berita->tanggal }}</td>
                                    <td class="text-center" style="width: 20%">
                                        <img src="{{ url("public/$berita->foto") }}" style="width:30%; height:30%;"
                                            onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</x-app>

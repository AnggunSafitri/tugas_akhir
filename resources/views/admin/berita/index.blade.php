<x-app>
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Data Berita
                    </h4>
                    <a href="{{ url('admin/berita/create') }}" class="btn btn-primary float-right">
                        <i class="fas fa-plus">
                        </i>
                        Tambah Berita WeBe
                    </a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center" width="25%">Aksi</th>
                                <th class="text-center">Judul</th>
                                <th class="text-center">Penulis Berita</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Foto</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_berita as $berita)
                                <tr>
                                    <td class="text-center"> {{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-button.info url="admin/berita" id="{{ $berita->id }}" />
                                            <x-button.edit url="admin/berita" id="{{ $berita->id }}" />
                                            <x-button.delete id="{{ $berita->id }}" />


                                            @if ($berita->status == 2)
                                                <form action="{{ url('admin/berita/arsip', $berita->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn btn-secondary"><span
                                                            class="fa fa-archive"></span> Arsip</button>
                                                </form>
                                            @endif

                                            @if ($berita->status == 3)
                                                <form action="{{ url('admin/berita/post', $berita->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn btn-default"><span class="fa fa-check"></span> Publis
                                                    </button>
                                                </form>
                                            @endif

                                        </div>
                                    </td>
                                    <td class="text-center"> {{ $berita->judul }}</td>
                                    <td class="text-center"> {{ $berita->anggota->nama }}</td>
                                    <td class="text-center"> {{ date('d-M-Y', strtotime($berita->tanggal)) }}</td>
                                    <td class="text-center" style="width: 20%">
                                        <img src="{{ url("public/$berita->foto") }}" style="width:30%; height:30%;"
                                            onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>

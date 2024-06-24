<x-app>
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Data Giat WeBe
                    </h4>
                    <a href="{{ url('anggota/giat-anggota/create') }}" class="btn btn-primary float-right">
                        <i class="fas fa-plus">
                        </i>
                        Tambah Giat WeBe
                    </a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="100px">No</th>
                                <th width="150px">Aksi</th>
                                <th>Nama Giat</th>
                                <th>Penulis Giat</th>
                                <th>Tanggal</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_giat as $giat)
                                <tr>
                                    <td class="text-center"> {{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-button.info url="anggota/giat-anggota" id="{{ $giat->id }}" />
                                            <x-button.edit url="anggota/giat-anggota" id="{{ $giat->id }}" />
                                            <x-button.delete id="{{ $giat->id }}"/>
                                        </div>
                                    </td>
                                    <td class="text-center"> {{ $giat->nama }}</td>
                                    <td class="text-center"> {{ $giat->anggota->nama }}</td>
                                    <td class="text-center"> {{ $giat->tanggal }}</td>
                                    <td class="text-center" style="width: 20%">
                                        <img src="{{ url("public/$giat->foto") }}" style="width:30%; height:30%;"
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

<x-app>
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Data Anggota
                    </h4>
                    <a href="{{ url('admin/anggota/create') }}" class="btn btn-primary float-right">
                        <i class="fas fa-plus">
                        </i>
                        Tambah Anggota
                    </a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="100px">No</th>
                                <th width="150px">Aksi</th>
                                <th>Nama</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_anggota as $anggota)
                                <tr>
                                    <td class="text-center"> {{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-button.info url="admin/anggota" id="{{ $anggota->id }}" />
                                            <x-button.edit url="admin/anggota" id="{{ $anggota->id }}" />
                                            <x-button.delete id="{{ $anggota->id }}"/>
                                        </div>
                                    </td>
                                    <td class="text-center"> {{ $anggota->nama }}</td>
                                    <td class="text-center"> {{ $anggota->username }}</td>
                                    <td class="text-center"> {{ $anggota->email }}</td>
                                    <td class="text-center" style="width: 20%">
                                        <img src="{{ url("public/$anggota->foto") }}" style="width:30%; height:30%;"
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

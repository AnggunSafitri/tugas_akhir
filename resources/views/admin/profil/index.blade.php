<x-app>
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Data Profil
                    </h4>
                    <a href="{{ url('admin/profil/create') }}" class="btn btn-primary float-right">
                        <i class="fas fa-plus">
                        </i>
                        Tambah Data Profil
                    </a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="100px">No</th>
                                <th width="150px">Aksi</th>
                                <th>Nama Yayasan</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_profil as $profil)
                                <tr>
                                    <td class="text-center"> {{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-button.info url="admin/profil" id="{{ $profil->id }}" />
                                            <x-button.edit url="admin/profil" id="{{ $profil->id }}" />
                                            <x-button.delete id="{{ $profil->id }}"/>
                                        </div>
                                    </td>
                                    <td class="text-center"> {{ $profil->nama }}</td>
                                    <td class="text-center" style="width: 20%">
                                        <img src="{{ url("public/$profil->foto") }}" style="width:30%; height:30%;"
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

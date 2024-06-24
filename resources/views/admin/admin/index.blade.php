<x-app>
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Data Admin
                    </h4>
                    <a href="{{ url('admin/admin/create') }}" class="btn btn-primary float-right">
                        <i class="fas fa-plus">
                        </i>
                        Tambah Admin
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
                            @foreach ($list_admin as $admin)
                                <tr>
                                    <td class="text-center"> {{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-button.info url="admin/admin" id="{{ $admin->id }}" />
                                            <x-button.edit url="admin/admin" id="{{ $admin->id }}" />
                                            <x-button.delete id="{{ $admin->id }}"/>
                                        </div>
                                    </td>
                                    <td class="text-center"> {{ $admin->nama }}</td>
                                    <td class="text-center"> {{ $admin->username }}</td>
                                    <td class="text-center"> {{ $admin->email }}</td>
                                    <td class="text-center" style="width: 20%">
                                        <img src="{{ url("public/$admin->foto") }}" style="width:30%; height:30%;"
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

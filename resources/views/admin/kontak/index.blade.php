<x-app>
    <div class="row mt-10">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Data Kontak
                    </h4>
                    <a href="{{ url('admin/kontak/create') }}" class="btn btn-primary float-right">
                        <i class="fas fa-plus">
                        </i>
                        Tambah Data Kontak
                    </a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="100px">No</th>
                                <th width="150px">Aksi</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_kontak as $kontak)
                                <tr>
                                    <td class="text-center"> {{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-button.info url="admin/kontak" id="{{ $kontak->id }}" />
                                            <x-button.edit url="admin/kontak" id="{{ $kontak->id }}" />
                                            <x-button.delete id="{{ $kontak->id }}"/>
                                        </div>
                                    </td>
                                    <td class="text-center"> {{ $kontak->nama }}</td>
                                    <td class="text-center"> {{ $kontak->email }}</td>
                                    <td class="text-center"> {{ $kontak->jabatan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>

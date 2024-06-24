<x-app>
    <div class="card">
        <div class="card-header">
            <x-button.back url="admin/kontak" />
            <div class="card-title">Detail Kontak</div>
            <a href="{{ url('admin/kontak', $kontak->id) }}/edit" class="btn btn-warning float-right">
                <i class="fas fa-edit"></i>
                Edit
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 order-1 order-md-2">
                    <dt>Nama</dt>
                    <p class="text-black">{{ $kontak->nama }}</p>
                    <dt>Email</dt>
                    <p class="text-black">{{ $kontak->email }}</p>
                    <dt>No HP</dt>
                    <p class="text-black">{{ $kontak->nohp }}</p>
                    <dt>Link IG</dt>
                    <p class="text-black">{{ $kontak->link_ig }}</p>
                    <dt>Alamat</dt>
                    <p class="text-black">{{ $kontak->alamat }}</p>
                    <dt>Jabatan</dt>
                    <p class="text-black">{{ $kontak->jabatan }}</p>
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</x-app>

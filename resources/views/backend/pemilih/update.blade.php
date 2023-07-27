<x-be-layout active="pemilih" title="Update Pemilih" header="Ubah Data Pemilih" subheader="Halaman Ubah Data Pemilih">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="card-title mb-0">
                        <h4 class="mb-0">Silahkan Isi Form Dibawah</h4>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('pemilih') }}" class="btn btn-primary" role="button">Kembali</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">

                <div class="card-body">

                    <form class="form-horizontal" method="POST" action="{{ route('admin.pemilih.edit',  $pemilih) }}">
                        @csrf
                        @method('put')
                        @include('backend.pemilih._form', ['button' => "Simpan Data"])
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-be-layout>
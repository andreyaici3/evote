<x-be-layout active="paslon" title="Tambah paslon" header="Tambah Data paslon"
    subheader="Halaman Tambah Data paslon">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="card-title mb-0">
                        <h4 class="mb-0">Silahkan Isi Form Dibawah</h4>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('admin.paslon') }}" class="btn btn-primary" role="button">Kembali</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">

                <div class="card-body">

                    <form class="form-horizontal" method="POST" action="{{ route('admin.paslon') }}" enctype="multipart/form-data">
                        @csrf
                        @include('backend.paslon._form')
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-be-layout>

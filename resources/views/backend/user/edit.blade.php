<x-be-layout active="user" title="Edit User" header="Edit Data User" subheader="Halaman Edit Data User">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="card-title mb-0">
                        <h4 class="mb-0">Silahkan Isi Form Dibawah</h4>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('admin.user') }}" class="btn btn-primary" role="button">Kembali</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">

                <div class="card-body">

                    <form class="form-horizontal" method="POST" action="{{ route('admin.user.edit', $user->id) }}">
                        @csrf
                        @method('put')
                        @include('backend.user._form', ['button' => "Update"])
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-be-layout>
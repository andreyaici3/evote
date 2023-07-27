<div class="form-group row">
    <label class="control-label col-sm-3 align-self-center mb-0" for="nomor_urut">Nomor Urut Paslon:</label>
    <div class="col-sm-9">
        <input {{ $paslon->nomor_urut != '' ? "readonly" : '' }} type="number" value="{{ old('nomor_urut') ?? $paslon->nomor_urut }}"
            class="form-control @error('nomor_urut') is-invalid @endif" name='nomor_urut' id="nomor_urut" placeholder="Nomor Urut Pasangan">
        @error('nomor_urut')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="form-group
            row">
        <label class="control-label col-sm-3 align-self-center mb-0" for="nama_paslon">Nama Pasangan Calon:</label>
        <div class="col-sm-9">
            <input type="text" value="{{ old('nama_paslon') ?? $paslon->nama_paslon }}"
                class="form-control @error('nama_paslon') is-invalid @endif" name='nama_paslon' id="nama_paslon" placeholder="Nomor Urut Pasangan">
        @error('ni k')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<style>
    .ck-editor__editable {
    min-height: 400px;
}
</style>

<div class="form-group
                row">
            <label class="control-label col-sm-3 align-self-center mb-0" for="informasi_paslon">Informasi Paslon</label>
            <div class="col-sm-9">
                <script src="{{ asset('assets-be/vendor/ckeditor5/ckeditor.js') }}"></script>
                <textarea name="informasi_paslon" id="editor">{{ old('informasi_paslon') ?? $paslon->informasi_paslon }}</textarea>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#editor'))
                        .catch(error => {
                            console.error(error);
                        });
                </script>

                @error('informasi_paslon')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="form-group
                                        row">
            <label class="control-label col-sm-3 align-self-center mb-0" for="foto">Foto</label>
            <div class="col-sm-9">
                <div class="row">
                    @if (file_exists(public_path('assets/images/' . $paslon->foto)))
                        <div class="col-sm-3">
                            <img class="img-fluid" src="{{ asset('assets/images/' . $paslon->foto) }}" alt=""
                                srcset="">
                        </div>
                    @endif
                    <div class="col-sm-9">
                        <input value="{{ old('foto') ?? $paslon->foto }}" type="file"
                            class="form-control @error('foto') is-invalid @endif" name='foto' id="foto" placeholder="Silahkan Masukan Tempat Lahir">
        @error('foto')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
            </div>
        </div>
    </div>
</div>



<div class="form-group">
                        <button type="submit" class="btn btn-primary">{{ $button ?? 'Tambah' }}</button>
                        <button type="reset" class="btn btn-danger">cancel</button>
                    </div>

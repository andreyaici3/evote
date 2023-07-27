<div class="form-group row">
    <label class="control-label col-sm-3 align-self-center mb-0" for="nik">Nomor Induk
        Kependudukan:</label>
    <div class="col-sm-9">
        <input type="number" value="{{ old('nik') ?? $pemilih->nik }}" class="form-control @error('nik') is-invalid @endif" name='nik' id="nik" placeholder="Silahkan Masukan NIK (16 digit)">
        @error('nik')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="form-group
                                    row">
    <label class="control-label col-sm-3 align-self-center mb-0" for="nama_lengkap">Nama
        Lengkap</label>
    <div class="col-sm-9">
        <input  value="{{ old('nama_lengkap') ?? $pemilih->nama_lengkap }}" type="text" class="form-control @error('nama_lengkap') is-invalid @endif" name='nama_lengkap' id="nama_lengkap" placeholder="Silahkan Masukan Nama Lengkap">
        @error('nama_lengkap')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="form-group
                                        row">
    <label class="control-label col-sm-3 align-self-center mb-0" for="tempat_lahir">Tempat Lahir</label>
    <div class="col-sm-9">
        <input  value="{{ old('tempat_lahir') ?? $pemilih->tempat_lahir }}" type="text" class="form-control @error('tempat_lahir') is-invalid @endif"  name='tempat_lahir' id="tempat_lahir" placeholder="Silahkan Masukan Tempat Lahir">
        @error('tempat_lahir')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="form-group
                                            row">
    <label class="control-label col-sm-3 align-self-center mb-0" for="tanggal_lahir">Tempat Lahir</label>
    <div class="col-sm-9">
        <input type="date"  value="{{ old('tanggal_lahir') ?? $pemilih->tanggal_lahir }}" class="form-control @error('tanggal_lahir') is-invalid @endif" name='tanggal_lahir' id="tanggal_lahir" placeholder="Silahkan Masukan Tanggal Lahir">
        @error('tanggal_lahir')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="form-group
                                                row">
    <label class="control-label col-sm-3 align-self-center mb-0" for="alamat">Alamat</label>
    <div class="col-sm-9">
        <textarea name="alamat" id="alamat" rows="2" class="form-control @error('alamat') is-invalid @endif" placeholder="Silahkan Masukan Alamat Lengkap">{{ old('alamat') ?? $pemilih->alamat }}</textarea>

        @error('alamat')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="form-group
                                                    row">
    <label class="control-label col-sm-3 align-self-center mb-0" for="jenis_kelamin">Jenis Kelamin</label>
    <div class="col-sm-9">
        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @endif">
            <option value="">Silahkan Pilih</option>
            <option {{ (old('jenis_kelamin') ?? $pemilih->jenis_kelamin == "Laki-Laki") ? 'selected' : ""}} value="Laki-Laki">Laki - Laki</option>
            <option {{ (old('jenis_kelamin') ?? $pemilih->jenis_kelamin == "Perempuan") ? 'selected' : ""}} value="Perempuan">Perempuan</option>

        </select>

        @error('jenis_kelamin')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="form-group
                                            row">
    <label class="control-label col-sm-3 align-self-center mb-0" for="username">Username</label>
    <div class="col-sm-9">
        <input value="{{ old('username') ?? $pemilih->username }}" type="text" class="form-control @error('username') is-invalid @endif" name='username' id="username" placeholder="Silahkan Masukan Username">
        @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="form-group
                                            row">
    <label class="control-label col-sm-3 align-self-center mb-0" for="password">password</label>
    <div class="col-sm-9">
        <input value="{{ old('password') ?? $pemilih->password}}" type="password" class="form-control @error('password') is-invalid @endif" name='password' id="password" placeholder="Silahkan Masukan password">
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button ?? "Tambah" }}</button>
    <button type="reset" class="btn btn-danger">cancel</button>
</div>
<div class="form-group
                                    row">
    <label class="control-label col-sm-3 align-self-center mb-0" for="name">Nama
        Lengkap</label>
    <div class="col-sm-9">
        <input value="{{ old('name') ?? $user->name }}" type="text" class="form-control @error('name') is-invalid @endif" name='name' id="name" placeholder="Silahkan Masukan Nama Lengkap">
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="form-group
                                        row">
    <label class="control-label col-sm-3 align-self-center mb-0" for="email">Email</label>
    <div class="col-sm-9">
        <input value="{{ old('email') ?? $user->email }}" type="email" class="form-control @error('email') is-invalid @endif" name='email' id="email" placeholder="Silahkan Masukan Email">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="form-group
                                                    row">
    <label class="control-label col-sm-3 align-self-center mb-0" for="role">Jabatan</label>
    <div class="col-sm-9">
        <select name="role" id="role" class="form-control @error('role') is-invalid @endif">
            <option value="">Silahkan Pilih</option>
            <option {{ (old('role') ?? $user->role == "1") ? 'selected' : ""}} value="1">Superadmin</option>
            <option {{ (old('role') ?? $user->role == "2") ? 'selected' : ""}} value="2">Panitia</option>
        </select>

        @error('role')
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
        <input value="{{ old('password') ?? $user->password}}" type="password" class="form-control @error('password') is-invalid @endif" name='password' id="password" placeholder="Silahkan Masukan password">
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
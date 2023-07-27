<style>
    input[type='radio'] {
        width: 50px;
        height: 50px;
    }
</style>

<div class="row">
    <div class="col-sm-12">
        <h1>Voting</h1>
        <h5>Segera Voting Pasangan Calon Terbaik Menurut Kamu</h5>
    </div>
</div>
<br>

<form action="" method="POST">
@csrf
<div class="row">
    @foreach ($paslons as $key)
        <div class="col-md-4">
            <div class="card pt-4 pb-4">
                <h2 class="card-title text-center">{{ $key->nomor_urut }}</h2>
                <div class="card-body">
                    <img src="{{ asset('assets/images/' . $key->foto) }}" class="img-fluid" alt="" srcset="">
                    <h3 class="text-center">{{ $key->nama_paslon }}</h3>
                    <br>
                    <div class="text-center">
                        <input type="radio" name="pilihan" value="{{ $key->id }}">
                    </div>
                    <p class="text-center">Klik Pilihan Diatas</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
<br><br>
<div class="row">
    <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-success">VOTING SEKARANG</button>
    </div>
</div>

</form>
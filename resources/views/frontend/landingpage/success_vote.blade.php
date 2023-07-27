<x-fe-layout>

    <!-- ======= Team Section ======= -->
    <section class="team" style="margin-top: 50px !important;">
        <div class="container">

            
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-success text-center pt-4 pb-4">
                        <h3><strong>Kamu Telah Memilih</strong></h3>
                        <p>Pilihan Kamu</p>
                        <img src="{{ asset('assets/images/' . $paslon->foto) }}" alt="" srcset="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <a href="{{ route('home') }}" class="btn btn-success">HOME</a>
            </div>
        </div>
    </section>
</x-fe-layout>
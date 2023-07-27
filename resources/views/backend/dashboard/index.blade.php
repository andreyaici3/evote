<x-be-layout active="dashboard" title="Dashboard" header="Halaman Utama"
    subheader="Selamat Datang Di Halaman Utama Admin">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="card" data-aos="fade-up" data-aos-delay="900">
                        <div class="flex-wrap card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">REKAPITULASI PEMILU</h4>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive mt-4">
                                <table id="basic-table" class="table table-striped mb-0" role="grid">
                                    <thead>
                                        <tr>
                                            <th>Nama Paslon</th>
                                            <th>Nomor Urut</th>


                                            <th>Graphic</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['dataGraph'] as $key)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img class="rounded img-fluid avatar-40 me-3 bg-soft-primary"
                                                            src="{{ asset('assets/images/' . $key['foto']) }}"
                                                            alt="profile" loading="lazy" />
                                                        <h6>{{ $key['name'] }}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="iq-media-group iq-media-group-1">

                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">
                                                                {{ $key['nomor_urut'] }}</div>
                                                        </a>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="d-flex align-items-center mb-2">
                                                        <h6>{{ number_format((float) ((100 / count($data['pemilih'])) * $key['count']), 2, '.', '') }}%
                                                        </h6>
                                                    </div>
                                                    <div class="progress bg-soft-info shadow-none w-100"
                                                        style="height: 6px">
                                                        <div class="progress-bar bg-danger" data-toggle="progress-bar"
                                                            role="progressbar"
                                                            aria-valuenow="{{ (100 / count($data['pemilih'])) * $key['count'] }}"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-12">
            <div class="row">
                <div class="col-md-3 col-xl-3 align-items-end">
                    <a href="{{ route('report') }}" class="btn btn-primary">Cetak Berita Acara</a>
                    <a href="" class="btn btn-danger">Reset Hasil Pemilihan</a>
                </div>
                
            </div>
        </div>

    </div>
</x-be-layout>

<x-fe-layout>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid">

            <div class="row">
                <center>
                    <h2>HASIL PEROLEHAN SEMENTARA</h2>
                </center>
                <center>
                    <div class="col-xl-5 col-lg-5 icon-boxes d-flex flex-column align-items-center justify-content-center py-5 px-lg-5"
                        data-aos="fade-left">
                        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
                            crossorigin="anonymous"></script>
                        <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
                        <script>
                            $(document).ready(function() {
                                $.getJSON('{{ URL::to('/api/v1/voting/result') }}', function(data) {
                                    datasheh = data.map(function(e) {
                                        return {
                                            data: [e.count],
                                            label: e.name,
                                            borderColor: e.borderColor,
                                            backgroundColor: e.backgroundColor,
                                            fill: e.fill
                                        }


                                    });

                                    var ctx = $("#chart-line");
                                    
                                    var myLineChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: [],
                                            datasets: datasheh
                                        },
                                        options: {
                                            title: {
                                                display: true,
                                                text: 'Pemilihan Kepala Daerah Desa RWH Studio'
                                            },
                                            scaleShowValues: true,
                                        }
                                    });
                                });


                            });
                        </script>

                        <canvas id="chart-line" width="299" height="200" class="chartjs-render-monitor"
                            style="display: block; width: 299px; height: 200px;"></canvas>
                    </div>
                </center>
            </div>

        </div>
    </section><!-- End About Section -->


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row" data-aos="fade-up">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $statistik['pemilih'] }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Pemilih</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $statistik['paslon'] }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Paslon</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $statistik['vote'] }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hak Suara Terpakai</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $statistik['non_vote'] }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hak Suara Belum Terpakai</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Paslon</h2>
                <p>PASANGAN CALON KEPALA DAERAH 2023</p>
            </div>

            <div class="row" data-aos="fade-left">

                @foreach ($statistik['paslon1'] as $key => $value)
                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="{{ asset('assets/images/' . $value->foto) }}"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ $value->nomor_urut }}</h4>
                                <span>{{ $value->nama_paslon }}</span>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets-fe/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                rhoncus.
                                Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at
                                semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets-fe/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                cillum
                                eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
                                culpa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets-fe/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                duis
                                minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets-fe/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                minim
                                velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore
                                illum
                                veniam.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets-fe/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                veniam
                                enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
                                nisi cillum quid.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->




    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>F.A.Q</h2>
                <p>Frequently Asked Questions</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                            data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i
                                class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                non.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc?
                            <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                velit
                                laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                pretium.
                                Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa
                                tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit?
                            <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                pulvinar
                                elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus
                                pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at
                                elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam
                            sem et
                            tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                adipiscing
                                bibendum est. Purus gravida quis blandit turpis cursus in.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius
                            vel
                            pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                integer
                                malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem
                                dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End F.A.Q Section -->



</x-fe-layout>

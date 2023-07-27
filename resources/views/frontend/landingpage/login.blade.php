<x-fe-layout>

    <!-- ======= Team Section ======= -->
    <section class="team" style="margin-top: 50px !important;">
        <div class="container">

            <div class="row">
                <div class="card pt-4 px-4 py-4 pb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-fluid" height="50%" src="{{ asset('assets-fe/img/vote.jpg') }}"
                                alt="" srcset="">
                        </div>
                        <div class="col-md-6">
                            <main class="form-signin">
                                <form action="{{ route('user.login') }}" method="POST">
                                    @csrf
                                    <h1 class="h3 mb-3 fw-normal">Silahkan Masukan Username Dan Password</h1>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingInput" value="corine62" name="username"
                                            placeholder="username">
                                        <label for="floatingInput">Username</label>
                                    </div>
                                    <div class="form-floating mt-4 mb-3">
                                        <input type="password" class="form-control" id="floatingPassword"
                                            placeholder="Password" name="password" value="12345">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                                </form>
                            </main>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    
    </section><!-- End Team Section -->
</x-fe-layout>

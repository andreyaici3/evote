<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent"
    style="background-color: rgba(1, 4, 136, 0.9) !important;">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="{{ route('home') }}"><span>PILKADA</span></a></h1>
            
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('home') }}#about">Quick Count</a></li>
                <li><a class="nav-link scrollto" href="{{ route('home') }}#counts">Statistik</a></li>
                <li><a class="nav-link scrollto" href="{{ route('home') }}#team">Paslon</a></li>
                <li><a class="nav-link scrollto" href="{{ route('vote') }}">Voting</a></li>
                <li><a class="nav-link scrollto" href="{{ route('home') }}#faq">FAQ</a></li>
                @if (!Request()->session()->has('loginPemilih'))
                    <li><a class="nav-link scrollto" href="{{ route('user.login') }}"><span
                                style="padding: 10px; border-radius: 20px; background: green; color: white">Login
                                Pemilih</span></a></li>
                    <li><a class="nav-link scrollto" href="{{ route('auth.admin.login') }}"><span
                                style="padding: 10px; border-radius: 20px; background: red; color: white">Login Admin /
                                Panitia</span></a></li>
                @endif

                @if (Request()->session()->has('loginPemilih'))
                    <form action="{{ route('auth.user.logout') }}" method="post" class="ms-4">
                    @csrf
                        <li>
                            <button type="submit" class="btn btn-success">
                                logout
                            </button>
                        </li>
                    </form>
                @endif

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

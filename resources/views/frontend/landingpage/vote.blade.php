<x-fe-layout>

    <!-- ======= Team Section ======= -->
    <section class="team" style="margin-top: 50px !important;">
        <div class="container">
            @if(Request()->session()->has('loginPemilih'))
                @include('frontend.vote.authorized');
            @endif

            @if(!Request()->session()->has('loginPemilih'))
                @include('frontend.vote.non_authorized');
            @endif

            
        </div>
    </section>
</x-fe-layout>
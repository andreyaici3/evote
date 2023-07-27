<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend/_meta')
</head>

<body>



    <x-fe-navbar>

    </x-fe-navbar>

    @if(request()->route()->getName() == "home")
        @include('components/frontend/_hero')
    @endif


    <main id="main">

        {{ $slot }}

    </main><!-- End #main -->

    <x-fe-footer></x-fe-footer>

    @include('frontend/_foot')

</body>

</html>
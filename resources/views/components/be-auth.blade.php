<!doctype html>
<html lang="en" dir="ltr">

<head>

    @include('components.backend._meta')

</head>

<body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    {{ $slot }}

    @include('components.backend._footer-lib')

</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <title>Homepage</title>

    {{-- Cdn Css Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- link icon --}}
    <link rel="icon" href="{{ asset('imagesCompressed/logo69.png') }}" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+HU:wght@100..400&display=swap');
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
    </style>

</head>

<body>

    {{-- Component Navbar --}}
    @include('user.componentUser.componentPartials.navbarUser')

    {{-- Component Banner --}}
    @include('user.componentUser.componentHomepage.componentBannerUser')

    {{-- Component About us --}}
    @include('user.componentUser.componentHomepage.componentAboutUser')

    {{-- Component Menu --}}
    @include('user.componentUser.componentHomepage.componentMenuUser')

    {{-- Component Testimoni --}}
    @include('user.componentUser.componentHomepage.componentFaqUser')

    {{-- Component Contact --}}
    @include('user.componentUser.componentHomepage.componentContactUser')

    {{-- Component Footer --}}
    @include('user.componentUser.componentPartials.footerUser')

    {{-- CDN Js Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

</body>

</html>

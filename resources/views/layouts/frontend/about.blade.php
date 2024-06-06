<!doctype html>
<html lang="en">

<style>
    body {
        background-image: url("/fe/aboutimg/aboutbg.png");
        background-position: center;
        background-size: cover;
        background-position-y: 0px;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VALCHAMPS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <!-- css include costum -->
    <link rel="stylesheet" href="{{ asset('fe/css/galcontact.css') }}">


    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- icon font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
        integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon"
        href="https://cdn.discordapp.com/attachments/1033638139706748939/1067764568417378395/VCT_logo.png"
        type="image/x-icon">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
        <div class="container mb-5">
            <a class="navbar-brand" href="/">
                <!-- <img src={{ asset('img/VCT_logo.png') }} alt="Bootstrap" width="40"> -->
                <img src="https://cdn.discordapp.com/attachments/1033638139706748939/1067764568417378395/VCT_logo.png"
                    alt="Bootstrap" width="40">
            </a>
            <a class="navbar-brand mt-3" href="/">
                <p>VALCHAMPS</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li id="fontnav" class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('index') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('gallery') }} ">GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('about') }}">ABOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->



    <!-- yield content -->
    <main>

    </main>
    <!-- yield content -->
    <div class="container">
        <div class="row">
            <div class="text-center col-4 mt-5">
                <div class="card p-4 rounded-10">
                    <a href="https://discord.com/invite/valorant">
                        <img class="rounded-20 mb-5 mx-auto d-block" height="100"
                            src="{{ asset('fe/aboutimg/download.png') }}" alt="">
                    </a>
                    <div class="topic">
                        <h3 class="fs-2">
                            Discord
                        </h3>
                    </div>
                </div>
            </div>
            <div class="text-center col-4 mt-5">
                <div class="card p-4 rounded-10">
                    <a href="https://www.instagram.com/valorantesports/?hl=en">
                        <img class="rounded-20 mb-5 mx-auto d-block" height="100"
                            src="{{ asset('fe/aboutimg/Instagram-Logo.wine.png') }}" alt="">
                    </a>
                    <div class="topic">
                        <h3 class="fs-2">
                            Instagram
                        </h3>
                    </div>
                </div>
            </div>
            <div class="text-center col-4 mt-5">
                <div class="card p-4 rounded-10">
                    <a href="https://valorantesports.com/schedule">
                        <img class="rounded-20 mb-5 mx-auto d-block" height="100"
                            src="{{ asset('fe/aboutimg/Valorant_logo_-_pink_color_version_(cropped).png') }} "
                            alt="">
                    </a>
                    <div class="topic">
                        <h3 class="fs-2">
                            Website
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- start footer -->
    <div class="footer">
        <footer class="text-center text-lg-start shadow-nih mt-5">
            <!-- copyright -->
            <div class="text-center p-4">
                ©Valorant Champion
            </div>
        </footer>
    </div>

    <!-- end footer -->

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- bootstrap 5 js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>

<!doctype html>
<html lang="en">

<style>
    :root {
        --card_width: 320px;
        --row_increment: 10px;
        --card_border_radius: 16px;
        --card_small: 22;
        --card_medium: 22;
        --card_large: 47;
    }

    body {
        background-image: url("/fe/galleryimg/gallerybg.png");
        background-position: center;
        background-size: cover;
        background-position-y: 0px;
    }




    .container {
        margin: 0;
        padding: 0;
        width: 80vw;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);

        display: grid;
        grid-template-columns: repeat(auto-fill, var(--card_width));
        grid-auto-rows: var(--row_increment);
        justify-content: center;


    }

    .card-image {
        max-width: 100%;
        max-height: 100%;
    }

    .card {
        padding: 0;
        margin: 15px 10px;
        border-radius: var(--card_border_radius);

    }

    .card_small {
        grid-row-end: span var(--card_small);
    }

    .card_medium {
        grid-row-end: span var(--card_medium);
    }

    .card_large {
        grid-row-end: span var(--card_large);
    }

    a.overlay {
        height: 100%;
        position: absolute;
        width: 100%;
        z-index: 1;
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
    <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong m-2 p-5">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src={{ asset('img/VCT_logo.png') }} alt="Bootstrap" width="40">
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
                        <a class="nav-link active" href="{{ route('gallery') }} ">GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">ABOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->



    <!-- yield content -->
    <main>
        <div class="container">

            <div class="card card_small">
                <img src="{{ asset('fe/galleryimg/p3.jpg') }}" class="card-image" alt="">
            </div>
            <div class="card card_medium">
                <img src="{{ asset('fe/galleryimg/p2.jpg') }}" class="card-image" alt="">
            </div>
            <div class="card card_large">
                <img src="{{ asset('fe/galleryimg/p1.jpg') }}" class="card-image" alt="">
            </div>
            <div class="card card_medium">
                <img src="{{ asset('fe/galleryimg/p4.jpg') }}" class="card-image" alt="">
            </div>
            <div class="card card_small">
                <img src="{{ asset('fe/galleryimg/p6.jpg') }}" class="card-image" alt="">
            </div>
            <div class="card card_large">
                <img src="{{ asset('fe/galleryimg/p9.jpg') }}" class="card-image" alt="">
            </div>
            <div class="card card_medium">
                <img src="{{ asset('fe/galleryimg/p7.jpg') }}" class="card-image" alt="">
            </div>
            <div class="card card_small">
                <img src="{{ asset('fe/galleryimg/p5.jpg') }}" class="card-image" alt="">
            </div>
            <div class="card card_medium">
                <img src="{{ asset('fe/galleryimg/p8.jpg') }}" class="card-image" alt="">
            </div>
            <div class="card card_small">
                <img src="{{ asset('fe/galleryimg/p10.jpg') }}" class="card-image" alt="">
            </div>
            <div class="card card_medium">
                <img src="{{ asset('fe/galleryimg/p17.jpg') }}" class="card-image" alt="">
            </div>
            <div class="card card_large">
                <img src="{{ asset('fe/galleryimg/p11.jpg') }}" class="card-image" alt="">
            </div>
            <div class="card card_medium">
                <img src="{{ asset('fe/galleryimg/p15.jpg') }}" class="card-image" alt="">
            </div>
            <div class="card card_medium">
                <img src="{{ asset('fe/galleryimg/p14.jpg') }}" class="card-image" alt="">
            </div>
            <div class="card card_large">
                <img src="{{ asset('fe/galleryimg/c1.jpg') }}" class="card-image" alt="">
            </div>
            <div class="card card_small">
                <img src="{{ asset('fe/galleryimg/p18.jpg') }}" class="card-image" alt="">
            </div>
            <div class="card card_large">
                <img src="{{ asset('fe/galleryimg/c2.jpg') }}" class="card-image" alt="">
            </div>
            <div class="card card_small">
                <img src="{{ asset('fe/galleryimg/p12.jpg') }}" class="card-image" alt="">
            </div>
            <div class="card card_small">
                <img src="{{ asset('fe/galleryimg/p13.jpg') }}" class="card-image" alt="">
            </div>
        </div>
    </main>
    <!-- yield content -->

    <!-- start footer -->

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

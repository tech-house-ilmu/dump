<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HI Opportunities | House Ilmu Indonesia</title>
    <!-- Link CDN Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- Link CDN Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Link CDN Animation on Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @vite(['resources/css/app.css'])

  </head>

  <body>
    <!-- Main -->
    <section class="container-xxl d-flex flex-wrap justify-content-around my-4">
        @foreach ($internships as $internship)
        <div class="beasiswa card-box px-4 px-md-0">
            <a href="#" class="card-custom d-flex align-items-center">
                <img src="{{ asset('img/intenship_lkp_grafologi.jpg') }}" class="card-img-top" alt="Card Image">
                <div class="card-overlay"></div>
                <div style="top: 0%;" class="card-body small-text">
                    <div class="card-title d-flex align-items-center gap-2">
                        <img src="{{ asset('img/logo_lkp.png') }}" class="logo col-3" alt="Logo House Ilmu Indonesia">
                        <div class="col-9 d-flex flex-column gap-2">
                            <h1 id="title" style="font-size: clamp(0.8rem, 1vw, 0.9rem);">{{ $internship->title }}</h1>
                            <h5 id="subtitle" style="font-size: clamp(0.8rem, 1vw, 0.8rem);">{{ $internship->subtitle }}</h5>
                        </div>
                    </div>
                    <div class="card-details mt-3 d-flex flex-row align-items-center gap-2">
                        <div class="card-icon col-3 d-flex flex-column align-items-center justify-content-start gap-3">
                            <i class="fa-solid fa-user"></i>
                            <i class="fa-solid fa-briefcase"></i>
                            <i class="fa-solid fa-calendar-days"></i>
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="card-info col-9 d-flex flex-column align-items-start gap-2">
                            <p class="type">{{ $internship->type }}</p>
                            <p class="position">{{ $internship->position }}</p>
                            <p class="duration">{{ $internship->duration }}</p>
                            <p class="deadline">{{ $internship->deadline }}</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        
    </section>

    <!-- CDN Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

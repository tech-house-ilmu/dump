<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upcoming Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #FFDD95; }
        .event-container {
            overflow: hidden;
        }
        .btn-daftar{
            width: 20rem;
            height: 3rem;
            border-radius: 25px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center mb-1">Upcoming Events</h1>

    @if($events->isEmpty())
        <p class="text-center">Belum ada event yang akan datang. Cek kembali nanti!</p>
    @else
        @foreach ($events as $event)
            <div class="row g-0 align-items-center event-container mb-5">
                <div class="col-md-5">
                    @if(count($event->images) > 1)
                        <div id="carousel-{{ $event->id }}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($event->images as $index => $image)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <img src="{{ Storage::url($image) }}" class="d-block w-100" alt="Event Image">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{ $event->id }}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-{{ $event->id }}" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @else
                        <img src="{{ Storage::url($event->images[0]) }}" class="img-fluid" alt="Event Image">
                    @endif
                </div>

                <div class="col-md-7 p-4 p-md-5">
                    <div class="text-center">
                        <h2 class="fw-bolder">{{ $event->title }}</h2>
                        <p class="text-muted fs-5 fw-bold">{{ $event->tagline }}</p>
                    </div>
                    
                    <div class="mt-3 description-content">
                        {!! $event->description !!}
                    </div>

                    <div class="d-flex justify-content-center">
                    <a href="{{ $event->registration_link }}" style="background-color: #174ea6" target="_blank" class="btn btn-primary fs-4 mt-4 btn-daftar">
                        Daftar Sekarang
                    </a>
                    </div>
                    
                </div>
            </div>
        @endforeach
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
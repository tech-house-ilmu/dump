<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn From The Experts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body { 
            background-color: #ffdd95; 
            font-family: sans-serif; 
        }

        /* CARD UTAMA */
        .expert-card {
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border-radius: 12px;
            position: relative;
        }

        .expert-image-container {
            position: relative;
            cursor: pointer;
            background-color: white;
            
            border-radius: 20px; 
            
            overflow: hidden; 
        }


        .expert-image {
            display: block;
            width: 100%;
            height: 250px; 
            object-fit: cover; 
            object-position: center top; 
        }

        
        .expert-overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-color: rgba(243, 153, 37, 0.9);
            color: white;
            opacity: 0; 
            transition: opacity 0.3s ease-in-out;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .expert-image-container:hover .expert-overlay {
            opacity: 1;
        }

        
        .expert-overlay ul {
            list-style: disc;
            padding-left: 40px;
            margin: 0;
            font-weight: bold;
            text-align: left;
        }

        
        .expert-info {
            background-color: #1E3A8A;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 12px;
            margin-top: -25px; 
            position: relative;
            z-index: 10;
        }
        .expert-info h5 {
            margin: 0;
            font-weight: bold;
            color: #FFD700;
        }
        .expert-info p {
            margin: 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <h1 class="text-center mb-5" style="color: #1E3A8A; font-weight: bold;">Learn From The Experts</h1>

    <div class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
        @forelse ($experts as $expert)
            <div class="col">
                <div class="expert-card">
                    <div class="expert-image-container">
                        <img src="{{ Storage::url($expert->image) }}" alt="{{ $expert->name }}" class="expert-image">
                        
                        <div class="expert-overlay">
                            <ul>
                                @foreach ($expert->skills as $skill)
                                    <li>{{ $skill }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="expert-info">
                        <h5>{{ $expert->name }}</h5>
                        <p>{{ $expert->position }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Belum ada data expert yang tersedia.</p>
        @endforelse
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
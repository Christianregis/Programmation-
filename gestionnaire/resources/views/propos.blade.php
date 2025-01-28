<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Propos de nous</title>
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}">
</head>
@include('layouts.header')
<body>
    <main class="container my-5">
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{asset('assets/image/img ebook/bv5.jpg')}}" class="card-img-top" style="object-fit: cover;" width="180" height="300" alt="Collections de cours">
                    <div class="card-body">
                        <h5 class="card-title">Collections de cours par filière</h5>
                        <p class="card-text">Découvrez les cours organisés par filière académique.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{asset('assets/image/img ebook/p3.jpg')}}" class="card-img-top" style="object-fit: cover;"  width="180" height="300" alt="Collections de vidéos">
                    <div class="card-body">
                        <h5 class="card-title">Collections de vidéos</h5>
                        <p class="card-text">Accédez aux vidéos académiques pour enrichir vos connaissances.</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{asset('assets/image/img ebook/batiment-300x200.jpg')}}" class="card-img-top" style="object-fit: cover;"  width="200" height="300" alt="Inscription">
                    <div class="card-body">
                        <h5 class="card-title">Inscrivez-vous</h5>
                        <p class="card-text">Rejoignez notre communauté pour un accès complet aux ressources.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('layouts.footer')
</body>
</html>

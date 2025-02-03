<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection de chat</title>
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<style>
    .card {
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        cursor: pointer;;
    }
</style>
@include('layouts.header')
<body>
    <main class="p-4" style="margin-left: 80px;">
        <div class="text-success fw-bold fs-4 text-center mb-2"><i class="fab fa-whatsapp"></i> Blog-Gid-25</div>
        <div class="text-light fw-bold fs-4 text-center mb-5 bg-success rounded">Discutez en toute securite</div>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card h-100 shadow bg-success">
                    <img src="{{asset('assets/image/img ebook/bv5.jpg')}}" class="card-img-top" style="object-fit: cover;" width="180" height="300" alt="Collections de cours">
                    <div class="card-body">
                        <h5 class="card-title text-light fw-bold pb-1 text-center border-bottom border-light">GID Groupe Principal</h5>
                        <p class="card-text mb-4 text-light">Parlez sainement avec d'autre etudiants de la filiere GID dans le canal Principal.</p>
                        <button type="button" class="btn btn-primary" onclick="window.location.href='{{route('message.index')}}'"><i class="fas fa-comments"></i> Acceder au chat</button>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card h-100 shadow bg-success">
                    <img src="{{asset('assets/image/img ebook/p3.jpg')}}" class="card-img-top" style="object-fit: cover;"  width="180" height="300" alt="Collections de vidéos">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-light text-center pb-1 border-bottom border-light">Groupe de discussion IDL</h5>
                        <p class="card-text text-light">Partagez des connaissances et enrichissez vous dans de domaine du devellopement logiciel.</p>
                        <button type="button" class="btn btn-primary" onclick="window.location.href='{{route('messageidl.index')}}'"><i class="fas fa-comments"></i> Acceder au chat</button>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card h-100 shadow bg-success">
                    <img src="{{asset('assets/image/img ebook/batiment-300x200.jpg')}}" class="card-img-top" style="object-fit: cover;"  width="200" height="300" alt="Inscription">
                    <div class="card-body">
                        <h5 class="card-title text-light fw-bold text-center border-bottom border-light pb-1">Groupe de discussion ISR</h5>
                        <p class="card-text text-light">Discutez avec des etudiants passionnes de reseau et liaison d'infrastruture.</p>
                        <button type="button" class="btn btn-primary" onclick="window.location.href='{{route('messageisr.index')}}'"><i class="fas fa-comments"></i> Acceder au chat</button>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card h-100 shadow bg-success">
                    <img src="{{asset('assets/image/img ebook/batiment-300x200.jpg')}}" class="card-img-top" style="object-fit: cover;"  width="200" height="300" alt="Inscription">
                    <div class="card-body">
                        <h5 class="card-title text-light fw-bold text-center border-bottom border-light pb-1">Groupe de discussion IDS</h5>
                        <p class="card-text text-light">Discutez avec des etudiants evoluant dans le domaine de l'intelligence artificielle et du big Data.</p>
                        <button type="button" class="btn btn-primary" onclick="window.location.href='{{route('messageids.index')}}'"><i class="fas fa-comments"></i> Acceder au chat</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

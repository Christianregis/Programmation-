<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    </head>
    <style>
        /* Animation for pour */
        .card {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Zone de statistiques */
        .stats-section {
            background: #f8f9fa;
            padding: 40px 20px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }
        .stats-section h2 {
            font-size: 2rem;
            color: #343a40;
            margin-bottom: 20px;
        }
        .stats-section .stats {
            display: flex;
            justify-content: center;
            gap: 50px;
        }
        .stats .stat {
            font-size: 1.5rem;
            font-weight: bold;
            color: #495057;
        }

        /* Section pour inciter à s'inscrire */
        .cta-section {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            padding: 50px 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .cta-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .cta-section .btn {
            padding: 15px 30px;
            font-size: 1.2rem;
        }
    </style>
@include('layouts.app')
<body class="bg-dark bg bg-opacity-10">
    <!-- Hero Section -->
    <section class="text-white text-center bg-dark py-5" style="background-image: url('path_to_your_image.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <h2 class="display-5 fw-bold">Accédez aux ressources académiques</h2>
            <p class="lead mt-3">Consultez et téléchargez les cours et vidéos de l Université de Douala.</p>
            <a href="{{route('connection')}}" class="btn btn-danger mt-4">Explorer les ressources</a>
        </div>
    </section>

    <!--Zone de statistique-->
    <section class="stats-section">
        <div class="container">
            <h2>Statistiques de la Bibliothèque</h2>
            <div class="stats">
                <div class="stat">
                    <span id="students-count">{{$total_users}}</span> <br> Étudiants inscrits
                </div>
                <div class="stat">
                    <span id="teachers-count">0</span> <br> Enseignants inscrits
                </div>
            </div>
        </div>
    </section>

    <!-- Section pour les Carrousel -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Galerie de l Université de Douala</h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <img src="{{asset('assets/image/fs_udo.jfif')}} " class="d-block" width="300" height="250" alt="Campus de l'Université de Douala">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-primary">Campus Principal</h5>
                            <p class="text-dark">Découvrez le magnifique campus principal de l Université de Douala.</p>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <img src="{{asset('assets/image/IMG_udo.jfif')}}" width="300" height="250" class="d-block" alt="Bibliothèque de l'université">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-primary">Bibliothèque Universitaire</h5>
                            <p class="text-dark">Un espace dédié à l apprentissage et à la recherche.</p>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <img src="{{asset('assets/image/photo_udo.jfif')}}" class="d-block img-fluid" width="300" height="250" alt="Auditorium de Douala">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-primary">Auditorium</h5>
                            <p class="text-dark">Un espace pour les conférences et les séminaires.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Zone inscription -->
    <section class="cta-section my-5 mx-auto">
        <div class="container">
            <h2 class="fw-bold">Rejoignez-nous dès aujourd'hui !</h2>
            <p>Accédez à des milliers de cours et de vidéos pour enrichir vos connaissances. Inscrivez-vous et faites partie de notre communauté académique.</p>
            <a href="{{route('inscription')}}" class="btn btn-light text-primary fw-bold">S'inscrire maintenant</a>
        </div>
    </section>
    <!-- Cards Section -->
    <main class="container my-5">
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="path_to_your_image.jpg" class="card-img-top" alt="Collections de cours">
                    <div class="card-body">
                        <h5 class="card-title">Collections de cours par filière</h5>
                        <p class="card-text">Découvrez les cours organisés par filière académique.</p>
                        <a href="{{route('connection')}}" class="btn btn-danger">Explorer →</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="path_to_your_image.jpg" class="card-img-top" alt="Collections de vidéos">
                    <div class="card-body">
                        <h5 class="card-title">Collections de vidéos</h5>
                        <p class="card-text">Accédez aux vidéos académiques pour enrichir vos connaissances.</p>
                        <a href="{{route('connection')}}" class="btn btn-danger">Explorer →</a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="path_to_your_image.jpg" class="card-img-top" alt="Inscription">
                    <div class="card-body">
                        <h5 class="card-title">Inscrivez-vous</h5>
                        <p class="card-text">Rejoignez notre communauté pour un accès complet aux ressources.</p>
                        <a href="{{route('inscription')}}" class="btn btn-danger">S'inscrire →</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('layouts.footer')
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.js')}}">
    </script>

</body>
</html>

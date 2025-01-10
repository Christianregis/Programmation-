<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bibliothèque Numérique Université de Douala</title>
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/welcome.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/lib/inscription.js')}}"></script>
    <style>
        .hover_li:hover, .hover_li_1:hover {
            background-color: #f8f9fa;
            border-radius: 5px;
        }
        .text-brown {
            color: #6c757d;
        }
        .img_udo {
            max-height: 80px;
        }
    </style>
</head>
<body class="bg-dark bg-opacity-10">
    <header>
        <nav class="navbar bg-light mb-4">
            <div class="container-fluid">
                <a class="navbar-brand disabled text-primary">Bibliothèque Numérique des filieres GID</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header bg-primary">
                        <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel">Liens utiles</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item d-flex hover_li">
                                <i class="fas fa-home py-3 px-2 text-primary"></i>
                                <a class="nav-link active text-primary py-2 fs-5" href="{{route('home')}}">Accueil</a>
                            </li>
                            <li class="nav-item d-flex hover_li">
                                <i class="fas fa-sign-in-alt py-3 px-2 text-primary"></i>
                                <a class="nav-link text-primary py-2 fs-5" href="{{route('connection')}}">Se Connecter</a>
                            </li>
                            <li class="nav-item d-flex hover_li">
                                <i class="fas fa-user-plus py-3 px-2 text-primary"></i>
                                <a class="nav-link text-primary py-2 fs-5" href="{{route('inscription')}}">Créer un Compte</a>
                            </li>
                            <li class="nav-item d-flex hover_li">
                                <i class="fas fa-info-circle py-3 px-2 text-primary"></i>
                                <a class="nav-link text-primary py-2 fs-5" href="{{route('propos')}}">À propos</a>
                            </li>
                            <li class="nav-item d-flex hover_li">
                                <i class="fas fa-phone py-3 px-2 text-primary"></i>
                                <a class="nav-link text-primary py-2 fs-5" href="mailto:christiancheukap@gmail.com">Nous Contacter</a>
                            </li>
                            <li class="nav-item dropdown hover_li_1">
                                <a class="nav-link dropdown-toggle text-primary" href="#" data-bs-toggle="dropdown">Télécharger</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Livres</a></li>
                                    <li><a class="dropdown-item" href="#">Vidéos</a></li>
                                    <li><a class="dropdown-item" href="#">Autre contenu</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Rechercher un livre" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Rechercher</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="d-flex flex-column flex-lg-row align-items-center bg-light py-3 mb-5">
        <div class="mb-3 mb-lg-0 me-lg-4">
            <img src="{{asset('assets/image/IMG_udo.jfif')}}" alt="Logo Université Douala" class="img_udo rounded img-fluid ps-3">
        </div>
        <div class="d-flex flex-column flex-lg-row">
            <div class="d-flex align-items-center px-3 py-2">
                <i class="fas fa-chalkboard-teacher text-brown me-2"></i>
                <a href="#" class="text-decoration-none text-brown fs-5">Université</a>
            </div>
            <div class="d-flex align-items-center px-3 py-2">
                <i class="fas fa-book-open text-brown me-2"></i>
                <a href="#" class="text-decoration-none text-brown fs-5">Étudier à l'Université de Douala</a>
            </div>
            <div class="d-flex align-items-center px-3 py-2">
                <i class="fas fa-brain text-brown me-2"></i>
                <a href="#" class="text-decoration-none text-brown fs-5">Commencer à étudier</a>
            </div>
            <div class="d-flex align-items-center px-3 py-2">
                <i class="fas fa-search text-brown me-2"></i>
                <a href="#" class="text-decoration-none text-brown fs-5">Rechercher</a>
            </div>
        </div>
    </div>
</body>
</html>

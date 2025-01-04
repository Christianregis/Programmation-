<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row justify-content-between align-items-start">
                <!-- Section 1: Liens principaux -->
                <div class="d-flex flex-column px-3 mb-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/image/fs_udo.jfif') }}" alt="Université Douala" class="image_univ_douala rounded border border-light">
                    </div>
                    <div class="mb-2 d-flex align-items-center">
                        <i class="fas fa-home me-2"></i>
                        <a href="{{ route('home') }}" class="text-light text-decoration-none">Page d accueil</a>
                    </div>
                    <div class="mb-2 d-flex align-items-center">
                        <i class="fas fa-newspaper me-2"></i>
                        <a href="#" class="text-light text-decoration-none">Actualité de l Université</a>
                    </div>
                    <div class="mb-2 d-flex align-items-center">
                        <i class="fas fa-info-circle me-2"></i>
                        <a href="{{route('propos')}}" class="text-light text-decoration-none">À propos</a>
                    </div>
                    <div class="mb-2 d-flex align-items-center">
                        <i class="fas fa-lock me-2"></i>
                        <a href="{{route('politique')}}" class="text-light text-decoration-none">Politique de confidentialité</a>
                    </div>
                </div>

                <!-- Section 2: Connexion -->
                <div class="d-flex flex-column px-3 mb-4">
                    <div class="mb-3">
                        <img src="#" alt="Image UDO" class="image_univ_douala rounded border border-light">
                    </div>
                    <div class="mb-2 d-flex align-items-center">
                        <i class="fas fa-sign-out me-2"></i>
                        <a href="{{route('connection')}}" class="text-light text-decoration-none">Se connecter</a>
                    </div>
                    <div class="mb-2 d-flex align-items-center">
                        <i class="fas fa-user-plus me-2"></i>
                        <a href="{{route('inscription')}}" class="text-light text-decoration-none">Créer son Compte UDO</a>
                    </div>
                </div>

                <!-- Section 3: Réseaux sociaux -->
                <div class="d-flex flex-column px-3 mb-4">
                    <div class="mb-3">Nos réseaux sociaux :</div>
                    <div class="d-flex">
                        <a href="#" class="text-light me-3"><i class="fab fa-youtube" style="color: #FF0000; font-size: 24px;"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook" style="color: #1877F2; font-size: 24px;"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter" style="color: #1DA1F2; font-size: 24px;"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram" style="color: #E4405F; font-size: 24px;"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-whatsapp" style="color: #25D366; font-size: 24px;"></i></a>
                    </div>
                </div>

                <!-- Section 4: Localisation -->
                <div class="d-flex flex-column px-3 mb-4">
                    <div class="mb-3">Localisation :</div>
                    <div>
                        <a href="https://www.bing.com/maps?osid=5434ecf7-1fe3-4241-8a64-d69dc15b1ce6&cp=4.055864~9.728415&lvl=16&pi=0&imgid=3eac7a45-ad8d-4e4a-9e58-1aabf1d07d53&v=2&sV=2&form=S00027">
                            <img src="{{ asset('assets/image/photo_udo.jfif') }}" alt="Localisation Université Douala" class="univ_location rounded border border-light">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="text-center text-light bg-secondary fst-italic fw-bold">groupe3_idl2@bibliotheque2025</div>
</body>
</html>

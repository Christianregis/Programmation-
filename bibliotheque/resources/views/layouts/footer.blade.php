{{--<html lang="en">
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
                        <img src="{{ asset('assets/image/fs_udo.jfif') }}" alt="Université Douala" class="image_univ_douala img-fluid rounded border border-light">
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
                        <img src="{{asset('assets/lib/assets/img/gid.png')}}" alt="Image UDO" class="image_univ_douala img-fluid rounded border border-light">
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
--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Footer Design</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        footer {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: #ecf0f1;
            position: relative;
            z-index: 1;
            padding: 50px 20px;
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
        }



        footer a {
            color: azure;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
            color: blue;
        }

        .footer-section {
            margin-bottom: 30px;
        }

        .footer-icons a {
            font-size: 24px;
            margin-right: 15px;
            transition: all 0.3s ease;
        }

        .footer-icons a:hover {
            transform: scale(1.2);
        }

        .footer-form input,
        .footer-form textarea {
            background: #3b4a54;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .footer-form input::placeholder,
        .footer-form textarea::placeholder {
            color: #bdc3c7;
        }

        .footer-form button {
            background: #27ae60;
            color: white;
            border: none;
            transition: all 0.3s ease;
        }

        .footer-form button:hover {
            background: #2ecc71;
        }

        .footer-bottom {
            background-color: #34495e;
            text-align: center;
            padding: 15px 0;
            font-size: 14px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <footer>
        <div class="container">
            <div class="row">
                <!-- Section 1: Logo et liens -->
                <div class="col-lg-3 col-md-6 footer-section">
                    <img src="{{ asset('assets/image/fs_udo.jfif') }}" alt="Université Douala" class="img-fluid mb-3 rounded-circle" style="max-width: 120px;">
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home me-2"></i>Page d'accueil</a></li>
                        <li><a href="#"><i class="fas fa-newspaper me-2"></i>Actualités</a></li>
                        <li><a href="{{ route('propos') }}"><i class="fas fa-info-circle me-2"></i>À propos</a></li>
                        <li><a href="{{ route('politique') }}"><i class="fas fa-lock me-2"></i>Confidentialité</a></li>
                    </ul>
                </div>

                <!-- Section 2: Connexion -->
                <div class="col-lg-3 col-md-6 footer-section">
                                        <img src="{{ asset('assets/lib/assets/img/gid.png') }}" alt="Université Douala" class="img-fluid mb-3 rounded-circle" style="max-width: 120px;">
                    <h5>Connexion</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('connection') }}"><i class="fas fa-sign-in-alt me-2"></i>Se connecter</a></li>
                        <li><a href="{{ route('inscription') }}"><i class="fas fa-user-plus me-2"></i>Créer un compte</a></li>
                    </ul>
                </div>

                <!-- Section 3: Réseaux sociaux -->
                <div class="col-lg-3 col-md-6 footer-section">
                    <h5>Suivez-nous</h5>
                    <div class="footer-icons">
                        <a href="#"><i class="fab fa-youtube text-danger"></i></a>
                        <a href="#"><i class="fab fa-facebook text-primary"></i></a>
                        <a href="#"><i class="fab fa-twitter text-info"></i></a>
                        <a href="#"><i class="fab fa-instagram text-danger"></i></a>
                        <a href="#"><i class="fab fa-whatsapp text-success"></i></a>
                    </div>
                </div>

                <!-- Section 4: Formulaire de requête -->
                <div class="col-lg-3 col-md-6 footer-section footer-form">
                    <h5>Envoyez-nous une requête</h5>
                    <form>
                        <input type="text" class="form-control mb-2" placeholder="Votre nom" required>
                        <input type="email" class="form-control mb-2" placeholder="Votre email" required>
                        <textarea class="form-control mb-2" rows="3" placeholder="Votre message" required></textarea>
                        <button type="submit" class="btn btn-outline-primary w-100">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2025 Bibliothèque Virtuelle UDO - groupe3_idl2@bibliotheque2025
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

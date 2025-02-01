<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="{{asset('\assets\lib\assets\css/bootstrap.min.css')}}" rel="stylesheet">

</head>
@include('layouts.header')
<body>

<main class="p-4" style="margin-left: 80px;">
    <div class="text-center text-success fw-bold fs-4 mb-5"><i class="fab fa-whatsapp text-success"></i> Blog-Gid-25</div>
    <div class="container">
        <ul>
            @foreach ( $errors->all() as $error)
            <li class="alert alert-danger rounded shadow">{{$error}}</li>
            @endforeach
        </ul>
        <div class="row">
            <!-- Section Carrousel -->
            <div class="col-md-6 p-0">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/600x600" class="d-block w-100" alt="Image 1">
                            <div class="carousel-caption">
                                <h5>Bienvenue !</h5>
                                <p>Connectez-vous avec vos amis facilement.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="#" class="d-block w-100" alt="Image 2">
                            <div class="carousel-caption">
                                <h5>Partagez vos moments</h5>
                                <p>Rejoignez une communauté dynamique.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="#" class="d-block w-100" alt="Image 3">
                            <div class="carousel-caption">
                                <h5>Sécurité garantie</h5>
                                <p>Vos données sont toujours protégées.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Précédent</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Suivant</span>
                    </button>
                </div>
            </div>

            <!-- Section Formulaire -->
            <div class="col-md-6">
                <div class="card"  style="border:none;">
                    <div class="card-header d-flex justify-content-between mb-3" style="background-color: #25d366;border-top-left-radius: 10px;border-top-right-radius: 10px;text-align: center;">
                        <a href="{{route('user.inscription')}}" class="btn bg-primary px-4 shadow text-light"><i class="fas fa-user-plus"></i> Creer un compte</a>
                        <a href="{{route('user.connection')}}" class="btn px-4 text-light"><i class="fas fa-sign-in-alt"></i> Se Connecter</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('user.store')}}" method="GET">
                            <!-- Nom complet -->
                            <div class="mb-4">
                                <label for="full_name" class="form-label text-success"><i class="fa-solid fa-user"></i> Nom complet</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Entrez votre nom complet" required>
                            </div>

                            <!-- Nom d'utilisateur -->
                            <div class="mb-4">
                                <label for="username" class="form-label text-success"><i class="fa-solid fa-user-tag"></i> Nom d'utilisateur</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Choisissez un nom d'utilisateur" required>
                            </div>

                            <!-- Email -->
                            <div class="mb-4">
                                <label for="email" class="form-label text-success"><i class="fa-solid fa-envelope"></i> Adresse email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre adresse email" required>
                            </div>

                            <!-- Mot de passe -->
                            <div class="mb-4">
                                <label for="password" class="form-label text-success"><i class="fa-solid fa-lock"></i> Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Choisissez un mot de passe" required>
                            </div>

                            <!-- Confirmation du mot de passe -->
                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label text-success"><i class="fa-solid fa-lock"></i> Confirmez le mot de passe</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmez votre mot de passe" required>
                            </div>

                            @if (session('success'))
                            <div class="form-group mb-3">
                                <label class="form-label alert alert-success">{{session('success')}}</label>
                            </div>
                            @endif
                            <!-- Bouton d'inscription -->
                            <button type="submit" class="btn btn-primary w-100"><i class="fa-solid fa-user-check"></i> S'inscrire</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <small>Vous avez déjà un compte ? <a href="{{route('user.connection')}}" class="text-success">Connectez-vous ici</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
    <script src="{{asset('assets/lib/assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>

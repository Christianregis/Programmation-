
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d Inscription</title>
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/welcome.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/lib/inscription.js')}}"></script>
    <style>
        .custom-shadow{
            box-shadow: 0 8px 10px rgba(139, 69, 19, 0.5);
            background-color: gainsboro;
        }
    </style>
</head>
@include('layouts.app')
<body>
    <ul>
        @foreach ( $errors->all() as $error)
        <li class="alert alert-danger">{{$error}}</li>
        @endforeach
    </ul>
    <div class="align-items-center justify-content-center min-vh-100 d-flex mb-4">
    <form class="rounded p-4 w-100 custom-shadow" style="max-width: 400px;" action="{{route('user.store')}}" method="POST">
        @csrf
        <div class="text-center mb-4">
            <img src="{{asset('assets/image/fs_udo.jfif')}}" alt="image_udo" class="rounded-4 mx-auto d-block img-fluid" style="max-width: 200px; height: auto;">
        </div>
        <div>
            <div class="d-flex justify-content-between mb-3">
                <a href="{{route('connection')}}" class="btn btn-secondary text-dark px-4">Se connecter</a>
                <a href="{{route('inscription')}}" class="btn btn-primary text-white px-4">Creer un compte</a>
            </div>
            <div class="form-group mb-3">
                <label for="username" class="form-label"><i class="fas fa-user-circle me-2"></i>Nom d utilisateur</label>
                <input type="text" id="username" placeholder="username" name="username" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="mail" class="form-label"><i class="fa fa-envelope me-2"></i>Email</label>
                <input type="email" id="email" placeholder="Email" class="form-control" name="email" required>
            </div>
            <div class="form-group mb-3">
                <label for="nom_complet" class="form-label"><i class="fa fa-user me-2"></i>Nom complet</label>
                <input type="text" id="nom_complet" placeholder="Nom complet" class="form-control" name="full_name" required>
            </div>
            <div class="form-group mb-3">
                <label for="nom_complet" class="form-label"><i class="fa fa-user-plus me-2"></i>Votre status</label>
                <select id="grade" class="px-3 form-control"  name="status">
                    <option value="Etudiant">Etudiant</option>
                    <option value="Enseignant">Enseignant</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="num_tel" class="form-label"><i class="fa fa-phone me-2"></i>Numéro de téléphone</label>
                <input type="tel" id="num_tel" placeholder="Numéro de téléphone" class="form-control" name="phone" required>
            </div>
            <div class="form-group mb-3">
                <label for="password" class="form-label"><i class="fa fa-lock me-2"></i>Mot de passe</label>
                <input type="password" id="password" placeholder="Mot de passe" class="form-control" name="password" required>
            </div>
            <div id="error-container"></div>
            <button type="submit" class="btn btn-primary w-100">S inscrire</button>
        </div>
    </form>
</div>


@include('layouts.footer')
</body>
</html>

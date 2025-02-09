<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/inscription.css')}}">
</head>
<body>
    @include('layouts.header')
<main>
<div class="form-container">
    <div class="form-header">Créer un compte</div>
    <form method="GET" action="{{route('user.store')}}">
        <!--Zone de rapport d'erreur-->
        <!-- Nom complet -->
        <div class="input-group mb-3">
            <span class="input-group-text bg-light text-muted">
                <i class="fas fa-user"></i>
            </span>
            <input type="text" class="form-control" placeholder="Votre nom complet" required name="full_name">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-light text-muted">
                <i class="fas fa-user-plus"></i>
            </span>
            <input type="text" class="form-control" placeholder="Votre nom d'utilisateur" required name="username">
        </div>
        <!-- Adresse email -->
        <div class="input-group mb-3">
            <span class="input-group-text bg-light text-muted">
                <i class="fas fa-envelope"></i>
            </span>
            <input type="email" class="form-control" placeholder="Votre adresse email" required name="email">
        </div>

        <!-- Mot de passe -->
        <div class="input-group mb-3">
            <span class="input-group-text bg-light text-muted">
                <i class="fas fa-lock"></i>
            </span>
            <input type="password" class="form-control" placeholder="Mot de passe" required name="password">
        </div>

        <!-- Répéter le mot de passe -->
        <div class="input-group mb-3">
            <span class="input-group-text bg-light text-muted">
                <i class="fas fa-key"></i>
            </span>
            <input type="password" class="form-control" placeholder="Répéter le mot de passe" required>
        </div>

        <!-- Checkbox -->
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="termsCheck" required>
            <label class="form-check-label" for="termsCheck">
                J'accepte les <a href="#">termes et conditions</a>.
            </label>
        </div>
        <ul>
            @foreach ( $errors->all() as $error)
            <li class="alert alert-danger rounded shadow">{{$error}}</li>
            @endforeach
        </ul>
        <!-- Bouton d'inscription -->
        <button type="submit" class="btn btn-success w-100">S'inscrire</button>
    </form>

    <!-- Lien vers la connexion -->
    <div class="form-footer">
        Vous avez déjà un compte ? <a href="{{route('user.connection')}}">Connectez-vous ici</a>
    </div>
</div>
</main>
<div class="chat-input mb-2">
    <div class="text-success text-center fw-bold">Copyright <i class="fab fa-whatsapp"></i> Idl2-Gestion de blog</div>
</div>
</body>
</html>

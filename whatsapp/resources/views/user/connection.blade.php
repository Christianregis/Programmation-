<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Connection.css')}}">
</head>
<body>
    @include('layouts.header')
<main>

<div class="form-container">
    <div class="form-header">Se Connecter</div>
    <form method="GET" action="{{route('user.login')}}">
        <!--Zone de rapport d'erreur-->
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

        <!-- Checkbox -->
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input"  required>
            <label class="form-check-label">
                Se souvenir de moi.
            </label>
        </div>
        @if (session('error'))
        <div class="form-group mb-3">
            <label class="form-label alert alert-danger"><i class="fas fa-times"></i> {{session('error')}}</label>
        </div>
        @endif
        <!-- Bouton d'inscription -->
        <button type="submit" class="btn btn-success w-100">Se Connecter</button>
    </form>

    <!-- Lien vers la connexion -->
    <div class="form-footer">
        Vous n'avez pas encore de compte ? <a href="{{route('user.inscription')}}">Inscrivez-vous ici</a>
    </div>
</div>
</main>
<div class="chat-input mb-2">
    <div class="text-success text-center fw-bold">Copyright <i class="fab fa-whatsapp"></i> Idl2-Gestion de blog</div>
</div>
</body>
</html>

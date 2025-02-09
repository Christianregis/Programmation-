<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
    <style>
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            margin-left: 80px;
        }
        .form-container {
            background: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        .form-header {
            font-size: 22px;
            font-weight: bold;
            color: #25D366;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control:focus {
            border-color: #25D366;
            box-shadow: 0 0 5px rgba(37, 211, 102, 0.5);
        }
        .btn-success {
            background-color: #25D366;
            border: none;
        }
        .btn-success:hover {
            background-color: #1da653;
        }
        .form-footer {
            text-align: center;
            margin-top: 15px;
        }
        .form-footer a {
            color: #25D366;
            text-decoration: none;
        }
        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    @include('layouts.header')
<main>
<div class="form-container">
    <div class="form-header">Créer un compte</div>
    <form method="GET" action="{{route('user.store')}}">
                <!--Zone de rapport d'erreur-->
        <ul>
            @foreach ( $errors->all() as $error)
            <li class="alert alert-danger rounded shadow">{{$error}}</li>
            @endforeach
        </ul>
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

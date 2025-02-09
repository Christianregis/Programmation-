<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Utilisateur</title>
    <link rel="stylesheet" href="{{asset('assets/css/show.css')}}">
    <link rel="stylesheet" href="{{asset('\assets\lib\bootstrap\css/bootstrap.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body>
    @csrf
    @include('layouts.header')
    <main class="p-4" style="margin-left: 80px;">
        <div class="text-center text-success-custom fw-bold-custom fs-4 mb-5"><i class="fab fa-whatsapp"></i> Blog-Gid-25</div>
        <div class="d-flex justify-content-center align-items-center mb-4">
            <!-- Cercle contenant l'image de profil avec l'effet ajouté -->
            <div class="profile-circle rounded-circle">
                <img src="{{asset('assets/image/img ebook/image_personnel.jfif')}}" alt="Photo de Profil" class="img-fluid">
            </div>
        </div>
        <div>
            <div class="text-center text-success-custom fs-5 fw-bold-custom mt-1 mb-2">{{$user->username}}</div>
        </div>
        <div class="info-section">
            <div class="container row mt-2">
                <div class="d-flex mb-3">
                    <p class="fs-5-custom text-success-custom me-2">Votre Email de connection:</p>
                    <p class="fs-5-custom"><a href="mailto:{{$user->email}}" class="text-decoration-none text-primary-custom">{{$user->email}}</a></p>
                </div>
                <div class="d-flex mb-3">
                    <p class="fs-5-custom text-success-custom me-2">Votre nom complet:</p>
                    <p class="fs-5-custom text-primary-custom">{{$user->full_name}}</p>
                </div>
                <div class="d-flex mb-3">
                    <p class="fs-5-custom text-success-custom me-2">Depuis le:</p>
                    <p class="fs-5-custom text-primary-custom">{{$user->created_at}}</p>
                </div>
                <div class="d-flex mb-3">
                    <p class="fs-5-custom text-success-custom me-2">Votre Mot de passe:</p>
                    @if ($user->id == auth()->id())
                    <p class="fs-5-custom text-primary-custom">{{$user->password}}</p>
                    @endif
                </div>
                @if ($user->id == auth()->id())
                <div class="d-flex mb-3">
                    <button type="button" class="btn btn-danger btn-custom text-light">Se Deconnecter <i class="fas fa-sign-in-alt"></i></button>
                </div>
                @endif
            </div>
            <div class="d-flex justify-content-center align-items-center mb-4">
                <button type="button" class="btn btn-success btn-custom text-light" onclick="window.location.href='{{route('user.select-chat')}}'"><i class="fas fa-comments"></i> Acceder au Chat</button>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-2 mb-2">
            @if ($user->id == auth()->id())
            <button type="button" class="btn btn-primary btn-custom text-light me-3">Modifier des informations <i class="fas fa-check"></i></button>
            <button type="button" class="btn btn-danger btn-custom text-light" onclick="window.location.href='{{route('home')}}'">Revenir a l'accueil <i class="fas fa-arrow-right"></i></button>
            @endif
        </div>
    </main>
    <script src="{{asset('assets/lib/assets/js/bootstrap.js')}}"></script>
</body>
</html>

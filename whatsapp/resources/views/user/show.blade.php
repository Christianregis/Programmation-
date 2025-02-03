<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Utilsateur</title>
    <style>
        /* Bordure personnalisée et ombre pour le cercle */
        .profile-circle {
            width: 150px; /* Diamètre du cercle */
            height: 150px; /* Diamètre du cercle */
            border: 3px solid #25D366; /* Bordure verte (style WhatsApp) */
            overflow: hidden; /* Coupe l'image pour qu'elle reste dans le cercle */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); /* Ombre esthétique */
        }

        /* Ajuste l'image dans le cercle */
        .profile-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ajuste l'image pour qu'elle remplisse le cercle */
        }
    </style>
    <link rel="stylesheet" href="{{asset('\assets\lib\bootstrap\css/bootstrap.css')}}">
</head>
<body>
    @csrf
    @include('layouts.header')
    <main class="p-4" style="margin-left: 80px;">
        <div class="text-center text-success fw-bold fs-4 mb-5"><i class="fab fa-whatsapp"></i> Blog-Gid-25</div>
        <div class="d-flex justify-content-center align-items-center">
            <!-- Cercle contenant l'image de profil -->
            <div class="profile-circle rounded-circle">
                <img src="{{asset('assets/image/img ebook/image_personnel.jfif')}}" alt="Photo de Profil" class="img-fluid">
            </div>
        </div>
        <div>
            <div class="text-center text-success fs-5 fw-bold mt-1 mb-2">{{$user->username}}</div>
        </div>
        <div class="bg-light d-flex form-control pt-2">
            <div class="container row mt-2">
                <div class="d-flex">
                    <p class="fs-5 text-success me-2">Votre Email de connection:</p>
                    <p class="fs-5"><a href="mailto:{{$user->email}}" class="text-decoration-none">{{$user->email}}</a></p>
                </div>
                <div class="d-flex">
                    <p class="fs-5 text-success me-2">Votre nom complet:</p>
                    <p class="fs-5 text-primary">{{$user->full_name}}</p>
                </div>
                <div class="d-flex">
                    <p class="fs-5 text-success me-2">Depuis le:</p>
                    <p class="fs-5 text-primary">{{$user->created_at}}</p>
                </div>
                <div class="d-flex">
                    <p class="fs-5 text-success me-2">Votre Mot de passe:</p>
                    @if ($user->id==auth()->id())
                    <p class="fs-5 text-primary">{{$user->password}}</p>
                    @endif
                </div>
                @if ($user->id==auth()->id())
                <div class="d-flex mb-2">
                    <button type="button" class="btn btn-danger text-light">Se Deconnecter <i class="fas fa-sign-in-alt"></i></button>
                </div>
                @endif
            </div>
            <div class="align-items-center d-flex justify-content-center">
                <button type="button" class="btn btn-success text-light" onclick="window.location.href='{{route('user.select-chat')}}'"><i class="fas fa-comments"></i> Acceder au Chat</button>
            </div>
        </div>
        <div class="align-items-center d-flex justify-content-center mt-2 mb-2">
            @if ($user->id==auth()->id())
            <button type="button" class="btn btn-primary text-light me-3">Modifier des informations <i class="fas fa-check"></i></button>
            <button type="button" class="btn btn-danger text-light" onclick="window.location.href='{{route('home')}}'">Revenir a l'accueil <i class="fas fa-arrow-right"></i></button>
            @endif
        </div>
    </main>
    <script src="{{asset('assets/lib/assets/js/bootstrap.js')}}"></script>
</body>
</html>

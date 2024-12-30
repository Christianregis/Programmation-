<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information personnelle</title>
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/welcome.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/lib/inscription.js')}}"></script>
</head>
@include('layouts.app')
<body>
    <div class="container mt-5 mb-3 bg-light flex-row rounded shadow">
        <div class="bg-primary text-light text-center fs-4 p-2 rounded mb-3">
            Verifiez Vos informations en toutes securite
        </div>
        <div class="flex-row">
            <div class="flex-col d-flex  align-items-center pb-2">
                <p class="fs-5 pe-3 text-dark">Votre Nom D utilisateur :</p>
                <p class="fs-5 fw-bold text-primary">{{$user->username}}</p>
            </div>
            <div class="flex-col d-flex  align-items-center pb-2">
                <p class="fs-5 pe-3 text-dark">Votre Nom complet :</p>
                <p class="fs-5 fw-bold text-primary">{{$user->full_name}}</p>
            </div>
            <div class="flex-col d-flex  align-items-center pb-2">
                <p class="fs-5 pe-3 text-dark">Votre Status :</p>
                <p class="fs-5 fw-bold text-primary">{{$user->status}}(e)</p>
            </div>
            <div class="flex-col d-flex  align-items-center pb-2">
                <p class="fs-5 pe-3 text-dark">Votre Adresse mail de contact :</p>
                <p class="fs-5 fw-bold text-primary">{{$user->email}}</p>
            </div>
            <div class="flex-col d-flex  align-items-center pb-2">
                <p class="fs-5 pe-3 text-dark">Votre Numero de telephone :</p>
                <p class="fs-5 fw-bold text-primary">{{$user->phone}}</p>
            </div>
            <div class="flex-col d-flex  align-items-center pb-2">
                <p class="fs-5 pe-3 text-dark">Date de creation du compte :</p>
                <p class="fs-5 fw-bold text-primary">{{$user->created_at}}</p>
            </div>
            <div class="flex-col d-flex  align-items-center pb-2">
                <p class="fs-5 pe-3 text-dark">Derniere Modification :</p>
                <p class="fs-5 fw-bold text-primary">{{$user->updated_at}}</p>
            </div>
            <div class="flex-col d-flex  align-items-center pb-2">
                <p class="fs-5 pe-3 text-dark">Votre Mot de passe securisee :</p>
                <p class="fs-5 fw-bold text-primary">{{$user->password}}</p>
            </div>
            <div class="flex-col d-flex  align-items-center pb-2">
                <button type="button" class="btn btn-outline-success" onclick="window.location.href='{{route('user.show',$user->id)}}'">Revenir a votre espace personnel</button>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>
</html>

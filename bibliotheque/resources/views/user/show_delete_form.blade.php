<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation de supression</title>
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/welcome.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/lib/inscription.js')}}"></script>
</head>
@include('layouts.app')
<body>
    @csrf
    <div class="container">
        <form action="{{route('user.delete',$user->id)}}" class="form-control shadow rounded p-4 w-100 align-items-center justify-content-center flex-col" onsubmit="return confirm('Etes vous sur de vouloir supprimer definitivement votre compte? Cette action est irreversible.')">
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
                <button type="submit" class="btn btn-outline-danger">Supprimer mon compte</button>
            </div>
        </form>
    </div>
</body>
</html>

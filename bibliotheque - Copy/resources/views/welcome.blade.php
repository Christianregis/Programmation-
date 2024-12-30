<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    </head>
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/welcome.css')}}">
@include('layouts.app')
<body>
    <div class="flex-col bg-brown d-flex py-2">
        <div class="flex-row align-items-center justify-content-center">
            <div class="fs-5 text-center pb-3  d-flex text-brown px-3">PARCOUREZ LES INDEX</div>
            <div class=" d-flex px-3 py-3 hover-div"><li class="px-2 py-2 fas fa-book-open text-primary"></li><a href="#" class="text-decoration-none fs-5">Collections de cours par filieres</a><i class="fas fa-arrow-right text-primary px-2 py-2 fs-5"></i></div>
            <div class=" d-flex py-3 px-3 hover-div"><li class="px-2 py-2 fas fa-play text-primary"></li><a href="#" class="text-decoration-none fs-5">Collections de Videos par filiere </a><i class="fas fa-arrow-right text-primary px-2 py-2 fs-5"></i></div>
        </div>
        <div class="d-flex">
            <img src="{{asset('assets/image/photo_udo.jfif')}}" alt="image_cooperation" class="rounded image_cooperation shadow stretch-animation">
        </div>
    </div>
    <div class="flex-col d-flex bg-light">
        <div class="px-4 py-5 flex-row">
            <p class="text-reponsive">L a bibliotheque Numerique de l'Universite de Douala'est une platforme en ligne dediee a la mise a la disposition des ressources <br>academeique numeriques.Elle permets <br>etudiants de regarder et telecharger des cours  et au personnel academeiques d'acceder et de publier de cours facilement' <br>contribuant ainsi a l enerichissement et l apprentissage de la recherche au sein de <br>l Universite.
            </p>
            <div class="text-brown fs-4 d-flex">{{ $total_users }}<p class="fs-5 text-secondary py-1 px-2">Etudiants/Enseignants inscrits durant cette annee</p></div>
        </div>
        <div class="bg-brown1 flex-row px-5 rounded">
            <div class="fs-5 text-light text-center py-2 border-bottom border-light">CONTACT</div>
            <div class="fs-5 text-light pb-5 pt-3">Realisation des etudiants <br>du groupe 3 de IDL (Ingenierie <br>de Developpement <br> Logiciel) 2 de L universite de <br>douala</div>
            <div class="align-items-center justify-content-center pt-5 pb-3 px-3"><button type="button" class=" rounded-1 shadow px-2 py-3 hover-button" onclick="window.location.href='{{route('connection')}}'">VOTRE ESPACE PERSONNEL</button></div>
        </div>
    </div>
    <div class="flex-row bg-brown1 align-items-center justify-content-center mt-2 mb-5">
        <div class="text-light text-center fs-4 py-2">A propos notre Cette Bibliotheque !</div>
        <div class="text-light text-center px-2 py-2 fs-5">Cette bibliotheque se base sur <br>les cours et les videos par des enseignants et <br>des professionnel de l univeriste de Douala.<br> <br><button class="py-3 px-4 rounded-5 shadow hover-button" onclick="window.location.href='{{route('inscription')}}'">S'INSCRIRE'</button></div>
    </div>
    @include('layouts.footer')
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.js')}}">
    </script>

</body>
</html>

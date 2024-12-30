<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD-Biblio</title>
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/welcome.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/lib/inscription.js')}}"></script>
    <style>
        .div-shadow{
            box-shadow: 0px 0px 4px 6px solid brown;
        }
    </style>
</head>
<body>
    @csrf
 @include('layouts.header_connection_success')
 @foreach ( $errors->all() as $error)
 <li class="alert alert-danger">{{$error}}</li>
 @endforeach
    <div class="container mt-5 mb-3 border-bottom border-primary py-3 rounded-3 px-4 shadow">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4 bg-light px-3 rounded">
            <div>
                <div class="flex-col py-2">
                    <h3 class="text-primary">Bienvenue, {{ $user->username }} <br><p class="text-primary fs-5">since {{$user->created_at}}</p></h3>
                    <div class="justify-content-between align-items-center">
                        <button type="button" class="btn btn-outline-success" onclick="window.location.href='{{route('user.show_all',$user->id)}}'">Information personnelle</button>
                        @if ($user->status=="Enseignant")
                            <button type="button" class="btn btn-outline-primary" onclick="window.location.href='{{route('books.create')}}'">Ajouter un Cours</button>
                        @endif
                    </div>
                   </div>
            </div>
        </div>


        <!-- Barre de recherche et tri -->
        <div class="mb-4">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Rechercher un livre ou une vidéo">
            <select class="form-select" aria-label="Tri par filière">
              <option selected>Filtrer par filière</option>
              <option value="1">Genie Informatique et Decisionnel (GID) 1</option>
              <option value="2">Methode Informatique Appliquee a la Gestion d Entreprise (MIAGE)</option>
              <option value="3">Mathematique et Informatique</option>
            </select>
            <button class="btn btn-primary">Rechercher</button>
          </div>
        </div>

        <!-- Section des Livres -->
        <h4 class="mb-3 text-primary">Cours et Supports Disponibles</h4>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ( $books as $book )
            <div class="col">
                <div class="card h-100 shadow">
                  <div class="card-body">
                    <h5 class="card-title">{{$book->title}}</h5>
                    <p class="card-text flex-wrap">Auteur: {{$book->author}}</p>
                    <p class="card-text flex-wrap">Description: {{$book->description}}</p>
                  </div>
                  <div class="card-footer d-flex justify-content-between align-items-center">
                    <button class="btn btn-outline-success" onclick="window.location.href='{{ asset('storage/' . $book->file_path) }}'">Télécharger(.pdf)</button>
                    <button class="btn btn-outline-danger" onclick="window.location.href='{{route('books.index')}}'">Voir plus <li class="fas fa-plus"></li></button>
                  </div>
                </div>
              </div>
            @endforeach

          <!-- Répéter pour d autres livres -->
        </div>

        <!-- Section des Vidéos -->
        <h4 class="mt-5 mb-3 text-primary">Vidéos Disponibles</h4>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col shadow">
            <div class="card h-100">
              <img src="video1.jpg" class="card-img-top" alt="Titre de la Vidéo">
              <div class="card-body">
                <h5 class="card-title">Titre de la Vidéo</h5>
                <p class="card-text">Description de la vidéo.</p>
              </div>
              <div class="card-footer d-flex justify-content-between align-items-center">
                <button class="btn btn-outline-primary">Regarder</button>
                <button class="btn btn-outline-danger">Voir plus <li class="fas fa"></li></button>
              </div>
            </div>
          </div>
          <!-- Répéter pour d autres vidéos -->
        </div>
      </div>
    @include('layouts.footer')
</body>
</html>

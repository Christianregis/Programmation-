<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout de livres</title>
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/welcome.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/lib/inscription.js')}}"></script>
</head>
@include('layouts.app')
<ul>
    @foreach ( $errors->all() as $error)
    <li class="alert alert-danger">{{$error}}</li>
    @endforeach
</ul>
<body>
<h1 class="text-center">Ajout de livres</h1>
<form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data" class="form-control container">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titre</label>
        <input type="text" id="title" name="title" class="form-control" placeholder="exple: COURS ANALYSE 1 GID" required>
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Auteur</label>
        <input type="text" id="author" name="author" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" id="description" name="description" class="form-control" placeholder="exple: Support de cours pour du premier semestre pour GID 1" required>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Fichier PDF</label>
        <input type="file" id="file" name="file" class="form-control" accept=".pdf" required>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
</body>
</html>

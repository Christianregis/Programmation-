<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Section de livres</title>
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/welcome.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/lib/inscription.js')}}"></script>
</head>
@include('layouts.app')
<body class="bg-dark bg-opacity-10">
    <div class="container">
        <h1 class="text-center bg-primary">Liste des livres</h1>

        @foreach($books as $book)
            <div class="card mb-3 shadow">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">Auteur : {{ $book->author }}</p>
                    <p class="card-text">Description : {{ $book->description }}</p>
                    <a href="{{ asset('storage/' . $book->file_path) }}" class="btn btn-primary" target="_blank">Télécharger</a>
                </div>
            </div>
        @endforeach
    </div>
    @include('layouts.footer')
</body>
</html>

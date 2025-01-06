<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page de Recuperation</title>
</head>
@include('layouts.app')
<body class="bg-dark bg bg-opacity-10">
    @csrf
    <ul>
        @foreach ( $errors->all() as $error)
        <li class="alert alert-danger rounded shadow">{{$error}}</li>
        @endforeach
    </ul>
    <div class="align-items-center justify-content-center min-vh-100 d-flex mb-4">
        <form class="rounded p-4 w-100 shadow" style="max-width: 400px;" method="GET" action="{{route('show_forgot')}}">
            <div class="text-center mb-4">
                <img src="{{asset('assets/image/fs_udo.jfif')}}" alt="image_udo" class="rounded-4 mx-auto d-block img-fluid" style="max-width: 200px; height: auto;">
            </div>
            <div>
                <div class="text-primary fs-5 mb-2">Formulaire de recuperation</div>
                <div class="form-group mb-3">
                    <label for="username" class="form-label"><i class="fas fa-user-circle me-2"></i>Entrez votre nom Utilisateur recent</label>
                    <input type="text" id="username" name="username" placeholder="Username de connection" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="full_name" class="form-label"><i class="fa fa-pencil me-2"></i>Entrez votre nom Complet</label>
                    <input type="full_name" id="full_name" name="full_name" placeholder="Nom complet" class="form-control" required>
                </div>
                @if (session('success'))
                <div class="form-group mb-3">
                    <label class="form-label alert alert-success">{{session('success')}}</label>
                </div>
                @endif
                @if (session('error'))
                <div class="form-group mb-3">
                    <label class="form-label alert alert-danger">{{session('error')}}</label>
                </div>
                @endif
                <button type="submit" class=" btn btn-outline-primary w-100">Soummetre</button>
            </div>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groupe WhatsApp</title>
    <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/css/bootstrap.css') }}">
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/Style.css')}}">
</head>
@include('layouts.header_user')
<body>
    <div class="zone_wtp">
        <!-- En-tête -->
        <div class="chat-header">
            <span>Groupe Discussion General</span>
        </div>

        <!-- Zone des messages -->
        <div class="chat-box">
            @foreach ($messages as $message)
                <!-- Message principal -->
                <div class="mb-2 p-2 rounded {{ $message->user_id == auth()->id() ? 'message sent' : 'message received' }} d-flex flex-column">
                    <span class="text-primary text-sm border-bottom border-dark mb-1"><a href="{{route('user.show',$message->user_id)}}" class="text-decoration-none"><strong>{{ $message->user->username }}</strong></a></span>
                    <p>{{ $message->message }}</p>
                    <small class="text-small text-gris border-bottom border-primary rounded pb-1">{{ $message->created_at->diffForHumans() }}</small>
                    <a href="{{route('message.reply',$message->id)}}" class="text-center text-primary text-decoration-none">Commenter <i class="fas fa-arrow-right"></i></a>
                </div>
            @endforeach
        </div>

        <!-- Barre d'envoi -->
        <div class="chat-input">
            <form method="GET" action="{{ route('message.store') }}" class="d-flex w-100">
                @csrf
                <input type="text" name="message" id="message" class="form-control" placeholder="Écrire un message..." required>
                <button type="submit" class="btn btn-success">Envoyer</button>
            </form>
        </div>
    </div>
</body>
</html>

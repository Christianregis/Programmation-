<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaire</title>
    <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/css/bootstrap.css') }}">
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/chat-reply.css')}}">
</head>
@include('layouts.header_user')
<body>
    <div class="zone_wtp">
        <!-- En-tête -->
        <div class="chat-header">
            <span>Repondre a ...</span>
        </div>

        <!-- Zone des messages -->
        <div class="chat-box">
                <div class="mb-2 p-2 rounded {{ $message->user_id == auth()->id() ? 'message sent' : 'message received' }} d-flex flex-column mb-5">
                    <span class="text-primary text-sm border-bottom border-dark mb-1"><a href="{{route('user.show',$message->user_id)}}" class="text-decoration-none"><strong>{{ $message->user->username }}</strong></a></span>
                    <p>{{ $message->message }}</p>
                    <small class="text-small text-gris">{{ $message->created_at->diffForHumans() }}</small>
                </div>
                <div class="text-center text-primary fw-bold fs-5"><i class="fas fa-arrow-down"></i> Reponse pour ce message <i class="fas fa-arrow-down"></i></div>
            <!-- Réponses -->
            <div class="mb-2 p-2 rounded {{ $message->user_id == auth()->id() ? 'message sent' : 'message received' }} d-flex flex-column">
            </div>
    </div>
        </div>

        <!-- Barre d'envoi -->
        <div class="chat-input">
            <form method="GET" action="{{ route('message.store') }}" class="d-flex w-100">
                @csrf
                <input type="hidden" name="parent_id" value="{{ $message->id }}">
                <input type="text" name="message" class="form-control" placeholder="Répondre..." required>
                <button type="submit" class="btn shadow btn-success mt-1">Répondre</button>
            </form>
        </div>
    </div>
</body>
</html>

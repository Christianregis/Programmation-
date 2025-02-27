<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groupe WhatsApp</title>
    <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/css/bootstrap.css') }}">
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <style>
        /* Style général */
        body {
            background-color: #e5ddd5;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .zone_wtp {
            background-color: #e5ddd5;
            height: 100vh;
            display: flex;
            flex-direction: column;
            margin-left: 80px;
        }

        .chat-header {
            background-color: #25776d;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        .chat-box {
            flex: 1;
            overflow-y: auto;
            padding: 15px;
            display: flex;
            flex-direction: column;
        }

        .message {
            max-width: 75%;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .received {
            background-color: #ffffff;
            align-self: flex-start;
        }

        .sent {
            background-color: #dcf8c6;
            align-self: flex-end;
            text-align: right;
        }

        .chat-input {
            background-color: #f8f9fa;
            padding: 10px;
            display: flex;
            align-items: center;
            border-top: 1px solid #ddd;
        }

        .chat-input input {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 20px;
            outline: none;
        }

        .chat-input button {
            background-color: #128c7e;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 20px;
            margin-left: 10px;
        }

        .reply {
            background-color: #f1f0f0;
            margin-left: 20px;
            margin-top: 5px;
            border-radius: 8px;
            padding: 8px;
        }

        .reply .text-small {
            font-size: 13px;
            color: gray;
        }
        .text-sm{
            font-size: 13px;
        }

    </style>
</head>
@include('layouts.header_user')
<body>
    <div class="zone_wtp">
        <!-- En-tête -->
        <div class="chat-header">
            <span>Groupe Discussion ISR</span>
        </div>

        <!-- Zone des messages -->
        <div class="chat-box">
            @foreach ($messages as $message)
                <!-- Message principal -->
                <div class="mb-2 p-2 rounded {{ $message->user_id == auth()->id() ? 'message sent' : 'message received' }} d-flex flex-column">
                    <span class="text-primary text-sm border-bottom border-dark mb-1"><a href="{{route('user.show',$message->user_id)}}" class="text-decoration-none"><strong>{{ $message->user->username }}</strong></a></span>
                    <p>{{ $message->message }}</p>
                    <small class="text-small text-gris border-bottom border-primary rounded pb-1">{{ $message->created_at->diffForHumans() }}</small>
                    <a href="{{route('messageisr.reply',$message->id)}}" class="text-center text-primary text-decoration-none">Commenter <i class="fas fa-arrow-right"></i></a>
                </div>
            @endforeach
        </div>

        <!-- Barre d'envoi -->
        <div class="chat-input">
            <form method="GET" action="{{ route('messageisr.store') }}" class="d-flex w-100">
                @csrf
                <input type="text" name="message" id="message" class="form-control" placeholder="Écrire un message..." required>
                <button type="submit" class="btn btn-success">Envoyer</button>
            </form>
        </div>
    </div>
</body>
</html>

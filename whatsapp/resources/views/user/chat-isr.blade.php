<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groupe WhatsApp</title>
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>

    <style>
        /* Style général */
        body {
            background-color: #e5ddd5;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .zone_wtp{
            background-color: #e5ddd5;
            height: 100vh;
            display: flex;
            flex-direction: column;
            margin-left: 80px;
        }

        /* En-tête du chat */
        .chat-header {
            background-color: #25776d;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        /* Zone de messages */
        .chat-box {
            flex: 1;
            overflow-y: auto;
            padding: 15px;
            display: flex;
            flex-direction: column;
        }

        /* Messages */
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

        /* Barre d'envoi */
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
        .text-small{
            font-size: 14px;
        }
        .text-gris{
            color: gray;
        }
    </style>
</head>
@include('layouts.header')
<body>
    @csrf
    <form action="{{route('messageisr.store')}}" method="GET">
    <div class="zone_wtp">
        <!-- En-tête du groupe -->
        <div class="chat-header">
            <span><i class="fab fa-whatsapp"></i> Groupe Discussion ISR</span>
        </div>
        <!-- Zone des messages -->
        <div class="chat-box">
                @foreach ($messages as $message)
                    <div class="mb-2 p-2 rounded {{$message->user_id== auth()->id() ? 'message sent':'message received'}} d-flex flex-column">
                        <a class="text-small text-primary border-bottom border-bottom-light mb-1 text-decoration-none me-1 ms-1" href="{{route('user.show',$message->user->id)}}">{{$message->user->username}}</a>
                        <strong class="mb-3">{{$message->message}}</strong>
                        <small class="text-gris text-small">{{$message->created_at}}</small>
                    </div>
                @endforeach
        </div>

        <!-- Zone d'envoi -->
        <div class="chat-input">
            <input type="text" id="message" name="message" class="form-control" placeholder="Écrire un message..." required>
            <button class="btn btn-success" type="submit">Envoyer</button>
        </div>
    </div>
</form>
</body>
</html>
